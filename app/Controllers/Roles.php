<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\PermissionCategoryModel;
use App\Models\RolePermissionModel;
use Config\Database;

class Roles extends BaseController
{
    protected $db;
    protected $roleModel;
    protected $permissionModel;
    protected $categoryModel;
    protected $rolePermissionModel;

    public function __construct()
    {
        $this->db = Database::connect();

        $this->roleModel = new RoleModel();
        $this->permissionModel = new PermissionModel();
        $this->categoryModel = new PermissionCategoryModel();
        $this->rolePermissionModel = new RolePermissionModel();
    }


    public function index()
    {
        check_admin();

        return view('roles/index', [
            'page_title' => 'Roles',
            'roles' => $this->roleModel
                ->where('id !=', 2)
                ->findAll(),

        ]);
    }


    public function create()
    {
        check_admin();

        $permissionTree = $this->buildPermissionTree();

        return view('roles/create', [
            'page_title' => 'Add Role',
            'permissionTree' => $permissionTree
        ]);
    }


    public function store()
    {
        check_admin();
        $rules = [
            'name' => 'required|min_length[3]|is_unique[roles.name]',
            'slug' => 'required|min_length[3]|is_unique[roles.slug]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->db->transBegin();

        try {

            $roleId = $this->roleModel->insert([
                'name' => $this->request->getPost('name'),
                'slug' => $this->request->getPost('slug'),
            ]);

            if (!$roleId) {
                throw new \Exception('Failed to create role');
            }

            $this->rolePermissionModel->sync(
                $roleId,
                $this->getAllowedPermissionIdsFromRequest((string) $this->request->getPost('slug'))
            );

            $this->db->transCommit();

            return redirect()->to('/roles')
                ->with('msg', 'Role created successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();

            return redirect()->back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }



    public function edit($id)
    {
        check_admin();
        $role = $this->roleModel->find($id);

        if (!$role) {
            return redirect()->to('/roles')->with('error', 'Role not found');
        }

        $assignedIds = $this->rolePermissionModel
            ->getPermissionIdsByRole($id);

        $permissionTree = $this->buildPermissionTree();

        return view('roles/edit', [
            'page_title' => 'Edit Role',
            'role' => $role,
            'permissionTree' => $permissionTree,
            'assignedIds' => $assignedIds
        ]);
    }


    public function update($id)
    {
        check_admin();

        $rules = [
            'name' => "required|min_length[3]|is_unique[roles.name,id,{$id}]",
            'slug' => "required|min_length[3]|is_unique[roles.slug,id,{$id}]",
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->db->transBegin();

        try {

            $updated = $this->roleModel->update($id, [
                'name' => $this->request->getPost('name'),
                'slug' => $this->request->getPost('slug'),
            ]);

            if ($updated === false) {
                throw new \Exception('Failed to update role');
            }

            $this->rolePermissionModel->sync(
                $id,
                $this->getAllowedPermissionIdsFromRequest((string) $this->request->getPost('slug'))
            );

            $this->db->transCommit();

            return redirect()->to('/roles')
                ->with('msg', 'Role updated successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();

            return redirect()->back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }

    private function buildPermissionTree(): array
    {
        $categories = $this->categoryModel
            ->where('status', 1)
            ->orderBy('sort_order', 'ASC')
            ->findAll();

        $permissionTree = [];

        foreach ($categories as $cat) {
            $permissions = $this->permissionModel->getByCategory($cat['id']); // active only
            if (empty($permissions)) {
                continue; 
            }

            $permissionTree[] = [
                'category' => $cat,
                'permissions' => $permissions
            ];
        }

        return $permissionTree;
    }

    private function getAllowedPermissionIdsFromRequest(string $roleSlug = ''): array
    {
        $selected = $this->request->getPost('permissions') ?? [];
        if (empty($selected)) {
            return [];
        }

        $selectedIds = array_map('intval', (array) $selected);
        $selectedIds = array_values(array_unique($selectedIds));

        $activeRows = $this->permissionModel
            ->select('id')
            ->where('status', 1)
            ->whereIn('id', $selectedIds)
            ->findAll();

        $activeIds = array_map(static fn($r) => (int) $r['id'], $activeRows);
        if (empty($activeIds)) {
            return [];
        }

        $matchedCategoryIds = $this->getMatchedCategoryIdsForRoleSlug($roleSlug);
        if (empty($matchedCategoryIds)) {
            // No category match for slug -> keep all active selected ids.
            return $activeIds;
        }

        // Enforce: only permissions from matched categories.
        $rows = $this->permissionModel
            ->select('id')
            ->where('status', 1)
            ->whereIn('id', $activeIds)
            ->whereIn('category_id', $matchedCategoryIds)
            ->findAll();

        return array_map(static fn($r) => (int) $r['id'], $rows);
    }

    private function getMatchedCategoryIdsForRoleSlug(string $roleSlug): array
    {
        $normalizedRole = $this->normalizeSlug($roleSlug);
        if ($normalizedRole === '') {
            return [];
        }

        $categories = $this->categoryModel
            ->where('status', 1)
            ->findAll();

        $matched = [];
        foreach ($categories as $cat) {
            $catSlug = $cat['slug'] ?? '';
            if ($this->isCategoryMatchForRole($normalizedRole, $catSlug)) {
                $matched[] = (int) $cat['id'];
            }
        }

        return $matched;
    }

    private function isCategoryMatchForRole(string $normalizedRoleSlug, string $categorySlug): bool
    {
        $normalizedCategory = $this->normalizeSlug($categorySlug);
        if ($normalizedCategory === '' || $normalizedRoleSlug === '') {
            return false;
        }

        return str_contains($normalizedRoleSlug, $normalizedCategory)
            || str_contains($normalizedCategory, $normalizedRoleSlug);
    }

    private function normalizeSlug(string $value): string
    {
        return strtolower(preg_replace('/[^a-z0-9]+/', '', trim($value)));
    }
}
