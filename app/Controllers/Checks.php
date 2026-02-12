<?php

namespace App\Controllers;

class Checks extends BaseController
{

	public function bank_manage()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $search=$request->getPost('search');
            $search_in=$request->getPost('search_in');

            $sql1="select * from bank where ".$search_in." like '".$search."%';";
        } else {
            $sql1="select * from bank ;";
        }
        
        $banks = $db->query($sql1)->getResultArray(); 
            
        $data["banks"]=$banks;
            
		return view('checks/bank_manage',$data);
	}

    public function add_bank()
    {
        return view('checks/add_bank');
    }

    public function bank_save()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();

        $sql_data['current_bal'] = $request->getPost('opening_bal');
        
        $db->table('bank')->insert($sql_data);
        $session->setFlashdata('msg','Added New Bank');
        return redirect()->to(base_url().'/checks/bank_manage');

	}
    
}
