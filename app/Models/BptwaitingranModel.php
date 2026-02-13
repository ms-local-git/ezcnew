<?php

namespace App\Models;

use CodeIgniter\Model;

class BptwaitingranModel extends Model
{
	protected $table = 'bpt_waiting_ran';
    protected $allowedFields = ['id','bpt_id', 'from1','to1','value1','no1'];
   
	

   
    public function GetwaitingranRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('bpt_id',$id)
        ->get()
        -> getResultArray();

    }

    public function checkRecordExists($bpt_id) {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }



    
    public function checkwaitingranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatewaitingranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
	



    public function deletewaitingranRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }
	
}
