<?php

namespace App\Models;

use CodeIgniter\Model;

class Cptchargesmodel extends Model
{
	protected $table = 'cpt_charges';
    protected $allowedFields = ['id','cpt_id', 'chr_name','chr_amt','per_fix','order_no'];
   


    public function GetCptchargesData(){

        return $this->db
        ->table($this->table)
        ->select('*')
        ->get()
        ->getRowArray();
    }
    public function GetCptchargesDatabyid($cpt_id){

        return $this->db
        ->table($this->table)
        ->select('*')->where('cpt_id',$cpt_id)
        ->orderBy('id','asc')
        ->limit(6)
        ->get()
        ->getResultArray();
    }
    public function checkRecordExists($cpt_id) {

        return $this->where('cpt_id', $cpt_id)->countAllResults() > 0;
    }

    public function Updatecptcharges($cpt_id, $service_charge)
    {


        return $this->db
            ->table($this->table)
            ->where('cpt_id', $cpt_id)
            ->update($service_charge);
    }


    // public function N($chr_name) {

    //     return $this->where('chr_name', $chr_name)->countAllResults() > 0;
    // }

    public function checkcptchargesRecordAllreadyExists($id) {
        return $this->where('id', $id)->countAllResults() > 0;
    }

    public function updatecptchargesRecord($id,$data) {
        return  $this->db->table($this->table)
             ->where('id', $id) ->update($data);
     }


     public function deleteCptcharges($cpt_id)
     {

         return $this->db
             ->table($this->table)
             ->where('cpt_id', $cpt_id)
             ->delete();
           
     }

}
