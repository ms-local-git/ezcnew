<?php

namespace App\Models;

use CodeIgniter\Model;

class AptModel extends Model
{
    protected $table            = 'apt';                    
    protected $primaryKey       = 'apt1id';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'dir_id',
        'name',
        'description',
        'service_no',
        'weight_for',
        'weight_ran',
        'miles_for',
        'miles_ran',
        'waiting_for',
        'waiting_ran',
        'is_county',
        'weekend',
        'holiday',
        'night',
        'is_weekend',
        'weekend_per_fix',
        'weekend_value',
        'is_holiday',
        'holiday_per_fix',
        'holiday_value',
        'is_night',
        'night_per_fix',
        'night_value',
        'is_higher',
        'fuel',
        'night_to',
        'night_from',
        'night_to2',
        'night_from2',
        'min_pallets',
        'pallets_min_char',
        'pallets_per_char'
    ];

    protected $useTimestamps = false; // Set to true if you have created_at/updated_at columns

    // Optional: Define return type
    protected $returnType = 'array'; // or 'object' or 'App\Entities\Apt'

    // Validation rules (optional but recommended)
    protected $validationRules = [
        'name'        => 'permit_empty|max_length[15]',
        'description' => 'permit_empty|max_length[25]',
        'weekend_per_fix' => 'permit_empty|exact_length[1]',
        'holiday_per_fix' => 'permit_empty|exact_length[1]',
        'night_per_fix'   => 'permit_empty|exact_length[1]',
    ];

    protected $validationMessages = [];

    // Cast types for proper handling (optional but useful)
    // protected $casts = [
    //     'apt1id'            => 'integer',
    //     'dir_id'            => '?integer',
    //     'service_no'        => '?integer',
    //     'weight_for'        => '?integer',
    //     'weight_ran'        => '?integer',
    //     'miles_for'         => '?integer',
    //     'miles_ran'         => '?integer',
    //     'waiting_for'       => '?integer',
    //     'waiting_ran'       => '?integer',
    //     'is_county'         => 'integer',
    //     'weekend'           => '?float',
    //     'holiday'           => '?float',
    //     'night'             => '?float',
    //     'is_weekend'        => '?integer',
    //     'weekend_value'     => '?float',
    //     'is_holiday'        => '?integer',
    //     'holiday_value'     => '?float',
    //     'is_night'          => '?integer',
    //     'night_value'       => '?float',
    //     'is_higher'         => '?integer',
    //     'fuel'              => 'float',
    //     'min_pallets'       => 'integer',
    //     'pallets_min_char'  => 'integer',
    //     'pallets_per_char'  => '?integer',
    // ];
}