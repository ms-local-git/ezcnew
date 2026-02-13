<?php

namespace App\Models;

use CodeIgniter\Model;

class DptweightModel extends Model
{
	protected $table = 'dpt_weight_for';
    protected $allowedFields = ['id','dpt_id', 'min_weight','min_charges','per_charges'];
   
	

   

	public function GetweightRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('dpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($dpt_id) {

        return $this->where('dpt_id', $dpt_id)->countAllResults() > 0;
    }

    public function UpdateweightData($dpt_id, $dptweight)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->update($dptweight);
    }



    public function UpdatecopyweightData($dpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->update($data);

          
    }
    public function deleteweightRecord($dpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('dpt_id', $dpt_id)
            ->delete();

          
    }



	
}
