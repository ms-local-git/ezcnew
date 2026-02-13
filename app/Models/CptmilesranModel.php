<?php

namespace App\Models;

use CodeIgniter\Model;

class CptmilesranModel extends Model
{
    protected $table = 'cpt_miles_ran';
    protected $allowedFields = ['id', 'cpt_id', 'from1', 'to1', 'value1', 'no1'];



    public function GetmilesranRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('cpt_id', $id)
            ->orderBy('id','asc')
            ->get()
            ->getResultArray();
    }

    public function checkRecordExists($cpt_id)
    {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }

  



    public function checkmilesranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatemilesranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
   
    
    public function deletemilesranRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }

}
