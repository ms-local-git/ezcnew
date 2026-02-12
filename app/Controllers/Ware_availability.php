<?php

namespace App\Controllers;

class Ware_availability extends BaseController
{

	public function summary()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
        
            $sql1 ='select  account_no,part_no,weight,part_loc,serial_loc,count(*) as qty 
            from inventory where 1 '.$filter.' 
            group by account_no,part_no,weight,part_loc limit 200;';
            $reports = $db->query($sql1)->getResultArray(); 

            // print_r($reports);die;
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_availability/summary',$data);
	}

    public function detailed_info()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
        
            $sql1 ='select id,account_no,part_no,weight,part_loc,serial_no,serial_loc,tracking_no  
            from inventory where 1 '.$filter.' limit 200;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_availability/detailed_info',$data);
	}

    public function info_modify()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPostGet('id');
        $sql="select * from inventory where id='".$id."'";
        $inventory=$db->query($sql)->getFirstRow();
        $data['inventory']=$inventory;

		return view('ware_availability/info_modify',$data);
    }

    public function info_update()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPost('id');
        $sql_data=$request->getPost();
        unset($sql_data['id']);
        // print_r($sql_data);die($id);
        $db->table('inventory')->where('id',$id)->update($sql_data);
        $session->setFlashdata('msg','Successfully Updated Info');

        return redirect()->to(base_url().'/ware_availability/detailed_info');
    }
    
    public function serial_no()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $serial_no=$request->getPost('serial_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
            if ($serial_no!="")  $filter .='and serial_no like "'.$serial_no.'%"';
        
            $sql1 ='select account_no,serial_no,serial_loc,tracking_no,part_no,part_loc 
            from inventory where 1 '.$filter.' limit 200;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_availability/serial_no',$data);
	}

    public function part_no()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $part_no=$request->getPost('part_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
            if ($part_no!="")  $filter .='and part_no like "'.$part_no.'%"';
        
            $sql1 ='select  account_no,part_no,part_loc,serial_loc,weight,count(*) as qty 
            from inventory where 1 '.$filter.' limit 200;';
            $reports = $db->query($sql1)->getResultArray(); 
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_availability/part_no',$data);
	}

    public function availability_search()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no LIKE "%'.$account_no.'%" 
            OR part_no LIKE "%'.$account_no.'%" OR part_loc LIKE "%'.$account_no.'%" 
            OR serial_no LIKE "%'.$account_no.'%" OR serial_loc LIKE "%'.$account_no.'%" 
            OR tracking_no LIKE "%'.$account_no.'%" OR weight LIKE "%'.$account_no.'%" 
            OR temp LIKE "%'.$account_no.'%" OR serial_loc2 LIKE "%'.$account_no.'%" 
            OR inventory_id LIKE "%'.$account_no.'%" OR last_update_date LIKE "%'.$account_no.'%" 
            OR comments LIKE "%'.$account_no.'%" OR is_found LIKE "%'.$account_no.'%" 
            OR entered_by LIKE "%'.$account_no.'%" OR entered_date LIKE "%'.$account_no.'%" 
            OR last_updated_by LIKE "%'.$account_no.'%"';
            
			$sql1='select * from inventory where 1 '.$filter.' limit 200';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_availability/availability_search',$data);
	}
    
    public function availability_modify()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPostGet('id');
        $sql="select * from inventory where id='".$id."'";
        $inventory=$db->query($sql)->getFirstRow();
        $data['inventory']=$inventory;

		return view('ware_availability/availability_modify',$data);
    }

    public function availability_update()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPost('id');
        $sql_data=$request->getPost();
        unset($sql_data['id']);
        // print_r($sql_data);die($id);
        $db->table('inventory')->where('id',$id)->update($sql_data);
        $session->setFlashdata('msg','Successfully Updated Info');

        return redirect()->to(base_url().'/ware_availability/availability_search');
    }

}
