<?php

namespace App\Models;

use CodeIgniter\Model;

class DriverModel extends Model
{
    protected $table      = 'drivers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id','code','old_code','driver_type','first_name','last_name','status','street','phone','zip', 'user_name', 'user_password','state','vehicle',
        'pager','city','pager_transmit','cell_company','email','country',
        'emer_phone','remarks','citizen','email_alert','is_sms_alert',
        'is_email_alert','start_date','end_date','ssn','ain','dl_no',
        'dl_expire','pl_no','pl_expire','insu_no','insu_expire','veh',
        'v_make','v_model','radio_serial','sch_in','d_group','sch_out',
        'show_board','driver_price_code','period','gurantee',
        'w_mon','w_tue','w_wed','w_thu','w_fri','w_sat','w_sun'
    ];

    protected $beforeInsert = ['setDefaults'];
    protected $beforeUpdate = ['setDefaults'];
    
    protected function setDefaults(array $data)
    {
        $defaults = [
            'w_mon' => 0,
            'w_tue' => 0,
            'w_wed' => 0,
            'w_thu' => 0,
            'w_fri' => 0,
            'w_sat' => 0,
            'w_sun' => 0,
        ];
    
        $data['data'] = array_merge($defaults, $data['data']);
    
        return $data;
    }
    
    
    // protected array $casts = [
    //     'is_sms_alert' => 'integer',
    //     'is_email_alert' => 'integer',
    //     'show_board' => 'integer', 
    //     'w_mon' => 'integer',
    //     'w_tue' => 'integer',
    //     'w_wed' => 'integer',
    //     'w_thu' => 'integer',
    //     'w_fri' => 'integer',
    //     'w_sat' => 'integer',
    //     'w_sun' => 'integer',
    // ];
    
    
}
