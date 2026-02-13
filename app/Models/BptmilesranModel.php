<?php

namespace App\Models;

use CodeIgniter\Model;

class BptmilesranModel extends Model
{
    protected $table = 'bpt_miles_ran';
    protected $allowedFields = ['id', 'bpt_id', 'from1', 'to1', 'value1', 'no1'];



    public function GetmilesranRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->where('bpt_id', $id)
            ->orderBy('id','asc')
            ->get()
            ->getResultArray();
    }

    public function checkRecordExists($bpt_id)
    {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }

  



    public function checkmilesranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatemilesranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
   
    
    public function deletemilesranRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }

}
