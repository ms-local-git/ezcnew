<?php

namespace App\Models;

use CodeIgniter\Model;

class BptcountyModel extends Model
{
	protected $table = 'bpt_county';
    protected $allowedFields = ['id','bpt_id', 'from_county','to_county','charges','no1'];
   
	

    public function GetcountyRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->orderBy('id','asc')
            ->where('bpt_id', $id)
            ->get()
            ->getResultArray();
    }
    public function checkRecordExists($bpt_id) {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }

    public function Updatecountycharges($bpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($data);
    }

// checdk county record 
public function checkcountyRecordAllreadyExists($id) {
    return $this->where('id', $id)->countAllResults() > 0;
}


public function updateCountyRecord($id,$data) {



   
    return  $this->db->table($this->table)
    ->where('id', $id) ->update($data);
}

public function deletecountyRecord($bpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->delete();

          
    }
   

	
   



	
}
