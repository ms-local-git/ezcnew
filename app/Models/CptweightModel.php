<?php

namespace App\Models;

use CodeIgniter\Model;

class CptweightModel extends Model
{
	protected $table = 'cpt_weight_for';
    protected $allowedFields = ['id','cpt_id', 'min_weight','min_charges','per_charges'];
   
	

   

	public function GetweightRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('cpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($cpt_id) {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }

    public function UpdateweightData($cpt_id, $cptweight)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($cptweight);
    }



    public function UpdatecopyweightData($cpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($data);

          
    }
    public function deleteweightRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }



	
}
