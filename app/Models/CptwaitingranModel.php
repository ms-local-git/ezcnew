<?php

namespace App\Models;

use CodeIgniter\Model;

class CptwaitingranModel extends Model
{
	protected $table = 'cpt_waiting_ran';
    protected $allowedFields = ['id','cpt_id', 'from1','to1','value1','no1'];
   
	

   
    public function GetwaitingranRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('cpt_id',$id)
        ->get()
        -> getResultArray();

    }

    public function checkRecordExists($cpt_id) {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }



    
    public function checkwaitingranRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    
    public function updatewaitingranRecord($id,$data) {
     
        return  $this->db->table($this->table)
        ->where('id', $id) ->update($data);
       
    }
	



    public function deletewaitingranRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }
	
}
