<?php

namespace App\Controllers;

class Dr_report extends BaseController
{

	public function inactive_drivers()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql1 ='select * from drivers where code!="" order by code limit 100';
		$clients = $db->query($sql1)->getResultArray(); 

		$data["clients"]=$clients;
		return view('dr_report/inactive_drivers',$data);
	}

    public function advance_bonus_report()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $search = $request->getPost('search');
            $type = $request->getPost('submit_type');

            $filter="";
            if($type=='all') $filter.="";
            if($type=='settled') $filter.="and is_done=1";
            if($type=='pending') $filter.="and is_done=0";

            $sql="select * from drivers where code ='".$search."';";
            $driver = $db->query($sql)->getFirstRow(); 

            $sql="select a.remarks,a.apply_date,a.bon_ded_txt,a.bon_ded,a.user_id,a.date_time,b.*  
            from driver_advance_master a, driver_advance_trans b
            where a.driver_id ='".$driver->id."' and a.id = b.dam_id ".$filter." order by dam_id";
			// die($sql);
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
			$data["driver"]=$driver;
		} else {
			$data=array();
		}

        return view('/dr_report/advance_bonus_report',$data);
    }

	public function advance_bonus_report_delete()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data=$request->getPost('checked');
		if($sql_data!=null) {
			foreach ($sql_data as $data) {
				$db->table('driver_advance_trans')->where('id',$data)->delete();
			}
		}
		$session->setFlashdata('msg','Successfully Deleted');
		return redirect()->to(base_url().'/dr_report/advance_bonus_report');
	}
}
