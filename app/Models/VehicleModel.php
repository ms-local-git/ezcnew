<?php
namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
	protected $table = 'vehicle_new';

	protected $allowedFields = ['vin','plate', 'type','purchase_date', 'make','model','year', 'gw', 'usable_weight', 'pager_transmit', 'color', 'width','length','hut' ,'registration','insurance','sold_date','image','hut_image','registration_image','insurance_image','assign_driver','assign_datetime','assign_by','depriciation'];
}

 ?>