<?php

namespace App\Models;

use CodeIgniter\Model;

class BptwaitingModel extends Model
{
	protected $table = 'bpt_waiting_for';
    protected $allowedFields = ['id','bpt_id', 'min_waiting','min_charges','per_charges'];
   
	

    public function GetwaitingRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('bpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($bpt_id) {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }


    public function UpdatewaitingData($bpt_id, $cptwaiting)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($cptwaiting);
    }

    public function UpdatecopywaitingData($bpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($data);

          
    }

    public function deletewaitingRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }
   

	



	
}
