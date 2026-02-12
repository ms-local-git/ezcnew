<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAttendanceRequestModel extends Model
{

    protected $table = 'user_attendance_request';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftdeletes = false;

    protected $allowedFields = [
        'user_id',
        'user_request',
        'request_notes',
        'check_in_date',
        'from_time',
        'to_time',
        'request_status',
    ];

    protected $useTimestamps=false;

    protected $validationRules =[
        'user_id'=>'permit_empty|max_length[25]',
        'user_request'=>'permit_empty|max_length[25]',
        'request_notes' => 'permit_empty|max_length[255]',
        'from_time'=>'permit_empty|valid_date',
        'to_time'=> 'permit_empty|valid_date',
        'request_status'=>'permit_empty|max_length[25]'
    ];

    protected $validationMessages=[];
    protected $skipValidation = false;

    public function getUserById($userId){
        return $this->where('user_id', $userId)->orderBy('id', 'DESC')->findAll();
    }

    public function updateStatus($id, $status){
        return $this->update($id, [
            'request_status'=> $status,
        ]);
    }

    public function checkinRequest($data){
       
        return $this->insert($data);
    }

    public function getAllRequest(){
        return $this->orderBy('id', 'DESC')->findAll();
    }
    

}
