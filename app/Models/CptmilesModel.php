<?php

namespace App\Models;

use CodeIgniter\Model;

class CptmilesModel extends Model
{
    protected $table = 'cpt_miles_for';
    protected $allowedFields = ['id', 'cpt_id', 'min_miles', 'min_charges', 'per_charges'];





    public function GetmilesforRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('cpt_id', $id)
            ->get()
            ->getRowArray();
    }

    public function checkRecordExists($cpt_id)
    {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }




    public function UpdatemilesData($cpt_id, $miles_base)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($miles_base);
    }

    
    public function UpdatecopymilesData($cpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($data);

          
    }

    public function deletemilesforRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }



    



    // public function checkmilesrecordExits(){
    //     return $this->where('id', $id)->countAllResults() > 0;

    // }

}
