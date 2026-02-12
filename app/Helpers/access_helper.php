<?php

use App\Models\PermissionCategoryModel;
use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\RolePermissionModel;

/**
 * Check if logged-in user's role has a specific permission (by permission slug)
 */
if (! function_exists('canPermission')) {

    function canPermission(string $permissionSlug): bool
    {
        // Must be logged in
        if (! session()->has('role_id')) {
            return false;
        }

        $roleId = (int) session('role_id');

        if ($roleId === 2) {
            return true;
        }

        $permissionModel     = new PermissionModel();
        $rolePermissionModel = new RolePermissionModel();

        // Get permission by slug
        $permission = $permissionModel
            ->where('slug', $permissionSlug)
            ->where('status', 1)
            ->first();

        if (! $permission) {
            return false;
        }

        // Check role_permission mapping
        return in_array(
            $permission['id'],
            $rolePermissionModel->getPermissionIdsByRole($roleId)
        );
    }
}


/**
 * Check if logged-in user's role has ANY permission in a category (by category slug)
 */
if (! function_exists('canCategory')) {

    function canCategory(string $categorySlug): bool
    {
        if (! session()->has('role_id')) {
            return false;
        }


        $roleId = (int) session('role_id');

        $categoryModel       = new PermissionCategoryModel();
        $permissionModel     = new PermissionModel();
        $rolePermissionModel = new RolePermissionModel();

        // Get category
        $category = $categoryModel
            ->where('slug', $categorySlug)
            ->where('status', 1)
            ->first();

        if (! $category) {
            return false;
        }

        // Get ACTIVE permissions under category.
        // If all permissions are status=0, this stays empty -> return false.
        $permissions = $permissionModel->getByCategory($category['id']);
        if (empty($permissions)) {
            return false;
        }

        // Super Admin bypass (only when category has active permissions)
        if ($roleId === 2) {
            return true;
        }

        // Get role permissions
        $rolePermissionIds = $rolePermissionModel
            ->getPermissionIdsByRole($roleId);

        // ANY match → allowed
        foreach ($permissions as $perm) {
            if (in_array($perm['id'], $rolePermissionIds)) {
                return true;
            }
        }

        return false;
    }
}


/**
 * Check if logged-in user has a specific role (by role name or slug)
 */
if (! function_exists('hasRole')) {

    function hasRole(string $roleSlugOrName): bool
    {
        if (! session()->has('role_id')) {
            return false;
        }

        $roleId = (int) session('role_id');

        // Super Admin shortcut
        if ($roleId === 2) {
            return true;
        }

        $roleModel = new RoleModel();
        $targetRoleId = $roleModel->getIdBySlugOrName($roleSlugOrName);

        if (! $targetRoleId) {
            return false;
        }

        return $roleId === $targetRoleId;
    }
}


if (! function_exists('getSidebarPermissions')) {

    function getSidebarPermissions(): array
    {
        if (! session()->has('role_id')) {
            return [];
        }

        $roleId = (int) session('role_id');

        // Super Admin → everything
        if ($roleId === 1) {
            return ['__super_admin__' => true];
        }

        $permissionModel = new PermissionModel();
        $rows = $permissionModel->getPermissionsByRoleStructured($roleId);

        $structured = [];

        foreach ($rows as $row) {

            $catSlug = $row['category_slug'];

            if (! isset($structured[$catSlug])) {
                $structured[$catSlug] = [
                    'category' => [
                        'id'   => $row['category_id'],
                        'name' => $row['category_name'],
                        'slug' => $row['category_slug'],
                    ],
                    'permissions' => []
                ];
            }

            $structured[$catSlug]['permissions'][$row['permission_slug']] = [
                'id'    => $row['permission_id'],
                'title' => $row['permission_title'],
            ];
        }

        return $structured;
    }

    function permission_check($permission)
    {
        if (!canPermission($permission)) {
            redirect()->to('/unauthorized')->send();
            exit;
        }
    }

    function check_admin()
    {
        if (!hasRole('Admin')) {
            redirect()->to('/unauthorized')->send();
            exit;
        };
    }

    function user_role(string $return = 'name'): ?string
    {
        $session = session();

        if (! $session->has('role_id')) {
            return null;
        }

        $roleId = (int) $session->get('role_id');

        $roleModel = new RoleModel();
        $role = $roleModel->find($roleId);
        if (! $role || empty($role)) {
            return null;
        }

        if ($return === 'slug') {
            return $role['slug'] ?? null;
        }
        return $role['name'] ?? null;
    }

    function is_admin()
    {
        return session()->get('role_id') === '2';
        
    }

    function check_login()
    {
        if (!session()->get('user_id')) {
            redirect()->to('/login')->send();
            exit;
        }
    }

        function self_check($id)
    {
        return $id == session('role_id');
    }
}
