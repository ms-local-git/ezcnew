<?php

namespace App\Models;

use CodeIgniter\Model;

class CptDirModel extends Model
{
    protected $table = 'cpt_dir';
    protected $allowedFields = ['id','name','description'];
}

?>
