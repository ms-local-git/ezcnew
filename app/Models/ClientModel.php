<?php
namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
	protected $table = 'clients';

	protected $allowedFields = ['branch','client_group', 'status','attention', 'phone1','phone2','name', 'caller_person', 'fax', 'street', 'emer_name', 'city','emer_phone','zip' ,'status','country','website','email','login_id','password','invoice_email','remarks','remarks_2','doj','opening_balance_date', 'credit_limit', 'credit_limit', 'opening_balance', 'special_discount', 'int_rate_30', 'referencer_required', 'int_rate_60', 'priority', 'int_rate_90', 'billing_method', 'quality_window', 'p_coverpage', 'p_long', 'p_ref_sum', 'p_ref_sum', 'a_email_job', 'af_del_time', 'a_fax_pod', 'af_del_time', 'brd_time', 'a_fax_job', 'a_fax_del', 'a_fax_pod', 'a_fax_ch', 'web_alert', 'auto_alert', 'airport1', 'airport_miles1', 'airport2', 'airport_miles2', 'airport3', 'airport_miles3', 'sales_person1', 'sales_person2', 'sales_person3', 'sales_person4', 'cc_accept', 'cc_auto_pay', 'card_name', 'card_no', 'card_address', 'card_city', 'card_city', 'card_phone'];
}

 ?>