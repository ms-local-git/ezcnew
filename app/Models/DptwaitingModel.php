<?php

namespace App\Models;

use CodeIgniter\Model;

class DptwaitingModel extends Model
{
	protected $table = 'dpt_waiting_for';
    protected $allowedFields = ['id','dpt_id', 'min_waiting','min_charges','per_charges'];
   
	

    public function GetwaitingRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('dpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($dpt_id) {

        return $this->where('dpt_id', $dpt_id)->countAllResults() > 0;
    }


    public function UpdatewaitingData($dpt_id, $dptwaiting)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->update($dptwaiting);
    }

    public function UpdatecopywaitingData($dpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->update($data);

          
    }

    public function deletewaitingRecord($dpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->delete();

          
    }
   

	



	
}
