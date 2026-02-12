<?php

namespace App\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class User extends BaseController
{
	public function __construct()
	{
	
	}

	public function index()
	{   $db = \Config\Database::connect();
		$sql1 ='select * from users';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('user/listing', $data);
	}
	public function add()
	{   
		$db = \Config\Database::connect();
		return view('user/user');
	}


    public function create()
	{   $user = new UserModel();

		$userid 	= 	$this->request->getVar('user_id');
		$user_password 		    = 	$this->request->getVar('user_password');
		$master_password 		= 	$this->request->getVar('master_password');
		$user_type 	    = 	$this->request->getVar('user_type');
		$user_name         = 	$this->request->getVar('user_name');
		$email         = 	$this->request->getVar('email');
		$department           = 	$this->request->getVar('department');
		$designation  = 	$this->request->getVar('designation');
		$remarks            = 	$this->request->getVar('remarks');
		$driver_id         = 	$this->request->getVar('driver_id');
		$two_hour_popup      = 	$this->request->getVar('two_hour_popup');
		$sms_email           = 	$this->request->getVar('sms_email');
		
		
			$data = array
			(   
				'user_id'                   => $userid,
				'user_password' 		        => $user_password,
				'master_password' 				    => $master_password,
				'user_type' 		=> $user_type,
				'user_name'			        => $user_name,
				'email' 		        => $email,
				'department' 		            => $department,
				'designation' 		            => $designation,
				'remarks' 		=> $remarks,
				'driver_id'                 => $driver_id,
				'two_hour_popup' 		        => $two_hour_popup,
				
				'sms_email' 		=> $sms_email
			);
			$user->save($data);
			return redirect()->to(base_url('user'));

	}

	public function edit($id)
	{
		$email = new UserModel();
		$data['row'] = $email->where('user_id', $id)->first();
		// print_r($data); die;
		return view('user/edit', $data);

	}

	public function update()
	{   $userid 	= 	$this->request->getVar('user_id');
		$user_password 		    = 	$this->request->getVar('user_password');
		$master_password 		= 	$this->request->getVar('master_password');
		$user_type 	    = 	$this->request->getVar('user_type');
		$user_name         = 	$this->request->getVar('user_name');
		$email         = 	$this->request->getVar('email');
		$department           = 	$this->request->getVar('department');
		$designation  = 	$this->request->getVar('designation');
		$remarks            = 	$this->request->getVar('remarks');
		$driver_id         = 	$this->request->getVar('driver_id');
		$two_hour_popup      = 	$this->request->getVar('two_hour_popup');
		$sms_email           = 	$this->request->getVar('sms_email');
		
		
			$data = array
			(   
				
				'user_password' 		        => $user_password,
				'master_password' 				    => $master_password,
				'user_type' 		=> $user_type,
				'user_name'			        => $user_name,
				'email' 		        => $email,
				'department' 		            => $department,
				'designation' 		            => $designation,
				'remarks' 		=> $remarks,
				'driver_id'                 => $driver_id,
				'two_hour_popup' 		        => $two_hour_popup,
				
				'sms_email' 		=> $sms_email
			);
			$user = new UserModel();
			$user->update($userid, $data);

			return redirect()->to(base_url('user'));

	}
    
    public function profile($id)
	{  $user = new UserModel();
		$data['row'] = $user->where('user_id', $id)->first();
		// print_r($data); die;
		return view('user/change', $data);
	}
	public function Changep($user_id = null)
	{  
	 $user = new UserModel();
        
		$this->session = \Config\Services::session();
			$id = $this->request->getVar('user_id');

		


	    $old_pass=md5( $this->request->getVar('cpassword'));
	    $new_pass=md5($this->request->getVar('npassword'));
	    $confirm_pass=md5($this->request->getVar('nmpassword'));
            
		$file   = $this->request->getFile('profile');
		if($file->isValid() && ! $file->hasMoved())
		{
			$prof_img = $file->getRandomName();
			echo $file->move('./assets/uploads/', $prof_img);
		}
		 
	    

			$id=$this->request->getVar('user_id');
				$data = array
			(   
				'user_password' 		        => $new_pass,
				'master_password' 				    => $confirm_pass,
				
			);
			echo '<pre>';print_r($data);
			$user->update($id, $data);
			return redirect()->to(base_url('login'));
			}
			   
	


}
