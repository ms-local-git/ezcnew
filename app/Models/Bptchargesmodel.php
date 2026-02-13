<?php

namespace App\Models;

use CodeIgniter\Model;

class Bptchargesmodel extends Model
{
	protected $table = 'bpt_charges';
    protected $allowedFields = ['id','bpt_id', 'chr_name','chr_amt','per_fix','order_no'];
   


    public function GetCptchargesData(){

        return $this->db
        ->table($this->table)   
        ->select('*')
        ->get()
        ->getRowArray();
    }
    public function GetbptchargesDatabyid($bpt_id){

        return $this->db
        ->table($this->table)
        ->select('*')->where('bpt_id',$bpt_id)
        ->orderBy('id','asc')
        ->limit(6)
        ->get()
        ->getResultArray();
    }
    public function checkRecordExists($bpt_id) {

        return $this->where('bpt_id', $bpt_id)->countAllResults() > 0;
    }

    public function Updatecptcharges($bpt_id, $service_charge)
    {


        return $this->db
            ->table($this->table)
            ->where('bpt_id', $bpt_id)
            ->update($service_charge);
    }


    // public function N($chr_name) {

    //     return $this->where('chr_name', $chr_name)->countAllResults() > 0;
    // }

    public function checkbptchargesRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    public function updatebptchargesRecord($id,$data) {
        return  $this->db->table($this->table)
             ->where('id', $id) ->update($data);
     }


     public function deletebptCharges($bpt_id)
     {

         return $this->db
             ->table($this->table)
             ->where('bpt_id', $bpt_id)
             ->delete();
           
     }

}
