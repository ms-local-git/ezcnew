<?php
namespace App\Models;

use CodeIgniter\Model;

class DriversModel extends Model
{
	protected $table = 'drivers';

	protected $allowedFields = ['driver_type','first_name', 'last_name','status', 'street','phone','zip', 'pager', 'city', 'pager_transmit', 'cell_company', 'email','country','emer_phone' ,'remarks','citizen','email_alert','is_sms_alert','is_email_alert','start_date','end_date','ssn','aen','dl_no','dl_expire', 'pl_no', 'pl_expire', 'insu_no', 'insu_expire', 'vehicle', 'v_make', 'v_model', 'radio_serial', 'sch_in', 'd_group', 'sch_out', 'show_board', 'driver_price_code', 'period', 'gurantee', 'w_mon', 'w_tue', 'w_wed', 'w_thu', 'w_fri', 'w_sat', 'w_sun'];
}

 ?>