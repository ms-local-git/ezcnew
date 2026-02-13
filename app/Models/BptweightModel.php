<?php

namespace App\Models;

use CodeIgniter\Model;

class BptweightModel extends Model
{
	protected $table = 'bpt_weight_for';
    protected $allowedFields = ['id','bpt_id', 'min_weight','min_charges','per_charges'];
   
	

   

	public function GetweightRecord($id){

        return $this->db->table($this->table)
        ->select('*')
        ->where('bpt_id',$id)
        ->get()
        -> getRowArray();

    }

    public function checkRecordExists($bpt_id) {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }

    public function UpdateweightData($bpt_id, $cptweight)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($cptweight);
    }



    public function UpdatecopyweightData($bpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($data);

          
    }
    public function deleteweightRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }



	
}
