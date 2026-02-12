<?php
namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
	protected $table = 'jobs';

	protected $allowedFields = ['job_no','caller_name', 'master_password','reference_no', 'int_job_no'];
}

 ?>