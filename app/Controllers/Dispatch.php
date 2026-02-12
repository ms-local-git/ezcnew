<?php

namespace App\Controllers;

class Dispatch extends BaseController
{

    public function order_search()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

		if($request->getPost()!=null) {
            $from_date=h_sdate($request->getPost('from_date'));
            $to_date=h_sdate($request->getPost('to_date'));
            $job=$request->getPost('job');
            $ref=$request->getPost('ref');
            $code=$request->getPost('code');
            $code_check=$request->getPost('code_check');
            $client=$request->getPost('client');
            $client_check=$request->getPost('client_check');
            $pickup=$request->getPost('pickup');
            $p_name=$request->getPost('p_name');
            $p_address=$request->getPost('p_address');
            $p_city=$request->getPost('p_city');
            $p_state=$request->getPost('p_state');
            $p_zip=$request->getPost('p_zip');
            $delivery=$request->getPost('delivery');
            $d_name=$request->getPost('d_name');
            $d_address=$request->getPost('d_address');
            $d_city=$request->getPost('d_city');
            $d_state=$request->getPost('d_state');
            $d_zip=$request->getPost('d_zip');
            $date=$request->getPost('date');
            $date_sel=$request->getPost('date_sel');

			$filter="";
            $ag_sel="";
            if($job!='') $filter.="and job_no like'".$job."%'";
            if($ref!="") $filter.=" and reference_no like'".$ref."%'";
            if($code!="") {
                if($code_check=='driver') {
                    $filter.=" and (driver_id1 ='".$code."' or driver_id2 ='".$code."' or driver_id3 ='".$code."' or driver_id4 ='".$code."' or driver_id5 ='".$code."' or driver_id6 ='".$code."') ";
                } else if($code_check=='agent') {
                    $ag_sel=',jobs_agents ';
                    $filter.=" and (jobs_agents.job_id=jobs.id) and jobs_agents.agent_id='".$code."'";
                }
            }
            if($client!="") {
				if($client_check=='code') $filter.=" and account_no like '".$client."%'";
				else $filter.=" and name like '".$client."%'";
			}
            if($pickup!="") { 
				$t1= "and (job_no like '".$pickup."%'";
                if($p_name=='1') $t1.= "or from_name like '".$pickup."%'";
                if($p_address=='1') $t1.= " or from_address1 like '".$pickup."%'";
                if($p_city=='1') $t1.= " or from_city like '".$pickup."%'";										
                if($p_state=='1') $t1.= " or from_state like '".$pickup."%'";
                if($p_zip=='1') $t1.= " or from_zip like '".$pickup."%'";									
                $t1.=")";
                $filter.=$t1;
			}
            if($delivery!="") { 
				$t1= "and (job_no like '".$delivery."%'";
                if($d_name=='1') $t1.= "or to_name like '".$delivery."%'";
                if($d_address=='1') $t1.= " or to_address1 like '".$delivery."%'";
                if($d_city=='1') $t1.= " or to_city like '".$delivery."%'";										
                if($d_state=='1') $t1.= " or to_state like '".$delivery."%'";
                if($d_zip=='1') $t1.= " or to_zip like '".$delivery."%'";									
                $t1.=")";
                $filter.=$t1;
			}
            if($date=='1' ) {
				if($date_sel=='today') $filter.=" and from_date ='".date("Y/m/d",time())."'";
                if($date_sel=='yesterday') $filter.=" and from_date ='".date("Y/m/d",(time()-86400))."'";
                if($date_sel=='last7') $filter.=" and from_date  >='".date("Y/m/d",(time()-(86400*7)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='last30') $filter.=" and from_date  >='".date("Y/m/d",(time()-(86400*30)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='last30') $filter.=" and from_date  >='".date("Y/m/d",(time()-(86400*30)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='last90') $filter.=" and from_date  >='".date("Y/m/d",(time()-(86400*90)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='next7') $filter.=" and from_date  >='".date("Y/m/d",(time()+(86400*7)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='next30') $filter.=" and from_date  >='".date("Y/m/d",(time()+(86400*30)))."'  and  from_date  <='".date("Y/m/d",(time()))."' ";
                if($date_sel=='open') $filter.=" and jobs.phase3 <10 ";
			}
            if($date=='2' ) {
				$filter.=" and from_date >='".$from_date."' and from_date <='".$to_date."'";
		    }

            $sql ='select jobs.id,name,disp_time,from_name,job_type_2,to_name,
            jobs.service_type,phase,from_address1,to_address1,from_city,to_city,job_no,
            phase3,from_state,to_state,reference_no,driver_id1,driver_id2,driver_id3,
            driver_id4,driver_id5,driver_id6,from_date,from_time,from_date,from_zone,
            from_zip,to_zone,to_zip,to_date,to_time,to_date,driver_miles,dispatcher_id,
            jobs.remarks,client_price_table ,clients.name,clients.account_no,pickup_miles,
            delivery_miles,account_no,int_job_no from jobs,clients'.$ag_sel.'
            where jobs.client_id=clients.id '.$filter;
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('dispatch/order_search',$data);
    }

    public function order_quality()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $bfilter=""; $sfilter="";
        if($request->getPost()!=null) {
            $status=$request->getPost('status');
            $branch=$request->getPost('branch');

            if($status=='pu_time') $sfilter.='and (jobs.oq_phase="pu_time" or jobs.oq_phase="pu_arr")'; 
            else $sfilter.='and jobs.oq_phase="'.$status.'"'; 
            if($status=='' || $status=='all') $sfilter='';

            if($branch!='' && $branch!='all') $bfilter="and jobs.branch='".$branch."'";
        }

        $sql="select oq_phase,jobs.branch from jobs,clients where clients.quality_window=1 
            and jobs.client_id =clients.id and show_time < '".date("Y/m/d H:i:s")."' and jobs.pod is NULL order by show_time ";
            $branches = $db->query($sql)->getResultArray();
            $ny=0; $nj=0; $mny=0; $out=0; $all=0;
			foreach($branches as $b) {
				$all++;
				if($b["branch"]=='ny' || $b["branch"]=='NY') $ny++;
				if($b["branch"]=='nj' || $b["branch"]=='NJ') $nj++;
				if($b["branch"]=='messny') $mny++;
				if($b["branch"]=='outside') $out++;
			}
            $data['all_count']=$all;
            $data['ny_count']=$ny;
            $data['nj_count']=$nj;
            $data['mny_count']=$mny;
            $data['out_count']=$out;
            
        $sql="select oq_phase,jobs.branch from jobs,clients 
            where clients.quality_window=1 and jobs.client_id =clients.id 
            and show_time < '".date("Y/m/d H:i:s")."' and jobs.pod is NULL ".$bfilter." order by show_time ";
            $statuses = $db->query($sql)->getResultArray();
            $al=0; $pu=0; $ob=0; $del=0; $pod=0;
            foreach($statuses as $s) {
                $al++;
                if($s["oq_phase"]=='pu_alert') $pu++;
                if($s["oq_phase"]=='pu_time' || $s["oq_phase"]=='pu_arr' ) $ob++;
                if($s["oq_phase"]=='pu_dep') $del++;
                if($s["oq_phase"]=='de_time') $pod++;
            }
            $data['al_count']=$al;
            $data['pu_count']=$pu;
            $data['ob_count']=$ob;
            $data['del_count']=$del;
            $data['pod_count']=$pod;
            
            $sql1="select jobs.id,name,oq_phase,disp_time,from_name,job_type_2,show_time,to_name,jobs.service_type,phase,
            from_address1,to_address1,from_city,to_city,job_no,phase3,from_state,to_state,reference_no,driver_id1,driver_id2,
            driver_id3,driver_id4,driver_id5,driver_id6,from_date,from_time,from_date,from_zone,from_zip,to_zone,to_zip,to_date,
            to_time,to_date,driver_miles,dispatcher_id,jobs.remarks,client_price_table ,clients.name,clients.account_no,
            pickup_miles,delivery_miles,account_no,int_job_no from jobs,clients where clients.quality_window=1 
            and jobs.client_id =clients.id and show_time < '".date("Y/m/d H:i:s")."' and jobs.pod is NULL 
            and holding!='internal' ".$sfilter." ".$bfilter." order by show_time ";
            // die($sql1);
            $reports = $db->query($sql1)->getResultArray(); 
            $data['reports']=$reports;

        return view('dispatch/order_quality',$data);
    }

    public function acknowledgement()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

            $filter=' and jobs.from_date <="'.date("Y-m-d",time()+10800).'" and jobs.pod is NULL and  jobs.ag_ack=0  ';
			$sql='select jobs.total_pcs as pcs,jobs.total_weight as wt,jobs.id,jobs.branch,
            name,disp_time,job_type_2,from_name,to_name,jobs.service_type,phase,from_address1,
            to_address1,from_city,to_city,from_state,to_state,job_no,phase3,reference_no,
            driver_id1,driver_id2,driver_id3,driver_id4,driver_id5,driver_id6,from_date,
            from_time,from_date,from_zone,from_zip,to_zone,to_zip,to_date,to_time,to_date,
            driver_miles,dispatcher_id,jobs.remarks,client_price_table ,clients.name,
            clients.account_no,pickup_miles,delivery_miles,account_no,int_job_no from jobs,
            clients where jobs.client_id=clients.id '.$filter;

            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;

        return view('dispatch/acknowledgement',$data);
    }

    public function dispatched_jobs()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $sql='(select jobs_drivers.dr_datetime,jobs_drivers.driver_id,jobs.id,phase,phase3,from_city,to_city,job_no,reference_no,jobs.branch,from_date,from_time, to_date,to_time,clients.name,clients.account_no,int_job_no    
        from jobs,clients,jobs_drivers where jobs_drivers.job_id = jobs.id and 
        jobs.client_id = clients.id  and phase3>=2 and pod is null )
        union (select  jobs_agents.a_datetime,CONCAT("A",jobs_agents.agent_id),jobs.id,phase,phase3,from_city,to_city,job_no,reference_no,jobs.branch,from_date,from_time, to_date,to_time,clients.name,clients.account_no,int_job_no    
        from jobs,clients,jobs_agents where jobs_agents.job_id = jobs.id and 
        jobs.client_id = clients.id  and phase3>=2 and pod is null )';

        $reports = $db->query($sql)->getResultArray(); 
        $data['reports']=$reports;

        return view('dispatch/dispatched_jobs',$data);
    }

    public function dispatching()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        
        $disp_time=""; 
        $j_branch="all";
        $branchSel="";
        $zone="";
        $zone_sel="";
        $timing="";
        $status="";

        if($request->getPost()!=null) {
            $j_branch=$request->getPost('job_branch');
            $branchSel=$request->getPost('branch');
            $timing=$request->getPost('timing');
            $zone=$request->getPost('zone');
            $status=$request->getPost('status');
            $zone_sel=$request->getPost('zone_sel');
            if($timing=="") $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+21600))."' ";
			if($timing=='hour') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+3600))."' ";
		    if($timing=='today') $disp_time=" date_format(jobs.disp_time,'%Y/%m/%d') =".date("Y/m/d",time())."";
		    if($timing=='3') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+10800))."' ";
            if($timing=='6') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+21600))."' ";
            if($timing=='12') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+43200))."' ";
		    if($timing=='24') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+86400))."' ";
		    if($timing=='48') $disp_time=" and disp_time <='".date("Y/m/d H:i",(time()+176800))."' ";
			if($timing=='this_week') { $h_w=(date("W",time())-1);  $disp_time="and week(disp_time) ='".$h_w."' "; }
            if($timing=='this_month') { $h_w=(date("m",time()));  $disp_time="and month(disp_time) ='".$h_w."' "; }
            if($timing=='all') $disp_time='';
        }

        $dis=0; $dis_hold_int=0; $dis_hold_driver=0; $dis_hold_att=0; $dis_hold_ware=0;
		if($j_branch=='ny') $branch="and (branch='ny' or branch='NY')";
		if($j_branch=='nj') $branch="and (branch='nj' or branch='NJ')";
		if($j_branch=='' ||  $j_branch=='messny') $branch="and branch='messny' ";
		if($j_branch=='outside') $branch="and branch='outside' ";
		if($j_branch=='heavy') $branch="and branch='heavy_job' ";
		if($j_branch=='all') $branch=''; 
			
		$sql="select * from jobs where jobs.pod is NULL ".$disp_time." and jobs.phase3=1 
        and is_hold=0 and ag_ack=1  ".$branch." ";
		$statuses = $db->query($sql)->getResultArray();
		$dis=count($statuses);
							
		$sql="select * from jobs where jobs.from_date <='".date("Y-m-d",time()+10800)."' 
        and jobs.pod is NULL and  is_hold=1  and ag_ack=1 ".$branch."";
		$statuses = $db->query($sql)->getResultArray();
		$dis_hold_int=count($statuses);
							
		$sql="select * from jobs where jobs.from_date <='".date("Y-m-d",time()+10800)."' 
        and jobs.pod is NULL and jobs.phase3=5 and ag_ack=1 and is_hold=0 ".$branch."";
		$statuses = $db->query($sql)->getResultArray();
		$dis_hold_driver=count($statuses);
							
		$sql="select * from jobs where jobs.from_date <='".date("Y-m-d",time()+10800)."' 
        and jobs.pod is NULL and jobs.phase3=6 and ag_ack=1 and is_hold=0 ".$branch."";
		$statuses = $db->query($sql)->getResultArray();
		$dis_hold_ware=count($statuses);
							
		$sql="select * from jobs where jobs.from_date <='".date("Y-m-d",time()+10800)."' 
        and jobs.pod is NULL and (jobs.phase3=4.5 or jobs.phase3=8.5 ) and ag_ack=1 and is_hold=0 ".$branch."";
		$statuses = $db->query($sql)->getResultArray();
		$dis_hold_att=count($statuses);


        $data['dis']=$dis; 
        $data['dis_hold_int']=$dis_hold_int; 
        $data['dis_hold_driver']=$dis_hold_driver; 
        $data['dis_hold_att']=$dis_hold_att; 
        $data['dis_hold_ware']=$dis_hold_ware;

        $filter=' and jobs.pod is NULL and (jobs.phase3=1)';
        if($status=='hold_int') $filter=' and jobs.from_date <="'.date("Y-m-d",time()+10800).'" and jobs.pod is NULL and  is_hold=1  and ag_ack=1';
		if($status=='hold_drv') $filter=' and jobs.from_date <="'.date("Y-m-d",time()+10800).'" and jobs.pod is NULL and jobs.phase3=5 and ag_ack=1 and is_hold=0';
        if($status=='hold_ware') $filter=' and jobs.from_date <="'.date("Y-m-d",time()+10800).'" and jobs.pod is NULL and jobs.phase3=6 and ag_ack=1 and is_hold=0';
        if($status=='hold_att') $filter=' and jobs.from_date <="'.date("Y-m-d",time()+10800).'" and jobs.pod is NULL and (jobs.phase3="4.5" or jobs.phase3="8.5" ) and ag_ack=1 and is_hold=0';
        if($timing=="") $filter.=" and disp_time <= '".date("Y/m/d H:i",(time()+21600))."'";
        if($branchSel=='') {
            if($j_branch=='') $filter.= " and jobs.branch='messny' ";
            else if($j_branch=='all') $filter=$filter;
            else $filter.= " and jobs.branch='".$j_branch."' ";
        }
        if($branchSel!="") $filter.= " and jobs.branch='".$branchSel."' ";
		if($zone_sel=='pu') $filter.= " and from_zone ='".$zone."' ";
		if($zone_sel=='del') $filter.= " and to_zone ='".$zone."' ";
		if($zone_sel=='both' || $zone!="") $filter.=" and (from_zone ='".$zone."'  or to_zone ='".$zone."'  ) ";

        $sql ='select jobs.total_pcs as pcs,jobs.total_weight as wt,jobs.id,name,jobs.branch,
        disp_time,job_type_2,from_name,to_name,jobs.service_type,phase,from_address1,to_address1,
        from_city,to_city,job_no,phase3,from_state,to_state,reference_no,driver_id1,driver_id2,
        driver_id3,driver_id4,driver_id5,driver_id6,from_date,from_time,from_date,from_zone,
        from_zip,to_zone,to_zip,to_date,to_time,to_date,driver_miles,dispatcher_id,jobs.remarks,
        client_price_table ,clients.name,clients.account_no,pickup_miles,delivery_miles,
        account_no,int_job_no from jobs,clients where jobs.client_id =clients.id and is_hold=0 
        and ag_ack=1 '.$filter.''.$disp_time .' limit 200';
        $reports = $db->query($sql)->getResultArray(); 
        $data['reports']=$reports;

        $sql="select distinct county from disp_temp1 order by 1;";
        $countries = $db->query($sql)->getResultArray(); 
        $data['countries']=$countries;

        return view('dispatch/dispatching',$data);
    }

    public function driver_zone()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $sql="select * from driver_zone_name;";

        $reports = $db->query($sql)->getResultArray(); 
        $data['reports']=$reports;

        return view('dispatch/driver_zone',$data);
    }

    public function driver_zone_info()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $id=$request->getPost('id');

        $sql="select * from driver_zone_name where id=$id";
        $info = $db->query($sql)->getFirstRow();

        echo json_encode($info);
    }
    
    public function driver_zone_update()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $sql_data=$request->getPost();
        $id=$sql_data['id'];
        unset($sql_data['id']);
        
        $db->table('driver_zone_name')->where('id',$id)->update($sql_data);
        $session->setFlashdata('msg','Successfully Updated Driver Zone');

        return redirect()->to(base_url().'/dispatch/driver_zone');
    }

}
