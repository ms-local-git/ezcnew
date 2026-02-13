<?php

namespace App\Models;

use CodeIgniter\Model;

class CptwaitingModel extends Model
{
	protected $table = 'cpt_waiting_for';
    protected $allowedFields = ['id','cpt_id', 'min_waiting','min_charges','per_charges'];
   
	

    public function GetwaitingRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('cpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($cpt_id) {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }


    public function UpdatewaitingData($cpt_id, $cptwaiting)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($cptwaiting);
    }

    public function UpdatecopywaitingData($cpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($data);

          
    }

    public function deletewaitingRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }
   

	



	
}
