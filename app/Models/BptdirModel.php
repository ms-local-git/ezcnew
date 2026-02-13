<?php

namespace App\Models;

use CodeIgniter\Model;

class BptdirModel extends Model
{
	protected $table = 'bpt_dir';
    protected $allowedFields = ['name','description'];

	

    public function GetbptDirData(){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function GetbptDirDatabyid($id){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }



	



	
}
