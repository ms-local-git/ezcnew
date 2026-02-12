<?php

namespace App\Controllers;
use App\Models\DriverModel;


class D_info extends BaseController
{

	public function search()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();


	
		$data=[];
		if($request->getVar('search-keyword')){
			$keyword=$request->getVar('search-keyword');
			// dd($keyword);
			$data["drivers"]=search_data($keyword,'drivers');

					return view('drivers/listing',$data);

		}

		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $search=h_safe_sql($request->getPost('search'));
            $first_name=$request->getPost('first_name');
            $last_name=$request->getPost('last_name');
            $vehicle=$request->getPost('vehicle');
            $city=$request->getPost('city');
            $phone=$request->getPost('phone');
            $state=$request->getPost('state');
            $email=$request->getPost('email');
			// dd($vehicle);
            $filter="";
            if ($first_name!="")  $filter .=' and first_name like"%'.$search.'%"';
            if ($last_name!="")  $filter .=' and last_name like"%'.$search.'%"';
            if ($vehicle!="")  $filter .=' and vehicle like"%'.$search.'%"';
            if ($city!="")  $filter .=' and city like"%'.$search.'%"';
            if ($phone!="")  $filter .=' and phone like"%'.$search.'%"';
            if ($state!="")  $filter .=' and state like"%'.$search.'%"';
            if ($email!="")  $filter .=' and email like"%'.$search.'%"';

			if($filter=="") $filter.=' and first_name like"%'.$search.'%"';
        			// dd($filter);

            $sql1 ='select * from drivers where 1 '.$filter.' order by code limit 100;';
            $drivers = $db->query($sql1)->getResultArray(); 
            
