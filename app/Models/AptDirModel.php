<?php

namespace App\Models;

use CodeIgniter\Model;

class AptDirModel extends Model
{
    protected $table = 'apt_dir';
    protected $allowedFields = ['id','name','description'];
}

?>
