<?php

namespace App\Models;

use CodeIgniter\Model;

class CptDirModel extends Model
{
    protected $table = 'cpt_dir';
    protected $allowedFields = ['id','name','description'];

     public function GetCptDirData(){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function GetCptDirDatabyid($id){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
}

?>
