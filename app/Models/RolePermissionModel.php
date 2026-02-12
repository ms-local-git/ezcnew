<?php

namespace App\Models;

use CodeIgniter\Model;

class RolePermissionModel extends Model
{
    protected $table = 'role_permissions';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'role_id',
        'permission_id'
    ];

    /**
     * Get permission IDs for a role
     */
    public function getPermissionIdsByRole(int $roleId): array
    {
        return $this->where('role_id', $roleId)
                    ->findColumn('permission_id') ?? [];
    }

    /**
     * Sync permissions (Spatie-like)
     */
    public function sync(int $roleId, array $permissionIds)
    {
        $this->where('role_id', $roleId)->delete();

        if (!empty($permissionIds)) {
            $data = [];

            foreach ($permissionIds as $pid) {
                $data[] = [
                    'role_id' => $roleId,
                    'permission_id' => $pid
                ];
            }

            $this->insertBatch($data);
        }
    }
}
