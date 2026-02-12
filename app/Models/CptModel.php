<?php

namespace App\Models;

use CodeIgniter\Model;

class CptModel extends Model
{
    protected $table = 'cpt';
    protected $allowedFields = ['id','dir_id','name','description'];
}




?>