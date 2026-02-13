<?php

namespace App\Models;

use CodeIgniter\Model;

class CptcountyModel extends Model
{
	protected $table = 'cpt_county';
    protected $allowedFields = ['id','cpt_id', 'from_county','to_county','charges','no1'];
   
	

    public function GetcountyRecord($id)
    {

        return $this->db->table($this->table)
            ->select('*')
            ->orderBy('id','asc')
            ->where('cpt_id', $id)
            ->get()
            ->getResultArray();
    }
    public function checkRecordExists($cpt_id) {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }

    public function Updatecountycharges($cpt_id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
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

public function deletecountyRecord($cpt_id)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->delete();

          
    }
   

	
   



	
}
