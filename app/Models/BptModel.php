<?php

namespace App\Models;

use CodeIgniter\Model;

class BptModel extends Model
{
    protected $table = 'bpt';
    protected $allowedFields = [
        'id', 'dir_id', 'name', 'description', 'service_no', 'weight_for', 'weight_ran',
        'miles_for', 'miles_ran', 'waiting_for', 'waiting_ran', 'is_county',
        'weekend', 'holyday', 'night', 'is_weekend', 'weekend_per_fix', 'weekend_value', 'is_holiday', 'holiday_per_fix', 'holiday_value', 'is_night', 'night_per_fix', 'night_value',
        'is_higher', 'fuel', 'night_to', 'night_from', 'night_to2', 'night_from2', 'min_pallets',
        'pallets_min_char', 'pallets_per_char'
    ];



    public function GetallbptRecord(){

        return $this->db->table($this->table)
        ->select('*')
        ->get()
        ->getResultArray();
    }


    public function GetbptDataById($id)
    {

        return $this->db
            ->table($this->table)
            ->select('*')
            ->where('dir_id', $id)
            ->get()
            ->getResultArray();
    }

    public function GetbptRecordsById($id)
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

    public function deletebptRecord($id)
    {


        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->delete();

          
    }





    
}
