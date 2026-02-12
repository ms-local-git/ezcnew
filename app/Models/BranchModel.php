<?php
namespace App\Models;

use CodeIgniter\Model;

class BranchModel extends Model
{
	protected $table = 'branchs';

	protected $allowedFields = ['branch_name','phone1', 'address1','fax1', 'address2','email','city', 'phone2', 'state', 'zip', 'fax2', 'b_contact_name','b_contact_phone','b_contact_email' ,'ain_ss_no','night_phone','night_fax','serving_airport','serving_zip','serving_city','insurance_image'];
}

 ?>