<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		
		if(isset($_SESSION['user_id'])) {
			return redirect()->to(base_url().'/clients');
		} else {
			return redirect()->to(base_url().'/login');
		}
	}


		public function toggle_sidebar()
{
	
	 $hide = $this->request->getPost('hide_sidebar') ? 1 : 0;
	 $url = $this->request->getPost('current_url') ;

	$_SESSION['hide_sidebar'] = $hide;
	$_SESSION['current_url']=$url;
	// var_dump($_SESSION['hide_sidebar']);
	// die();
    
    return redirect()->back();
}

public function unauthorized()
    {
        return view('errors/unauthorized', [
            'page_title' => 'Unauthorized'
        ]);
    }
}
