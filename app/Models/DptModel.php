<?php

namespace App\Models;

use CodeIgniter\Model;

class dptModel extends Model
{
    protected $table = 'dpt';
    protected $allowedFields = [
        'id', 'dir_id', 'name', 'description', 'service_no', 'weight_for', 'weight_ran',
        'miles_for', 'miles_ran', 'waiting_for', 'waiting_ran', 
        'weekend', 'holyday', 'night', 'is_weekend', 'is_weekend_per','weekend_per', 'is_holiday', 'is_holiday_per', 'holiday_per', 'is_night', 'is_night_per', 'night_per',
        'is_higher', 'fuel', 'night_to', 'night_from', 'night_to2', 'night_from2', 'min_pallets',
       
    ];



    public function GetalldptRecord(){

        return $this->db->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }
    public function GetdptRecordById($id){
        return $this->db->table($this->table)
        ->select('*')
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }


    public function GetdptDataById($id)
    {

        return $this->db
            ->table($this->table)
            ->select('*')
            ->where('dir_id', $id)
            ->get()
            ->getResultArray();
    }



    public function GetdptRecordsById($id)
    {

        return $this->db
            ->table($this->table)
            ->select('*')
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }


    public function UpdatepalletsData($dpt_id, $palletsData)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $dpt_id)
            ->update($palletsData);
    }




    public function checkRecordExists($dpt_id) {

        return $this->where('id', $dpt_id)->countAllResults() > 0;
    }



    public function UpdatecopycptData($id, $data)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->update($data);

          
    }

    public function deletedptRecord($id)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->delete();

          
    }





    
}
