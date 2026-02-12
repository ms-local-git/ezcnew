<?php

namespace App\Controllers;

class Dispatch_reports extends BaseController
{
    public function weekly_charges()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $date=$request->getPost('date');
            $dr1=$request->getPost("dr1");
            $dr2=$request->getPost("dr2");
            $dr3=$request->getPost("dr3");
            $dr4=$request->getPost("dr4");				
            $dr5=$request->getPost("dr5");
            $dr6=$request->getPost("dr6");
            
            $temp="group_name=9999";
            if($dr1=="A") $temp.=" or group_name='".$dr1."'";
            if($dr2=="B") $temp.=" or group_name='".$dr2."'";
            if($dr3=="C") $temp.=" or  group_name='".$dr3."'";
            if($dr4=="D") $temp.=" or  group_name='".$dr4."'";				
            if($dr5=="E") $temp.=" or  group_name='".$dr5."'";
            if($dr6=="F") $temp.=" or  group_name='".$dr6."'";				
            
            $sql="select distinct group_name,drivers.id,code,last_name,gurantee,from_time,to_time,days from group_time, drivers,jobs_drivers where drivers.d_group= group_time.id and jobs_drivers.driver_id=drivers.id  and status =1 and (".$temp.") order by group_name,code limit 200";	
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/reports/weekly_charges',$data);
    }

    public function missing_dr_charges()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $date=$request->getPost('date');			
            
            $sql="select date_format(jobs_drivers.dr_datetime,'%Y/%m/%d'),count(*) as cnt,jobs.id,
            job_no,first_name,dr_datetime,last_name,reference_no,c_date,c_time,from_name,
            from_address1,from_city,to_name,to_address1,to_city,code from jobs,jobs_drivers,drivers 
            where jobs.id =jobs_drivers.job_id and drivers.id = jobs_drivers.driver_id 
            and dr_total=0  and c_date <= '".$date."'and phase3 >=10 group by date_format(jobs_drivers.dr_datetime,'%Y/%m/%d'),code";	
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/reports/missing_dr_charges',$data);
    }

    public function weekly_charges_night()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $date=$request->getPost('date');			
            
            $sql="select distinct group_name,drivers.id,code,last_name,gurantee,from_time,to_time,days 
            from group_time, drivers,jobs_drivers where drivers.d_group= group_time.id 
            and jobs_drivers.driver_id=drivers.id and gurantee>0 
            and (group_name='d' or group_name='e') order by group_name,code";	
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/reports/weekly_charges_night',$data);
    }

    public function weekly_charges_day()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $date=$request->getPost('date');			
            
            $sql="select distinct group_name,drivers.id,code,last_name,gurantee,from_time,to_time,days from group_time, drivers,jobs_drivers 
            where drivers.d_group= group_time.id and jobs_drivers.driver_id=drivers.id and gurantee>0 
            and (group_name='a' or group_name='b' or group_name='c') order by group_name,code";	
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/reports/weekly_charges_day',$data);
    }
    
    public function job_charges()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $from_date=h_sdate($request->getPost('from_date'));
            $to_date=h_sdate($request->getPost('to_date'));
            $opt_date=$request->getPost('opt_date');
            $time=$request->getPost('time');
            $from_client=$request->getPost('from_client');
            $to_client=$request->getPost('to_client');
            
            $filter="";
            if($opt_date=="create") $filter.="and c_date>='".$from_date."' and c_date <= '".$to_date."'"; 
            else $filter.="and date_format(pod_date,'%Y/%m/%d')  >='".$from_date."' and date_format(pod_date,'%Y/%m/%d') <= '".$to_date."'";
            
            if($time=="d") $filter.=" and date_format(pod_date,'%Y/%m/%d %H:%i')>='".$from_date." 06:30' and date_format(pod_date,'%Y/%m/%d %H:%i') <= '".$to_date." 19:00' ";
            
            if($time=="n") {
				$endate=date('Y-m-d', strtotime($to_date.'+1 days'));
				$filter.=" and date_format(pod_date,'%Y/%m/%d %H:%i')>='".$from_date." 19:01' and date_format(pod_date,'%Y/%m/%d %h:%i') <= '".$endate." 06:29' ";
			}

            if($from_client!="") $filter.="and clients.account_no>='".$from_client."'"; 
            if($to_client!="") $filter.="and clients.account_no<='".$to_client."'";   

            $sql="select jobs.id,job_no,account_no,reference_no,c_date,c_time,from_name,from_zip,from_state,to_name,to_zip,
			to_state,client_price,driver_price,agent_price,pod,driver_id1,driver_id2,driver_id3,driver_id4,driver_id5,driver_id6,invoice_id 
            from jobs,clients where jobs.client_id=clients.id ".$filter." limit 200";
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/reports/job_charges',$data);
    }
}