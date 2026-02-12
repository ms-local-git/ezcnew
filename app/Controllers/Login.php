<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		if(isset($_SESSION['user_id'])) {
			return redirect()->to(base_url().'/clients');
		} else {
			return view('login/index');
		}
	}

	public function check()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data = $request->getPost();

		$sql="select * from users where user_id ='".$sql_data["user"]."' and user_password='".md5($sql_data["password"])."';";
		$result = $db->query($sql)->getFirstRow(); 

		if(!empty($result)) {
			$sql="select * from bookmark_pages where user_id = '".$sql_data["user"]."'";
			$bookmarks = $db->query($sql)->getResultArray(); 
			$_SESSION['user_id'] = $result->user_id;
			$_SESSION['user_email'] = $result->email;
			$_SESSION['user_name'] = $result->user_name;
		    $_SESSION['role_id'] = $result->role_id;
			$_SESSION['bookmarks'] = $bookmarks;
			return redirect()->to(base_url().'/home');
		} else {
			$session->setFlashdata('error','Invalid UserId or Password');
			return redirect()->to(base_url().'/login');
		}
	
	}
}
