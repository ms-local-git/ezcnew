<?php

namespace App\Controllers;
use App\Models\BranchModel;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class Branch extends BaseController
{
	public function __construct()
	{
	
	}

	public function index()
	{   $db = \Config\Database::connect();
		$sql1 ='select * from branchs';
		$branch = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($branch);die;
		$data["branch"]=$branch;
		return view('branch/listing', $data);
	}
	public function add()
	{   
		$db = \Config\Database::connect();
		return view('branch/branch');
	}

	

	
    
    public function create()
	{   $branch = new BranchModel();
		

		$branch_name 	= 	$this->request->getVar('branch_name');
		$phone1 		    = 	$this->request->getVar('phone1');
		$address1 		= 	$this->request->getVar('address1');
		$fax1 	    = 	$this->request->getVar('fax1');
		$address2         = 	$this->request->getVar('address2');
		$email         = 	$this->request->getVar('email');
		$city           = 	$this->request->getVar('city');
		$phone2  = 	$this->request->getVar('phone2');
		$state            = 	$this->request->getVar('state');
		$zip         = 	$this->request->getVar('zip');
		$fax2      = 	$this->request->getVar('fax2');
		$b_contact_name           = 	$this->request->getVar('b_contact_name');
		$b_contact_phone     = 	$this->request->getVar('b_contact_phone');
		$b_contact_email            = 	$this->request->getVar('b_contact_email');
		$ain_ss_no         = 	$this->request->getVar('ain_ss_no');
		$night_phone        = 	$this->request->getVar('night_phone');
		$night_fax  = 	$this->request->getVar('night_fax');
		$serving_city  = 	$this->request->getVar('serving_city');
		$serving_airport  = 	$this->request->getVar('serving_airport');
		$serving_zip  = 	$this->request->getVar('serving_zip');
		
			$data = array
			(   
				'branch_name'                   => $branch_name,
				'phone1' 		        => $phone1,
				'address1' 				    => $address1,
				'fax1' 		=> $fax1,
				'address2'			        => $address2,
				'email' 		        => $email,
				'city' 		            => $city,
				'phone2' 		            => $phone2,
				'state' 		=> $state,
				'zip'                 => $zip,
				'fax2' 		        => $fax2,
				
				'b_contact_name' 		=> $b_contact_name,
				'b_contact_phone' 		=> $b_contact_phone,
				'b_contact_email' 		=> $b_contact_email,
				'ain_ss_no' 		=> $ain_ss_no,

				'night_phone' 		    => $night_phone,
				'night_fax' 		=> $night_fax,
				'serving_city' 		=> $serving_city,
				'serving_airport'			        => $serving_airport,
				'serving_zip' 		            => $serving_zip

			);
			$branch->save($data);
			return redirect()->to(base_url('branch'));

	}

	public function edit($id)
	{
		$email = new BranchModel();
		$data['row'] = $email->where('id', $id)->first();
		// echo '<pre>';print_r($data); die;
		return view('branch/edit', $data);

	}

	public function update()
	{   $id 	= 	$this->request->getVar('id');
	    $branch = new BranchModel();
		

		$branch_name 	= 	$this->request->getVar('branch_name');
		$phone1 		    = 	$this->request->getVar('phone1');
		$address1 		= 	$this->request->getVar('address1');
		$fax1 	    = 	$this->request->getVar('fax1');
		$address2         = 	$this->request->getVar('address2');
		$email         = 	$this->request->getVar('email');
		$city           = 	$this->request->getVar('city');
		$phone2  = 	$this->request->getVar('phone2');
		$state            = 	$this->request->getVar('state');
		$zip         = 	$this->request->getVar('zip');
		$fax2      = 	$this->request->getVar('fax2');
		$b_contact_name           = 	$this->request->getVar('b_contact_name');
		$b_contact_phone     = 	$this->request->getVar('b_contact_phone');
		$b_contact_email            = 	$this->request->getVar('b_contact_email');
		$ain_ss_no         = 	$this->request->getVar('ain_ss_no');
		$night_phone        = 	$this->request->getVar('night_phone');
		$night_fax  = 	$this->request->getVar('night_fax');
		$serving_city  = 	$this->request->getVar('serving_city');
		$serving_airport  = 	$this->request->getVar('serving_airport');
		$serving_zip  = 	$this->request->getVar('serving_zip');
		
			$data = array
			(   
				'branch_name'                   => $branch_name,
				'phone1' 		        => $phone1,
				'address1' 				    => $address1,
				'fax1' 		=> $fax1,
				'address2'			        => $address2,
				'email' 		        => $email,
				'city' 		            => $city,
				'phone2' 		            => $phone2,
				'state' 		=> $state,
				'zip'                 => $zip,
				'fax2' 		        => $fax2,
				
				'b_contact_name' 		=> $b_contact_name,
				'b_contact_phone' 		=> $b_contact_phone,
				'b_contact_email' 		=> $b_contact_email,
				'ain_ss_no' 		=> $ain_ss_no,

				'night_phone' 		    => $night_phone,
				'night_fax' 		=> $night_fax,
				'serving_city' 		=> $serving_city,
				'serving_airport'			        => $serving_airport,
				'serving_zip' 		            => $serving_zip

			);
			$branch->update($id, $data);
			return redirect()->to(base_url('branch'));

	}


}
