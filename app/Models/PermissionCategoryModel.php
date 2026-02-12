<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionCategoryModel extends Model
{
    protected $table = 'permission_categories';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = ['name', 'slug', 'sort_order', 'status'];
}
