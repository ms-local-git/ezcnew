<?php
namespace App\Models;

use CodeIgniter\Model;

class ChangepasswordModel extends Model
{
	protected $table = 'cc_notes';

	protected $allowedFields = ['job_id','job_no','amount', 'done_amount','reference_no', 'notes','refund'];
}

 ?>