<?php
namespace App\Models;

use CodeIgniter\Model;

class AgentairportModel extends Model
{
	protected $table = 'agents_airports';

	protected $allowedFields = ['id','agent_id','air_port','a_zip_code', 'wday_rank','wend_rank', 'truck','radius','discount_miles', 'add_percentage', 'main_rank'];
}

 ?>