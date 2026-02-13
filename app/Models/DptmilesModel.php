<?php

namespace App\Models;

use CodeIgniter\Model;

class DptmilesModel extends Model
{
    protected $table = 'dpt_miles_for';
    protected $allowedFields = ['id', 'dpt_id', 'min_miles', 'min_charges', 'per_charges'];





    public function GetmilesforRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('dpt_id', $id)
            ->get()
            ->getRowArray();
    }

    public function checkRecordExists($dpt_id)
    {

        return $this->where('dpt_id', $dpt_id)->countAllResults() > 0;
    }




    public function UpdatemilesData($dpt_id, $miles_base)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->update($miles_base);
    }

    
    public function UpdatecopymilesData($dpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $cpt_id)
            ->update($data);

          
    }

    public function deletemilesforRecord($dpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->delete();

          
    }



    



    // public function checkmilesrecordExits(){
    //     return $this->where('id', $id)->countAllResults() > 0;

    // }

}
