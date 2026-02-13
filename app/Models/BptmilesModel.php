<?php

namespace App\Models;

use CodeIgniter\Model;

class BptmilesModel extends Model
{
    protected $table = 'bpt_miles_for';
    protected $allowedFields = ['id', 'bpt_id', 'min_miles', 'min_charges', 'per_charges'];





    public function GetmilesforRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('bpt_id', $id)
            ->get()
            ->getRowArray();
    }

    public function checkRecordExists($bpt_id)
    {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }




    public function UpdatemilesData($bpt_id, $miles_base)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($miles_base);
    }

    
    public function UpdatecopymilesData($bpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($data);

          
    }

    public function deletemilesforRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }



    



    // public function checkmilesrecordExits(){
    //     return $this->where('id', $id)->countAllResults() > 0;

    // }

}
