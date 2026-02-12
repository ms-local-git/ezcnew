<?php

namespace App\Controllers;

class Logout extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();

        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        
		return redirect()->to(base_url().'/');
		
	}
}