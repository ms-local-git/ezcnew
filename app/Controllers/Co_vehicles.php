<?php

namespace App\Controllers;
use App\Models\VehicleModel;

class Co_vehicles extends BaseController
{

	public function max_value_manage()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql="select * from vehicle_max_value;";
        $values = $db->query($sql)->getFirstRow(); 
        $data['values']=$values;
            
		return view('co_vehicles/max_value_manage',$data);
	}

    public function max_value_update()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql_data=$request->getPost();

        $db->table('vehicle_max_value')->update($sql_data);
        
        $session->setFlashdata('msg','Vehicle Max Value Updated');
        return redirect()->to(base_url().'/co_vehicles/max_value_manage');
    }

	public function vehicle_listing()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        
		$sql="select drivers.first_name,last_name,vehicle_new.* 
        from vehicle_new left join drivers on drivers.id=vehicle_new.assign_driver";
        $vehicles = $db->query($sql)->getResultArray(); 
        $data['vehicles']=$vehicles;
        return view('co_vehicles/vehicle_listing',$data);
    }

    public function vehicle_history()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $id=$request->getPostGet('id');
        
		$sql="select * from vehicle_new where id='".$id."'";
        $vehicle = $db->query($sql)->getFirstRow(); 
        $data['vehicle']=$vehicle;

        $sql="select * from vehicle_new_history where vehicle_id='".$id."' 
        order by id DESC limit 100;";
        $history = $db->query($sql)->getResultArray(); 
        $data['history']=$history;

        return view('co_vehicles/vehicle_history',$data);
    }

    public function expense_listing()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $sql="select * from vehicle_new order by 1";
        $vehicles = $db->query($sql)->getResultArray(); 
        $data['vehicles']=$vehicles;

		if($request->getPost()!=null) {
            $from_date=h_sdate($request->getPost('from_date'));
            $to_date=h_sdate($request->getPost('to_date'));
            $vehicle=$request->getPost('vehicle');
            $account_head=$request->getPost('head');
            $sub_head=$request->getPost('sub_head');

			$filter="";
            if($vehicle!='') $filter.=" and  vehicle_id='".$vehicle."'";
            if($from_date!='') $filter.=" and  expense_date >= '".$from_date."'";
            if($to_date!='') $filter.=" and  expense_date<='".$to_date."'";
            if($vehicle!='') $filter.=" and  vehicle_id='".$vehicle."'";
            if($account_head!='') $filter.=" and  account_head='".$account_head."'";
            if($sub_head!='') $filter.=" and  name='".$sub_head."'";

            $sql="select vehicle_new_expense.*,plate,type,vehicle_new_expense.name as name2 
            from vehicle_new_expense,vehicle_new 
            where vehicle_new_expense.vehicle_id=vehicle_new.id ".$filter." 
            order by id desc  limit 200";
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        }

        return view('co_vehicles/expense_listing',$data);
    }

    public function toll_manage_list()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $sql="select * from toll_code order by id desc";
        $tolls = $db->query($sql)->getResultArray(); 
        $data['tolls']=$tolls;

        return view('co_vehicles/toll_manage_list',$data);
    }

    
    public function tolls_delete()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPostGet('id');
        $db->table('toll_code')->where('id',$id)->delete();
        $session->setFlashdata('msg','Successfully Deleted Toll');

        return redirect()->to(base_url().'/co_vehicles/toll_manage_list');
    }

    public function vehicle_miles_diff_report()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $from_date=h_sdate($request->getPost('from_date'));
            $to_date=h_sdate($request->getPost('to_date'));
            $vehicle=$request->getPost('vehicle'); 
            
            $filter="";
            if($vehicle!='') $filter.=" and  vehicle_id='".$vehicle."'";
            if($from_date!='') $filter.=" and  expense_date >= '".$from_date."'"; 
            if($to_date!='') $filter.=" and  expense_date<='".$to_date."'"; 
            
            $sql="select vehicle_new_expense.*,plate,type,vehicle_new_expense.name as name2 
            from vehicle_new_expense,vehicle_new 
            where vehicle_new_expense.vehicle_id=vehicle_new.id and account_head='gas' ".$filter." 
            order by vehicle_new.id,date(expense_date),odo_meter";
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;

            $sql="select * from vehicle_max_value";
            $max_value = $db->query($sql)->getFirstRow(); 
            $data['max_value']=$max_value;
        }

        $sql="select * from vehicle_new order by 1;";
        $vehicles = $db->query($sql)->getResultArray(); 
        $data['vehicles']=$vehicles;

        return view('co_vehicles/vehicle_miles_diff_report',$data);
    }

    public function summary_report()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        
        $from_date=date('2020-01-01');
        $to_date=date('Y-m-d');
        $driver_code=""; 

        if($request->getPost()!=null) {
            $from_date=$request->getPost('from_date');
            $to_date=$request->getPost('to_date');
            $driver_code=$request->getPost('driver'); 
        }
        
		$filter="";
		if($from_date!='') $filter.=" and  entry_date >= '".$from_date."'"; 
		if($to_date!='') $filter.=" and  entry_date<='".$to_date."'"; 
		if($driver_code!='') $filter.=" and  driver_code='".$driver_code."'";
		
        $sql="select * from vehicle_max_value";
        $max_value = $db->query($sql)->getFirstRow(); 
        $data['max_value']=$max_value;

		// die($sql);
		
		$sql="select distinct driver_id,driver_code,first_name,last_name from 
        vehicle_new_miles,drivers,vehicle_new 
        where vehicle_new_miles.vehicle_id= vehicle_new.id 
        and vehicle_new_miles.driver_id=drivers.id   ".$filter."    
		group by driver_id,driver_code,first_name,last_name order by driver_id limit 200";
        // die($sql);
        $reports = $db->query($sql)->getResultArray(); 
        $data['reports']=$reports;

        $data['from_date']=$from_date;
        $data['to_date']=$to_date;

        // print_r($data);die;

        return view('co_vehicles/summary_report',$data);
    }

    public function add()
	{   
		$db = \Config\Database::connect();
		return view('co_vehicles/vehicle');
	}

    public function create()
	{   $vehicle = new vehicleModel();
		$file   = $this->request->getFile('image');
		if($file->isValid() && ! $file->hasMoved())
		{
			$imgname = $file->getRandomName();
			echo $file->move('./assets/uploads/', $imgname);
		}

		$file   = $this->request->getFile('hut_image');
		if($file->isValid() && ! $file->hasMoved())
		{
			$hutimg = $file->getRandomName();
			echo $file->move('./assets/uploads/', $hutimg);
		}

		$file   = $this->request->getFile('registration_image');
		if($file->isValid() && ! $file->hasMoved())
		{
			$reg_img = $file->getRandomName();
			echo $file->move('./assets/uploads/', $reg_img);
		}

		$file   = $this->request->getFile('insurance_image');
		if($file->isValid() && ! $file->hasMoved())
		{
			$insu_img = $file->getRandomName();
			echo $file->move('./assets/uploads/', $insu_img);
		}

		$vin 	= 	$this->request->getVar('vin');
		$plate 		    = 	$this->request->getVar('plate');
		$type 		= 	$this->request->getVar('type');
		$purchase_date 	    = 	$this->request->getVar('purchase_date');
		$make         = 	$this->request->getVar('make');
		$model         = 	$this->request->getVar('model');
		$year           = 	$this->request->getVar('year');
		$gw  = 	$this->request->getVar('gw');
		$usable_weight            = 	$this->request->getVar('usable_weight');
		$color         = 	$this->request->getVar('color');
		$width      = 	$this->request->getVar('width');
		$length           = 	$this->request->getVar('length');
		$hut     = 	$this->request->getVar('hut');
		$registration            = 	$this->request->getVar('registration');
		$insurance         = 	$this->request->getVar('insurance');
		$sold_date        = 	$this->request->getVar('sold_date');
		$depriciation  = 	$this->request->getVar('depriciation');
		
			$data = array
			(   
				'vin'                   => $vin,
				'plate' 		        => $plate,
				'type' 				    => $type,
				'purchase_date' 		=> $purchase_date,
				'make'			        => $make,
				'model' 		        => $model,
				'year' 		            => $year,
				'gw' 		            => $gw,
				'usable_weight' 		=> $usable_weight,
				'color'                 => $color,
				'width' 		        => $width,
				
				'length' 		=> $length,
				'hut' 		=> $hut,
				'registration' 		=> $registration,
				'insurance' 		=> $insurance,

				'sold_date' 		    => $sold_date,
				'image' 		=> $imgname,
				'hut_image' 		=> $hutimg,
				'registration_image'			        => $reg_img,
				'insurance_image' 		            => $insu_img

			);
			$vehicle->save($data);
			return redirect()->to(base_url('co_vehicles/vehicle_listing'));

	}

    public function edit_listing()
	{
        $request = \Config\Services::request();
        $id=$request->getPostGet('id');

		$model = new vehicleModel();
		$data['row'] = $model->where('id', $id)->first();
		// print_r($data); die;
		return view('co_vehicles/edit', $data);

	}

	public function update()
	{   
        $id 	= 	$this->request->getVar('id');
	    $vin 	= 	$this->request->getVar('vin');
		$plate 		    = 	$this->request->getVar('plate');
		$type 		= 	$this->request->getVar('type');
		$purchase_date 	    = 	$this->request->getVar('purchase_date');
		$make         = 	$this->request->getVar('make');
		$model         = 	$this->request->getVar('model');
		$year           = 	$this->request->getVar('year');
		$gw  = 	$this->request->getVar('gw');
		$usable_weight            = 	$this->request->getVar('usable_weight');
		$color         = 	$this->request->getVar('color');
		$width      = 	$this->request->getVar('width');
		$length           = 	$this->request->getVar('length');
		$hut     = 	$this->request->getVar('hut');
		$registration            = 	$this->request->getVar('registration');
		$insurance         = 	$this->request->getVar('insurance');
		$sold_date        = 	$this->request->getVar('sold_date');
		$image        = 	$this->request->getVar('image');
		$hut_image          = 	$this->request->getVar('hut_image');
		$registration_image       = 	$this->request->getVar('registration_image');
		$insurance_image       = 	$this->request->getVar('insurance_image');
		$depriciation  = 	$this->request->getVar('depriciation');
		
			$data = array
			(   
				'vin'                   => $vin,
				'plate' 		        => $plate,
				'type' 				    => $type,
				'purchase_date' 		=> $purchase_date,
				'make'			        => $make,
				'model' 		        => $model,
				'year' 		            => $year,
				'gw' 		            => $gw,
				'usable_weight' 		=> $usable_weight,
				'color'                 => $color,
				'width' 		        => $width,
				
				'length' 		=> $length,
				'hut' 		=> $hut,
				'registration' 		=> $registration,
				'insurance' 		=> $insurance,

				'sold_date' 		    => $sold_date,
				'image' 		=> $image,
				'hut_image' 		=> $hut_image,
				'registration_image'			        => $registration_image,
				'insurance_image' 		            => $insurance_image

			);
			$model = new vehicleModel();
			$model->update($id, $data);

			return redirect()->to(base_url('co_vehicles/vehicle_listing'));

	}

}
