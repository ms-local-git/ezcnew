<?php

namespace App\Models;

use CodeIgniter\Model;

class DptmilesranModel extends Model
{
    protected $table = 'dpt_miles_ran';
    protected $allowedFields = ['id', 'dpt_id', 'from1', 'to1', 'value1', 'no1'];



    public function GetmilesranRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('dpt_id', $id)
            ->orderBy('id','asc')
            ->get()
            ->getResultArray();
    }

    public function checkRecordExists($dpt_id)
    {

        return $this->where('dpt_id', $dpt_id)->countAllResults() > 0;
    }

  



    public function checkmilesranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatemilesranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
   
    
    public function deletemilesranRecord($dpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->delete();

          
    }

}
