<?php

namespace App\Controllers;

class Ware_activity extends BaseController
{

	public function activity_serial()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $serial_no=$request->getPost('serial_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
            if ($serial_no!="")  $filter .='and serial_no = "'.$serial_no.'"';
        
            $sql1 ='select distinct serial_loc,serial_no from inventory_trans_d,inventory_trans_m 
            where inventory_trans_d.trans_id=inventory_trans_m.trans_id '.$filter.' 
            order by serial_no limit 100;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_activity/activity_serial',$data);
	}

    public function activity_part()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $part_no=$request->getPost('part_no');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
            if ($part_no!="")  $filter .='and inventory_trans_d.part_no = "'.$part_no.'"';
        
            $sql1 ='select  distinct inventory_trans_d.part_no, inventory_trans_d.serial_loc 
            from inventory_trans_d,inventory_trans_m 
            where inventory_trans_d.trans_id=inventory_trans_m.trans_id '.$filter.' limit 100;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_activity/activity_part',$data);
	}
    
    public function activity_date()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');
            $from_date=$request->getPost('from_date');
            $to_date=$request->getPost('to_date');

            $filter="";
            if ($account_no!="")  $filter .='and account_no = "'.$account_no.'"';
            if ($from_date!="")  $filter .='and date1 >= "'.$from_date.'"';
            if ($to_date!="")  $filter .='and date1 <= "'.$to_date.'"';
        
            $sql1 ='select inventory_trans_m.trans_id,account_no,inventory_trans_d.part_no,weight,serial_no,inventory_trans_d.part_loc,trans_type,date1,time1,job_no,trans_no,serial_loc,tracking_no 
            from inventory_trans_d,inventory_trans_m 
            where inventory_trans_d.trans_id =inventory_trans_m.trans_id '.$filter.' limit 100;';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_activity/activity_date',$data);
	}

    public function activity_search()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $account_no=$request->getPost('account_no');

            $filter="";
            if ($account_no!="")  $filter .='and inventory_trans_m.trans_no LIKE "%'.$account_no.'%" 
            OR inventory_trans_m.account_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.trans_type LIKE "%'.$account_no.'%" 
            OR inventory_trans_d.part_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_d.part_loc LIKE "%'.$account_no.'%" 
            OR inventory_trans_m.weight lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.date1 lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.time1 lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.job_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.inventory_notes lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.ref_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.temp lIKE "%'.$account_no.'%" 
            OR inventory_trans_m.user_id lIKE "%'.$account_no.'%" 
            OR inventory_trans_d.serial_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_d.serial_loc lIKE "%'.$account_no.'%" 
            OR inventory_trans_d.tracking_no lIKE "%'.$account_no.'%" 
            OR inventory_trans_d.inventory_id lIKE "%'.$account_no.'%"';
            
			$sql1='select distinct inventory_trans_m.trans_id, inventory_trans_m.trans_no, inventory_trans_m.account_no, inventory_trans_m.trans_type, inventory_trans_d.part_no, inventory_trans_d.part_loc, inventory_trans_m.weight, inventory_trans_m.date1, inventory_trans_m.time1, inventory_trans_m.job_no, inventory_trans_m.inventory_notes, inventory_trans_m.ref_no, inventory_trans_m.temp, inventory_trans_m.user_id, inventory_trans_d.serial_no, inventory_trans_d.serial_loc, inventory_trans_d.tracking_no, inventory_trans_d.inventory_id 
                  from inventory_trans_d join inventory_trans_m on (inventory_trans_d.trans_id =inventory_trans_m.trans_id)
                  where 1 '.$filter.' order by inventory_trans_m.trans_id limit 200';
            $reports = $db->query($sql1)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }
		return view('ware_activity/activity_search',$data);
	}

}
