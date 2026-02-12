<?php

namespace App\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class Shilpa extends BaseController
{
	
	
	public function __construct()
	{
	
	}

	public function index()
	{   
		if(isset($_REQUEST["page"])) $page=$_REQUEST["page"]; else $page='view1';
		
		return view('shilpa/'.$page);
	}
	
}
