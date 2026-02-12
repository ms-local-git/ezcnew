<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = ['name', 'slug'];


      public function getIdBySlugOrName(string $value): ?int
    {
        $role = $this->groupStart()
            ->where('slug', $value)
            ->orWhere('name', $value)
            ->groupEnd()
            ->first();

        return $role ? (int) $role['id'] : null;
    }
}
