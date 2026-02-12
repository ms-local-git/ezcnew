<?php

namespace App\Models;

use CodeIgniter\Model;

class AgentsChargesTempModel extends Model
{
    protected $table            = 'agents_charges_temp';
    protected $primaryKey       = 'id';                  // Assuming your table has an auto-increment 'id'
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';               // or 'object' if you prefer
    protected $useSoftDeletes   = false;

    // Fields that are allowed to be mass-assigned (important for security)
    protected $allowedFields = [
        'agent_id',
        'settlement_no',
        // 'sett_amt',
        'settlement_date',
        'check_no',
        'check_date',
        'check_amt',
        'notes',
        // 'notice',
        
    ];

    // Dates handling
    protected $useTimestamps = true;                     // Automatically manage created_at & updated_at
    protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';          // Uncomment if using soft deletes

    // Validation rules (optional but recommended)
    protected $validationRules = [
        'agent_id'      => 'required|is_natural_no_zero',
        'settlement_no' => 'required|min_length[3]',
        'sett_amt'      => 'required|decimal',
        'sett_date'     => 'required|valid_date',
        'check_no'      => 'required',
        'check_date'    => 'required|valid_date',
        'check_amt'     => 'required|decimal',
        'notes'         => 'permit_empty|max_length[255]',
        'notice'        => 'permit_empty',
    ];

    protected $validationMessages = [
        'agent_id'      => [
            'required' => 'Agent ID is required.',
        ],
        'settlement_no' => [
            'required' => 'Settlement No is required.',
        ],
        'sett_amt'      => [
            'required' => 'Settlement Amount is required.',
            'decimal'  => 'Settlement Amount must be a valid number.',
        ],
        'check_amt'     => [
            'required' => 'Check Amount is required.',
            'decimal'  => 'Check Amount must be a valid number.',
        ],
    ];

    // Skip validation if you handle it in controller
    protected $skipValidation = false;

    /**
     * Get ACH record by agent_id (useful for editing)
     */
    public function getByAgentId(int $agentId)
    {
        return $this->where('agent_id', $agentId)->first();
    }

    /**
     * Get the latest ACH record for an agent (in case multiple exist)
     */
    // public function getLatestByAgentId(int $agentId)
    // {
    //     return $this->where('agent_id', $agentId)
    //                 ->orderBy('created_at', 'DESC')
    //                 ->first();
    // }
}