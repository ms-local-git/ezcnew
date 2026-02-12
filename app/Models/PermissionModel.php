<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionModel extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'category_id',
        'title',
        'slug',
        'description',
        'status'
    ];

    public function getByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)
            ->where('status', 1)
            ->findAll();
    }

    public function getPermissionsByRoleStructured(int $roleId): array
    {
        return $this->select(
            'permissions.id as permission_id,
             permissions.title as permission_title,
             permissions.slug as permission_slug,
             permission_categories.id as category_id,
             permission_categories.name as category_name,
             permission_categories.slug as category_slug'
        )
            ->join(
                'role_permissions',
                'role_permissions.permission_id = permissions.id'
            )
            ->join(
                'permission_categories',
                'permission_categories.id = permissions.category_id'
            )
            ->where('role_permissions.role_id', $roleId)
            ->where('permissions.status', 1)
            ->where('permission_categories.status', 1)
            ->orderBy('permission_categories.sort_order', 'ASC')
            ->findAll();
    }
}
