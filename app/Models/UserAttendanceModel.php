<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAttendanceModel extends Model
{
    protected $table            = 'users_attendance';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'user_id',
        'reason',
        'check_in',
        'check_out',
        'real_check_out',
        'out_type',
        'pic_in',
        'pic_out',
        'minutes',
        'day_minutes',
        'night_minutes',
        'old_mintues',
        'new_minutes',
    ];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

    public function getByUser($userId)
    {
        return $this->where('user_id', $userId)
                    ->orderBy('check_in', 'DESC')
                    ->findAll();
    }

    
    public function getByDate($userId, $date)
    {
        return $this->where('user_id', $userId)
                    ->where('DATE(check_in)', $date)
                    ->first();
    }

    public function checkIn(array $data)
    {
        return $this->insert($data);
    }

    
    public function checkOut($id, array $data)
    {
        return $this->update($id, $data);
    }
}
