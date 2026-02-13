<?php

namespace App\Models;

use CodeIgniter\Model;

class CptModel extends Model
{
    protected $table = 'cpt';
    protected $allowedFields = ['id','dir_id','name','description'];

    
    public function GetallcptRecord(){

        return $this->db->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }


    public function GetCptDataById($id)
    {

        return $this->db
            ->table($this->table)
            ->select('*')
            ->where('dir_id', $id)
            ->get()
            ->getResultArray();
    }

    public function GetCptRecordsById($id)
    {

        return $this->db
            ->table($this->table)
            ->select('*')
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }


    public function UpdatepalletsData($cpt_id, $palletsData)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $cpt_id)
            ->update($palletsData);
    }




    public function checkRecordExists($cpt_id) {

        return $this->where('id', $cpt_id)->countAllResults() > 0;
    }



    public function UpdatecopycptData($id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->update($data);

          
    }

    public function deletecptRecord($id)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->delete();

          
    }
}




?>