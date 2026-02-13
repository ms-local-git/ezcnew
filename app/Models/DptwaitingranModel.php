<?php

namespace App\Models;

use CodeIgniter\Model;

class DptwaitingranModel extends Model
{
	protected $table = 'dpt_waiting_ran';
    protected $allowedFields = ['id','dpt_id', 'from1','to1','value1','no1'];
   
	

   
    public function GetwaitingranRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('dpt_id',$id)
        ->get()
        -> getResultArray();

    }

    public function checkRecordExists($dpt_id) {

        return $this->where('dpt_id', $dpt_id)->countAllResults() > 0;
    }



    
    public function checkwaitingranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatewaitingranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
	



    public function deletewaitingranRecord($dpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->delete();

          
    }
	
}
