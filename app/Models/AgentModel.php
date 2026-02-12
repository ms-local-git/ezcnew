<?php
namespace App\Models;

use CodeIgniter\Model;

class AgentModel extends Model
{
	protected $table = 'agents';

	protected $allowedFields = ['agent_name','code','code2','phone', 'em_phone','cellphone', 'agent_price_code','fax','customer_no','notes', 'start_date', 'category', 'address1', 'city', 'state','zip','email' ,'website','attention','ain','ssn'];
}

 ?>