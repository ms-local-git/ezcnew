<?php

namespace App\Controllers;

class Dr_new_stuff extends BaseController
{

	public function missing_settlement()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
			$from_driver=$request->getPost('from_driver');
			$to_driver=$request->getPost('to_driver');

            $filter='';
            if($from_driver!='0') $filter.="and (code >='".$from_driver."' and code <='".$to_driver."')";

            $sql="SELECT driver_id1,driver1_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id1=drivers.id ".$filter."
			and (driver_id1 is not null and settlement_id1=0) union
			SELECT driver_id2,driver2_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id2=drivers.id ".$filter." 
			and (driver_id2 is not null and settlement_id2=0) union
			SELECT driver_id3,driver3_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id3=drivers.id ".$filter." 
			and (driver_id3 is not null and settlement_id3=0) union
			SELECT driver_id4,driver4_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id4=drivers.id ".$filter." 
			and (driver_id4 is not null and settlement_id4=0) union
			SELECT driver_id5,driver5_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id5=drivers.id ".$filter." 
			and (driver_id5 is not null and settlement_id5=0) union
			SELECT driver_id6,driver6_date,job_no,jobs.id,from_name,from_address1,from_zip,to_name,to_address1,to_zip,code,first_name,last_name 
			FROM jobs,drivers where driver_id6=drivers.id ".$filter." 
			and (driver_id6 is not null and settlement_id6=0) order by code,job_no;";
			// die($sql);
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
		} else {
			$data=array();
		}

		// print_r($data);die;

        return view('/dr_new_stuff/missing_settlement',$data);
	}
}
