<?php

namespace App\Models;

use CodeIgniter\Model;

class DptdirModel extends Model
{
	protected $table = 'dpt_dir';
    protected $allowedFields = ['name','description'];

	

    public function GetdptDirData(){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function GetdptDirDatabyid($id){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }



	



	
}