            $data["drivers"]=$drivers;
        } else {
            $data=array();
        }
		
		return view('drivers/listing',$data);
	}
	
	public function driver_add()
	{   
		$db = \Config\Database::connect();
		return view('drivers/driver_add');
	}

    
    // public function create()
	// {   $driver_type 	= 	$this->request->getVar('driver_type');
	// 	$first_name 		    = 	$this->request->getVar('first_name');
	// 	$last_name 		= 	$this->request->getVar('last_name');
	// 	$status 	    = 	$this->request->getVar('status');
	// 	$street         = 	$this->request->getVar('street');
	// 	$phone         = 	$this->request->getVar('phone');
	// 	$zip           = 	$this->request->getVar('zip');
	// 	$pager  = 	$this->request->getVar('pager');
	// 	$city            = 	$this->request->getVar('city');
	// 	$pager_transmit         = 	$this->request->getVar('pager_transmit');
	// 	$cell_company      = 	$this->request->getVar('cell_company');
	// 	$cell_company           = 	$this->request->getVar('cell_company');
	// 	$email     = 	$this->request->getVar('email');
	// 	$country            = 	$this->request->getVar('country');
	// 	$emer_phone         = 	$this->request->getVar('emer_phone');
	// 	$citizen        = 	$this->request->getVar('citizen');
	// 	$user_name        = 	$this->request->getVar('user_name');
	// 	$remarks          = 	$this->request->getVar('remarks');
	// 	$email_alert       = 	$this->request->getVar('email_alert');
	// 	$is_sms_alert       = 	$this->request->getVar('is_sms_alert');
	// 	$is_email_alert  = 	$this->request->getVar('is_email_alert');
	// 	$start_date        = 	$this->request->getVar('start_date');
	// 	$end_date      = 	$this->request->getVar('end_date');
	// 	$ssn            = 	$this->request->getVar('ssn');
	// 	$ain     = 	$this->request->getVar('ain');
	// 	$dl_no     = 	$this->request->getVar('dl_no');
	// 	$dl_expire     = 	$this->request->getVar('dl_expire');
	// 	$pl_no     = 	$this->request->getVar('pl_no');
	// 	$int_rate_30     = 	$this->request->getVar('int_rate_30');
	// 	$pl_expire     = 	$this->request->getVar('pl_expire');
	// 	$insu_no     = 	$this->request->getVar('insu_no');
	// 	$insu_expire     = 	$this->request->getVar('insu_expire');
	// 	$vehicle     = 	$this->request->getVar('vehicle');
	// 	$v_make     = 	$this->request->getVar('v_make');
	// 	$v_model     = 	$this->request->getVar('v_model');
	// 	$radio_serial     = 	$this->request->getVar('radio_serial');
	// 	$sch_in          = 	$this->request->getVar('sch_in');
	// 	$d_group       = 	$this->request->getVar('d_group');
	// 	$sch_out     = 	$this->request->getVar('sch_out');
	// 	$show_board     = 	$this->request->getVar('show_board');
	// 	$driver_price_code       = 	$this->request->getVar('driver_price_code');
	// 	$period      = 	$this->request->getVar('period');
	// 	$gurantee        = 	$this->request->getVar('gurantee');
	// 	$reports  = 	$this->request->getVar('reports');
	// 	$w_mon     = 	$this->request->getVar('w_mon');

	// 	$w_tue     = 	$this->request->getVar('w_tue');
	// 	$w_wed     = 	$this->request->getVar('w_wed');
	// 	$w_thu     = 	$this->request->getVar('w_thu');
	// 	$w_fri     = 	$this->request->getVar('w_fri');
	// 	$w_sat     = 	$this->request->getVar('w_sat');
	// 	$w_sun     = 	$this->request->getVar('w_sun');
		
	// 		$data = array
	// 		(   
	// 			'driver_type'                   => $driver_type,
	// 			'first_name' 		            => $first_name,
	// 			'last_name' 				    => $last_name,
	// 			'status' 				=> $status,
	// 			'street'			        => $street,
	// 			'phone' 		            => $phone,
	// 			'zip' 		=> $zip,
	// 			'pager' 		=> $pager,
	// 			'city' 		=> $city,
	// 			'pager_transmit'                   => $pager_transmit,
	// 			'cell_company' 		    => $cell_company,
				
	// 			'email' 		=> $email,
	// 			'country' 		=> $country,
	// 			'emer_phone' 		=> $emer_phone,
	// 			'remarks' 		=> $remarks,

	// 			'citizen' 		    => $citizen,
	// 			'email_alert' 		=> $email_alert,
	// 			'is_sms_alert' 		=> $is_sms_alert,
	// 			'is_email_alert'			        => $is_email_alert,
	// 			'start_date' 		            => $start_date,
	// 			'end_date' 		=> $end_date,
				
	// 			'ssn' 		=> $ssn,
	// 			'ain' 		    => $ain,
	// 			'dl_no' 		=> $dl_no,
	// 			'dl_expire' 		=> $dl_expire,
	// 			'pl_no' 		=> $pl_no,
	// 			'pl_expire' 		=> $pl_expire,
	// 			'insu_no' 		=> $insu_no,
	// 			'insu_expire' 		=> $insu_expire,
	// 			'vehicle' 		=> $vehicle,
	// 			'v_make' 		=> $v_make,
	// 			'v_model' 		=> $v_model,
	// 			'radio_serial' 		=> $radio_serial,
	// 			'sch_in' 		=> $sch_in,
	// 			'd_group' 		=> $d_group,
	// 			'sch_out' 		=> $sch_out,
	// 			'show_board' 		=> $show_board,
	// 			'driver_price_code' 		=> $driver_price_code,
	// 			'period' 		=> $period,
	// 			'gurantee' 		=> $gurantee,
	// 			'w_mon' 		=> $w_mon,
	// 			'w_tue' 		=> $w_tue,
	// 			'w_wed' 		=> $w_wed,
	// 			'w_thu' 		=> $w_thu,
	// 			'w_fri' 		=> $w_fri,
	// 			'w_sat' 		=> $w_sat,
	// 			'w_sun' 		=> $w_sun

	// 		);
	// 		$db = \Config\Database::connect();
	// 		$builder = $db->table('drivers');
	// 		$builder->insert($data);
	// 		return redirect()->to(base_url('d_info/search'));

	// }

	public function create()
{
	


	$first_name=$this->request->getPost('first_name')??'';
	helper("fun_helper");
	$d_id =get_new_id("drivers","id");
	$d_acc_no = get_new_driver_no($first_name); 

	$old_code=99999;

	if (isset($vars['operation']) && $vars['operation'] === 'i') {

    $cptDirModel = new CptDirModel();
    $cptModel    = new CptModel();


    
    $dirData = [
        'name'        => $d_acc_no,
        'description' => 'For Account ' . $d_acc_no
    ];

    $dir_id = $cptDirModel->insert($dirData, true); 


    $cptData = [
        'dir_id'      => $dir_id,
        'name'        => 'Default',
        'description' => 'Default Price Table'
    ];

    $cptModel->insert($cptData);
}

    $driverModel = new DriverModel();

	
	$days = ['w_mon','w_tue','w_wed','w_thu','w_fri','w_sat','w_sun'];

	

    $data = $this->request->getPost([
        'driver_type','first_name','last_name','status','state','street','phone','zip','user_password',
        'pager','city','pager_transmit','cell_company','email','country',
        'emer_phone','remarks','citizen','email_alert','is_sms_alert',
        'is_email_alert','start_date','end_date','ssn','ain','dl_no',
        'dl_expire','pl_no','pl_expire','insu_no','insu_expire','vehicle',
        'v_make','v_model','radio_serial','sch_in','d_group','sch_out',
        'show_board','driver_price_code','period','gurantee','reports',
        'w_mon','w_tue','w_wed','w_thu','w_fri','w_sat','w_sun'
    ]);
	$data['id']=$d_id;
	$data['code']=$d_acc_no;
	$data['old_code']=$old_code;
	$data['user_name']=$d_acc_no;
	// dd($data);
	foreach ($days as $day) {
			if (!isset($data[$day])) {
				$data[$day] = 0;
			}
		};
		if (!isset($data['show_board'])) {
				$data['show_board'] = 0;
			};
				// dd($data);

    $driverModel->insert($data);

    return redirect()->to(base_url('d_info/search'));
}

	public function driver_edit()
	{
		$db = \Config\Database::connect();
		$request = \Config\Services::request();
		$id=$request->getPostGet('id');
		// $model = new DriversModel();
		$sql="select * from drivers where id='".$id."'";
        $row = $db->query($sql)->getFirstRow(); 
		$data['row'] = $row;
		// $data['row'] = $model->where('id', $id)->first();
		// print_r($data); die;
		return view('drivers/driver_edit', $data);

	}

	// public function update()
	// {   
	// 	$session = \Config\Services::session();
	// 	$request = \Config\Services::request();
	// 	$db = \Config\Database::connect();

	// 	$id 	= 	$this->request->getVar('id');
	//     $driver_type 	= 	$this->request->getVar('driver_type');
	// 	$first_name 		    = 	$this->request->getVar('first_name');
	// 	$last_name 		= 	$this->request->getVar('last_name');
	// 	$status 	    = 	$this->request->getVar('status');
	// 	$street         = 	$this->request->getVar('street');
	// 	$phone         = 	$this->request->getVar('phone');
	// 	$zip           = 	$this->request->getVar('zip');
	// 	$pager  = 	$this->request->getVar('pager');
	// 	$city            = 	$this->request->getVar('city');
	// 	$pager_transmit         = 	$this->request->getVar('pager_transmit');
	// 	$cell_company      = 	$this->request->getVar('cell_company');
	// 	$cell_company           = 	$this->request->getVar('cell_company');
	// 	$email     = 	$this->request->getVar('email');
	// 	$country            = 	$this->request->getVar('country');
	// 	$emer_phone         = 	$this->request->getVar('emer_phone');
	// 	$citizen        = 	$this->request->getVar('citizen');
	// 	$user_name        = 	$this->request->getVar('user_name');
	// 	$remarks          = 	$this->request->getVar('remarks');
	// 	$email_alert       = 	$this->request->getVar('email_alert');
	// 	$is_sms_alert       = 	$this->request->getVar('is_sms_alert');
	// 	$is_email_alert  = 	$this->request->getVar('is_email_alert');
	// 	$start_date        = 	$this->request->getVar('start_date');
	// 	$end_date      = 	$this->request->getVar('end_date');
	// 	$ssn            = 	$this->request->getVar('ssn');
	// 	$ain     = 	$this->request->getVar('ain');
	// 	$dl_no     = 	$this->request->getVar('dl_no');
	// 	$dl_expire     = 	$this->request->getVar('dl_expire');
	// 	$pl_no     = 	$this->request->getVar('pl_no');
	// 	$int_rate_30     = 	$this->request->getVar('int_rate_30');
	// 	$pl_expire     = 	$this->request->getVar('pl_expire');
	// 	$insu_no     = 	$this->request->getVar('insu_no');
	// 	$insu_expire     = 	$this->request->getVar('insu_expire');
	// 	$vehicle     = 	$this->request->getVar('vehicle');
	// 	$v_make     = 	$this->request->getVar('v_make');
	// 	$v_model     = 	$this->request->getVar('v_model');
	// 	$radio_serial     = 	$this->request->getVar('radio_serial');
	// 	$sch_in          = 	$this->request->getVar('sch_in');
	// 	$d_group       = 	$this->request->getVar('d_group');
	// 	$sch_out     = 	$this->request->getVar('sch_out');
	// 	$show_board     = 	$this->request->getVar('show_board');
	// 	$driver_price_code       = 	$this->request->getVar('driver_price_code');
	// 	$period      = 	$this->request->getVar('period');
	// 	$gurantee        = 	$this->request->getVar('gurantee');
	// 	$reports  = 	$this->request->getVar('reports');
	// 	$w_mon     = 	$this->request->getVar('w_mon');

	// 	$w_tue     = 	$this->request->getVar('w_tue');
	// 	$w_wed     = 	$this->request->getVar('w_wed');
	// 	$w_thu     = 	$this->request->getVar('w_thu');
	// 	$w_fri     = 	$this->request->getVar('w_fri');
	// 	$w_sat     = 	$this->request->getVar('w_sat');
	// 	$w_sun     = 	$this->request->getVar('w_sun');
		
	// 		$data = array
	// 		(   
	// 			'driver_type'                   => $driver_type,
	// 			'first_name' 		            => $first_name,
	// 			'last_name' 				    => $last_name,
	// 			'status' 				=> $status,
	// 			'street'			        => $street,
	// 			'phone' 		            => $phone,
	// 			'zip' 		=> $zip,
	// 			'pager' 		=> $pager,
	// 			'city' 		=> $city,
	// 			'pager_transmit'                   => $pager_transmit,
	// 			'cell_company' 		    => $cell_company,
				
	// 			'email' 		=> $email,
	// 			'country' 		=> $country,
	// 			'emer_phone' 		=> $emer_phone,
	// 			'remarks' 		=> $remarks,

	// 			'citizen' 		    => $citizen,
	// 			'email_alert' 		=> $email_alert,
	// 			'is_sms_alert' 		=> $is_sms_alert,
	// 			'is_email_alert'			        => $is_email_alert,
	// 			'start_date' 		            => $start_date,
	// 			'end_date' 		=> $end_date,
				
	// 			'ssn' 		=> $ssn,
	// 			'ain' 		    => $ain,
	// 			'dl_no' 		=> $dl_no,
	// 			'dl_expire' 		=> $dl_expire,
	// 			'pl_no' 		=> $pl_no,
	// 			'pl_expire' 		=> $pl_expire,
	// 			'insu_no' 		=> $insu_no,
	// 			'insu_expire' 		=> $insu_expire,
	// 			'vehicle' 		=> $vehicle,
	// 			'v_make' 		=> $v_make,
	// 			'v_model' 		=> $v_model,
	// 			'radio_serial' 		=> $radio_serial,
	// 			'sch_in' 		=> $sch_in,
	// 			'd_group' 		=> $d_group,
	// 			'sch_out' 		=> $sch_out,
	// 			'show_board' 		=> $show_board,
	// 			'driver_price_code' 		=> $driver_price_code,
	// 			'period' 		=> $period,
	// 			'gurantee' 		=> $gurantee,
	// 			'w_mon' 		=> $w_mon,
	// 			'w_tue' 		=> $w_tue,
	// 			'w_wed' 		=> $w_wed,
	// 			'w_thu' 		=> $w_thu,
	// 			'w_fri' 		=> $w_fri,
	// 			'w_sat' 		=> $w_sat,
	// 			'w_sun' 		=> $w_sun

	// 		);
	// 		// $model = new DriversModel();
	// 		// $model->update($id, $data);
	// 		$db->table('drivers')->where("id",$id)->update($data);

	// 		return redirect()->to(base_url('d_info/driver_edit?id='.$id));

	// }

	public function update()
{
	// dd($this->request->getPost());
    $driverModel = new DriverModel();

    // ID is mandatory
    $id = $this->request->getPost('id');

    // Get all request data at once
    $vars = $this->request->getPost();

	$days = ['w_mon','w_tue','w_wed','w_thu','w_fri','w_sat','w_sun'];
	foreach ($days as $day) {
			if (!isset($vars[$day])) {
				$vars[$day] = 0;
			}
		};
		if (!isset($vars['show_board'])) {
				$vars['show_board'] = 0;
			}
		if (!isset($vars['is_sms_alert'])) {
				$vars['is_sms_alert'] = 0;
			}

		if (!isset($vars['is_email_alert'])) {
				$vars['is_email_alert'] = 0;
			}

    // Remove unwanted fields
    unset($vars['id'], $vars['submit']);
			// dd($vars);
    // Update using model
    $driverModel->update($id, $vars);

    return redirect()->to(base_url('d_info/driver_edit?id=' . $id));
}
	
}
