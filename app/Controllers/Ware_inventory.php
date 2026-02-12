<?php

namespace App\Controllers;

class Ware_inventory extends BaseController
{

	public function location_report()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $serial_no=$request->getPost('serial_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
        
            $sql1 ='select * from inventory where 1 '.$filter.' 
            order by serial_loc2 limit 200;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_inventory/location_report',$data);
	}

}
