<?php

namespace App\Controllers;
use App\Models\JobsModel;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class Jobs extends BaseController
{
	public function __construct()
	{
	
	}

	public function index()
	{   $db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 200';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/listing', $data);
	}
	
	public function reffrence()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 1';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/jobs', $data);
	}

    
    public function Search()
    {
        helper(['form', 'url']);

        $data = [];

        $db      = \Config\Database::connect();
        $builder = $db->table('jobs');   

        $query = $builder->like('job_no', $this->request->getVar('q'))
                    ->select('id, job_no as text')
                    ->limit(10)->get();
        $data = $query->getResult();
        
        
		echo json_encode($data);
    }

    public function jobtype()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 100';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/jobtype', $data);
	}
	public function branch()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 100';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/branch', $data);
	}

	public function airport()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 100';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/airport', $data);
	}

	public function pod()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 100';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/pod', $data);
	}

	public function client()
	{   
		$db = \Config\Database::connect();
		$sql1 ='select * from jobs limit 200';
		$user = $db->query($sql1)->getResultArray(); 
		// echo '<pre>'; print_r($user);die;
		$data["user"]=$user;
		return view('jobs/client', $data);
	}

	public function job_search()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
		$keyword = trim((string) $request->getVar('search-keyword'));
		
        if($request->getPost()!=null) {
            $job_no=$request->getPost('job_no');
            $from_job=$request->getPost('from_job');
            $to_job=$request->getPost('to_job');
            $txt=$request->getPost('txt');
            $cust_search=$request->getPost('cust_search');
            $act=$request->getPost('act');
            
			if($act=="job_no")						
				$sql ='select jobs.id,from_name,to_name,phase,phase3,from_city,job_no,reference_no,from_date,from_time,
				to_zone,to_zip,to_date,to_time,miles,dispatcher_id,driver_id1,driver_id2,driver_id3,driver_id4,
				driver_id5,driver_id6,jobs.remarks,clients.name,clients.account_no,int_job_no from jobs,clients where 
				jobs.client_id = clients.id and (job_no like "'.trim($job_no).'%" or int_job_no like "'.trim($job_no).'%" ) limit 200';
						
			if($act=="range")						
				$sql ='select jobs.id,from_name,to_name,phase,phase3,from_city,job_no,reference_no,from_date,from_time,
				to_zone,to_zip,to_date,to_time,miles,dispatcher_id,driver_id1,driver_id2,driver_id3,driver_id4,
				driver_id5,driver_id6,jobs.remarks,clients.name,clients.account_no,int_job_no from jobs,clients where 
				jobs.client_id = clients.id and job_no >= "'.trim($from_job).'" and job_no <= "'.trim($to_job).'" limit 200';

			if($act=="custom")						
				$sql ='select jobs.id,from_name,to_name,phase,phase3,from_city,job_no,reference_no,from_date,from_time,
				to_zone,to_zip,to_date,to_time,miles,dispatcher_id,driver_id1,driver_id2,driver_id3,driver_id4,
				driver_id5,driver_id6,jobs.remarks,clients.name,clients.account_no,int_job_no from jobs,clients where 
				jobs.client_id = clients.id and '.trim($cust_search).' like "'.trim($txt).'%" limit 200';

            $jobs = $db->query($sql)->getResultArray(); 
            $data['jobs']=$jobs;
        } else if ($keyword !== '') {
			$kw = $db->escapeLikeString($keyword);
			$sql = 'select jobs.id,from_name,to_name,phase,phase3,from_city,job_no,reference_no,from_date,from_time,
				to_zone,to_zip,to_date,to_time,miles,dispatcher_id,driver_id1,driver_id2,driver_id3,driver_id4,
				driver_id5,driver_id6,jobs.remarks,clients.name,clients.account_no,int_job_no from jobs,clients where
				jobs.client_id = clients.id and (job_no like "'.$kw.'%" or int_job_no like "'.$kw.'%" or reference_no like "'.$kw.'%") limit 200';
			$jobs = $db->query($sql)->getResultArray();
			$data['jobs'] = $jobs;
        } else {
            $data=array();
        }

		// print_r($jobs);die;

        return view('jobs/search',$data);
	}

	public function new_job()
	{
		$db = \Config\Database::connect();
		$request = \Config\Services::request();
		$sql1="SELECT * FROM branch_master ORDER BY branch_name";
		$branches = $db->query($sql1)->getResultArray(); 
		
		$data["branches"]=$branches;
		return view('jobs/new_job',$data);
	}
	

	public function edit_job()
	{
		$db = \Config\Database::connect();
		$request = \Config\Services::request();

		$id=$request->getPostGet('id');
		
		$sql1="SELECT * FROM branch_master ORDER BY branch_name";
		$branches = $db->query($sql1)->getResultArray(); 
		
		$data["branches"]=$branches;
		
		$sql1="SELECT comman_address_new.*,jobs.*,clients.account_no,jobs.id as job_edit_id FROM `jobs`, `comman_address_new`, `clients` WHERE jobs.from_phone = comman_address_new.phone and jobs.client_id = clients.id and jobs.id='".$id."'";
		$job = $db->query($sql1)->getFirstRow(); 
		
		$data["job"]=$job;

		// print_r($job);
		// die($id);

		$sql1="SELECT * FROM `job_pieces` WHERE job_id='".$id."'";
		$job_pieces = $db->query($sql1)->getResultArray(); 
		
		$data["job_pieces"]=$job_pieces;
		return view('jobs/edit_job',$data);
	}
	

	public function view_job()
	{
		$db = \Config\Database::connect();
		$request = \Config\Services::request();

		$id=$request->getPostGet('id');
		
		$sql1="SELECT * FROM branch_master ORDER BY branch_name";
		$branches = $db->query($sql1)->getResultArray(); 
		
		$data["branches"]=$branches;
		
		$sql1="SELECT jobs.*,comman_address_new.*,clients.account_no,jobs.id as job_edit_id FROM `jobs`, `comman_address_new`, `clients` WHERE jobs.from_phone = comman_address_new.phone and jobs.client_id = clients.id and jobs.id='".$id."'";
		$job = $db->query($sql1)->getFirstRow(); 
		
		$data["job"]=$job;

		// print_r($job);
		// die($id);

		$sql1="SELECT * FROM `job_pieces` WHERE job_id='".$id."'";
		$job_pieces = $db->query($sql1)->getResultArray(); 
		
		$data["job_pieces"]=$job_pieces;
		
		$sql="select code,dr_datetime from jobs_drivers,drivers where drivers.id = jobs_drivers.driver_id and job_id ='".$id."' order by driver_order;";
		$drivers = $db->query($sql)->getResultArray(); 
		
		$data["drivers"]=$drivers;
		// print_r($drivers);die($sql);
		$sql="select code,a_datetime from jobs_agents,agents where agents.id = jobs_agents.agent_id and job_id ='".$id."' order by agent_order;";
		$agents = $db->query($sql)->getResultArray(); 
		
		$data["agents"]=$agents;

		$sql="select * from jobs_air where job_id ='".$id."';";
		$airports = $db->query($sql)->getResultArray(); 
		
		$data["airports"]=$airports;

		// print_r($data);
		// die;
		return view('jobs/view_job',$data);
	}

	public function add_job_notes()
	{
		$db = \Config\Database::connect();
		$request = \Config\Services::request();

		$id=$request->getPostGet('id');
		
		$sql1="SELECT * FROM `jobs` WHERE id='".$id."'";
		$job = $db->query($sql1)->getFirstRow(); 
		
		$data["job"]=$job;
		
		return view('jobs/add_job_notes',$data);
	}

	public function save_job_notes()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data = $request->getPost();
		$sql_data['date_time'] = date("Y/m/d H:i:s");
		$sql_data['user_id'] = $_SESSION["user_id"];
		$sql_data['isshow'] = 0;
		
		$db->table('jobs_notes')->insert($sql_data);
		$session->setFlashdata('msg','Successfully added Note');

		return true;
	}
	

	public function modify()
	{
		return view('jobs/modify');
	}

	
	function save_job()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		helper('fun');

		$f_date=$_REQUEST["f_date"];
		$month=substr($f_date,5,2);
		$day=substr($f_date,8,2);	
		$year=substr($f_date,0,4);
				
		$f_time=$_REQUEST["f_time"];
		$hour=substr($f_time,0,2);
		$min=substr($f_time,3,2);

		// echo $hour;
		// echo "<br>";
		// echo $min;
		// echo "<br>";
		// echo $month;
		// echo "<br>";
		// echo $day;
		// echo "<br>";
		// echo $year;
		// echo "<br>";

		// die($f_date);

		$f_dt=mktime($hour,$min,"0",$month,$day,$year);
		$year=date("y",$f_dt);
		$month=date("m",$f_dt);
		$day=date("d",$f_dt);				

		$int_job_no=get_new_int_job_no($year);
		$cancel=0;
		$ref=0;			
		$temp1=0;		  
			
		$sql="select id,name,billing_method,p_ticket from clients where account_no ='".$_REQUEST["account_no"]. "';";	
		$clientInfo=$db->query($sql)->getFirstRow();

		if(empty($clientInfo)) { 
			$msg="Account Not found in database Please Re Enter Account No."; $cancel=1; 
		} else {
			$client_id =$clientInfo->id; 
			$billing_method =$clientInfo->billing_method; 
			$client_name=$clientInfo->name; 
			$p_ticket=$clientInfo->p_ticket;
		}

		$sql="select * from jobs_inventory_temp where user_id='".$_SESSION["user_id"]."';";
		$inventoryInfo=$db->query($sql)->getFirstRow();

		$inventory_temp=0;

		if(!empty($inventoryInfo))
		{
			$inventory_temp=$inventoryInfo;
		}
		
		if($inventory_temp==0 && $_REQUEST["account_no"]=='7220')
		{
			$session->setFlashdata('error','Please Select Serial For Client Account : 7212');
		}		
		
		if ($cancel==0) {
			
			if(isset($_REQUEST["round_trip"])) $is_round_trip=1; else $is_round_trip=0;
			if(isset($_REQUEST["continous"])) $is_continous=1; else $is_continous=0;
			if(isset($_REQUEST["schedule"])) $is_schedule=1; else $is_schedule=0;
			if(isset($_REQUEST["multiple"])) $is_multiple=1; else $is_multiple=0;			
			// if($_REQUEST["job_type"]!="") $job_type=$_REQUEST["job_type"]; else 
			$job_type="Normal";			
						
			$phase="UNASSIGNED";			
			$phase2="?";			
			$phase3="1";						
			$signature=$_SESSION["user_id"];
			if(isset($_REQUEST["service_desc"])) $service_desc=$_REQUEST["service_desc"]; else $service_desc ="-";
			$c_date=date("Y/m/d");
			$c_time=date("H:i:s");	
			
			$sql4= "SELECT branch_zip FROM branch_master WHERE branch_html_val='".$_REQUEST['branch']."'";
			$row4 = $db->query($sql4)->getFirstRow();
			
			if($row4->branch_zip=="") $row4->branch_zip="10018";
			$pick_miles=driver_distance_2nd($row4->branch_zip,$_REQUEST["f_zip"]);
			$del_miles=driver_distance_2nd($row4->branch_zip,$_REQUEST["t_zip"]);	
				
			if($_REQUEST["f_zone"]=='NY-NYC') 
			$job_branch='messny';
			else if(strtolower($_REQUEST["f_state"])=='ny' || strtolower($_REQUEST["f_state"])=='nj') 
				$job_branch=strtolower($_REQUEST["f_state"]);
			else {
				$miles=intval(zip_distance("10018",$_REQUEST["f_zip"]));	
				
				if($miles<75) $job_branch='ny';
				else {
					$miles1=intval(zip_distance("7101",$_REQUEST["f_zip"]));	
					
					if($miles1<75) $job_branch='nj';
					else $job_branch='outside';
				}
			
			}
			
//Calculaing Disp Time
			$m=substr($_REQUEST["f_date"],5,2);
			$d=substr($_REQUEST["f_date"],8,2);			
			$y=substr($_REQUEST["f_date"],0,4);			
			$h=substr($_REQUEST["f_time"],0,2);
			$i=substr($_REQUEST["f_time"],3,2);			
			
			$disp_time =disp_time_new($_REQUEST["service_type"],$pick_miles);
			$disp_date = date("Y/m/d H:i:s", mktime($h,$i,0,$m,$d,$y)-($disp_time*60));
			

			$travel_time =travel_time_new($_REQUEST["service_type"],$_REQUEST["driver_miles"]);
			$pickup_time =pick_time_new($_REQUEST["service_type"],$pick_miles);


			$sql="select id,name,billing_method,p_ticket from clients where account_no ='".$_REQUEST["account_no"]. "';";	
			$info = $db->query($sql)->getFirstRow();
			if(empty($info)) { 
				$msg="Account Not found in database Please Re Enter Account No."; $cancel=1; 
			}
			else {
				$client_id =$info->id; 
				$billing_method = $info->billing_method; 
				$client_name=$info->name; 
				$p_ticket=$info->p_ticket;
			}
			
			$sr_no=get_new_jobno2($year,$month,$day);			
			$sr_no2=$sr_no;
							
			$job_no=sprintf("%d",$year).sprintf("%02d",$month).sprintf("%02d",$day).$sr_no;	
					
			// if($_REQUEST["not_ref"]=='1')
			// 	$h_ref_no="R".$job_no;
			// else
				$h_ref_no = $_REQUEST["reference_no"];

			$phase="UNASSIGNED";			
			$phase2="?";			
			$phase3="1";						
			$signature=$_SESSION["user_id"];

			if(isset($_REQUEST["service_desc"])) $service_desc=$_REQUEST["service_desc"]; 
			else $service_desc ="-";

			$c_date=date("Y/m/d");
			$c_time=date("H:i:s");	

			$sql="select TIME_ZONE,DAY_LIGHT_SAVING,h_day_light from zip_codes where ZIP ='".$_REQUEST["f_zip"]."' limit 1;";
			$rss1=$db->query($sql)->getResultArray();
			foreach($rss1 as $r)
			{
				$adj_time=intval($r["TIME_ZONE"]) - 5;
			}
			if($_REQUEST["f_time"]=="00:00")
			{
				$temp=$adj_time+($pickup_time*60);
				$f_time_new=date("H:i",$temp);
				$temp = $adj_time;
				
				$temp = $adj_time+($disp_time*60);
				$disp_date = date("Y/m/d H:i:s",$temp);
			}
			else
				$f_time_new=$_REQUEST["f_time"];

				if($_REQUEST["t_time"]=="00:00")
			{
					if($_REQUEST["f_time"]!="00:00")
					{
								$m=substr($_REQUEST["f_date"],5,2);
								$d=substr($_REQUEST["f_date"],8,2);			
								$y=substr($_REQUEST["f_date"],0,4);			
								$h=substr($_REQUEST["f_time"],0,2);
								$i=substr($_REQUEST["f_time"],3,2);			
								$temp=mktime($h,$i,0,$m,$d,$y)+($travel_time *60);
								$t_time_new=date("H:i",$temp);
								$t_date_new=date("Y/m/d",$temp);
												
					}
					else
					{
									
						$temp=($adj_time)+($pickup_time*60)+($travel_time *60);
						$t_time_new=date("H:i",$temp);
						$t_date_new=h_sdate($_REQUEST["t_date"]);
					}
				//print("<HR>".$temp);
			}
			else
				{
					$t_time_new=$_REQUEST["t_time"];
					$t_date_new=h_sdate($_REQUEST["t_date"]);
				}


			$id=get_new_id("jobs","id");				
			
			$sql="insert into jobs set
				 	               id='".$id."',				
								   job_no='".$job_no."',	
								   int_job_no='".$int_job_no."',
								   branch='".$_REQUEST["branch"]."',							   
								   client_id='".$client_id."',			
								   reference_no='".$h_ref_no."',										   						   							    
				 	               sr_no='".$sr_no."',
								   month1='".$month."',
				 	               year1='".$year."',								   	
				 	               day1='".$day."',								   									   							   				 
				 	               c_date='".$c_date."',
				 	               c_time='".$c_time."',								   
				 	               l_date='".$c_date."',
				 	               l_time='".$c_time."',								   								   
								   phase='".$phase."',
								   phase2='".$phase2."',	
								   phase3='".$phase3."',									   							   
								   caller_name='".$_REQUEST["caller_name"]."',
								   commodity='".$_REQUEST["commodity"]."',											   								   
								   service_type='".$_REQUEST["service_type"]."',	
								   service_desc='".$service_desc."',									   							   
            						total_pcs='".$_REQUEST["total_pcs"]."',
									total_weight='".$_REQUEST["total_weight"]."',
									from_name='".$_REQUEST["f_name"]."',
									from_address1='".$_REQUEST["f_address1"]."',
									from_address2='".$_REQUEST["f_address2"]."', 
									from_room_no='".$_REQUEST["f_room_no"]."',
									from_city='".$_REQUEST["f_city"]."',									
									from_state='".$_REQUEST["f_state"]."',
									from_zip='".$_REQUEST["f_zip"]."',
									from_zone='".$_REQUEST["f_zone"]."',									
									from_phone='".$_REQUEST["f_phone"]."',
									from_phone_ext='".$_REQUEST["f_ext"]."',
									from_contact_name='".$_REQUEST["f_contact"]."',
									from_instruction='".$_REQUEST["f_instruction1"]."',
									from_time='".$f_time_new."',
									from_date='".h_sdate($_REQUEST["f_date"])."',
									to_name='".$_REQUEST["t_name"]."',
									to_address1='".$_REQUEST["t_address1"]."',
									to_address2='".$_REQUEST["t_address2"]."',
									to_room_no='".$_REQUEST["t_room_no"]."',
									to_city='".$_REQUEST["t_city"]."',
									to_state='".$_REQUEST["t_state"]."',
									to_zone='".$_REQUEST["t_zone"]."',
									to_zip='".$_REQUEST["t_zip"]."',									
									to_phone='".$_REQUEST["t_phone"]."',
									to_phone_ext='".$_REQUEST["t_ext"]."',
									to_contact_name='".$_REQUEST["t_contact"]."',
									to_instruction='".$_REQUEST["t_instruction1"]."',
									to_time='".$t_time_new."',
									to_date ='".h_sdate($_REQUEST["t_date"])."',
									agent_miles ='".$_REQUEST["agent_miles"]."',	
									miles ='".$_REQUEST["company_miles"]."',
									driver_miles ='".$_REQUEST["driver_miles"]."',								
									pickup_miles ='".$pick_miles."',									
									delivery_miles ='".$del_miles."',																											
									pod=NULL,
									is_round_trip ='".$is_round_trip."',
									is_schedule='".$is_schedule."',									
									is_multiple='".$is_multiple."',																		
									is_continous ='".$is_continous."',										
									job_type='".$job_type."',			
									client_price_table='NULL',		
									driver_price_table='NULL',		
									agent_price_table='NULL',
									dispatcher_id='',
									driver_id1=NULL,
									driver_id2=NULL,
									driver_id3=NULL,
									driver_id4=NULL,
									driver_id5=NULL,
									driver_id6=NULL,
									pu_arr_dt=NULL,
									pu_dep_dt=NULL,
									de_arr_dt=NULL,
									de_dep_dt=NULL,
									pu_waiting='0',
									de_waiting='0',
									holding='-',
									d_price_done='NULL',
									c_price_done='NULL',
									driver_price='0',
									client_price='0',
									agent_price='0',
									invoice_id='NULL',
									settlement_id1='NULL',
									settlement_id2='NULL',
									settlement_id3='NULL',
									settlement_id4='NULL',
									settlement_id5='NULL',
									settlement_id6='NULL',			
									disp_time='".$disp_date."',		
									travel_time='".$travel_time."',		
									pickup_time='".$pickup_time."',																																																												
									deleted=0,
									job_type_2='".$_REQUEST['job_type_2']."',									
									signature='".$signature."';";
									
			$db->query($sql);
			$sql_chk="Select * from comman_address_new where phone='".$_REQUEST["f_phone"]."' ";
									
			$rss_chk=$db->query($sql_chk)->getFirstRow();
									
			if(empty($rss_chk)) {
				$insert="Insert into comman_address_new set phone='".$_REQUEST["f_phone"]."',
				name='".$_REQUEST["f_name"]."',address1='".$_REQUEST["f_address1"]."',
				address2='".$_REQUEST["f_address2"]."',room_no='".$_REQUEST["f_room_no"]."',
				city='".$_REQUEST["f_city"]."',state='".$_REQUEST["f_state"]."',
				zip='".$_REQUEST["f_zip"]."',zone='".$_REQUEST["f_zone"]."'";
				$db->query($insert);
			} else{
				$update="Update comman_address_new set name='".$_REQUEST["f_name"]."',
				address1='".$_REQUEST["f_address1"]."',address2='".$_REQUEST["f_address2"]."',
				room_no='".$_REQUEST["f_room_no"]."',city='".$_REQUEST["f_city"]."',
				state='".$_REQUEST["f_state"]."',zip='".$_REQUEST["f_zip"]."',
				zone='".$_REQUEST["f_zone"]."' where phone='".$_REQUEST["f_phone"]."'";
				$db->query($update);
			}
									
			$sql_chk_2="Select * from comman_address_new where phone='".$_REQUEST["t_phone"]."' ";
			$rss_chk_2=$db->query($sql_chk_2)->getFirstRow();
			
			if(empty($rss_chk_2)) {
				$insert_2="Insert into comman_address_new set phone='".$_REQUEST["t_phone"]."',
				name='".$_REQUEST["t_name"]."',address1='".$_REQUEST["t_address1"]."',
				address2='".$_REQUEST["t_address2"]."',room_no='".$_REQUEST["t_room_no"]."',
				city='".$_REQUEST["t_city"]."',state='".$_REQUEST["t_state"]."',
				zip='".$_REQUEST["t_zip"]."',zone='".$_REQUEST["t_zone"]."'";
				$db->query($insert_2);
			} else{
				$update_2="Update comman_address_new set name='".$_REQUEST["t_name"]."',
				address1='".$_REQUEST["t_address1"]."',address2='".$_REQUEST["t_address2"]."',
				room_no='".$_REQUEST["t_room_no"]."',city='".$_REQUEST["t_city"]."',
				state='".$_REQUEST["t_state"]."',zip='".$_REQUEST["t_zip"]."',zone='".$_REQUEST["t_zone"]."'	
				where phone='".$_REQUEST["t_phone"]."'";
				$db->query($update_2);
			}
									
			job_log($id,"Job Entry","New Job Created.","-","-");

			update_job_time_new($id);
							
			if($_REQUEST["account_no"]=='7220')
				save_jobs_airport($id,"pu",$_REQUEST["f_zip"]);

			if($_REQUEST["account_no"]=='7220')			
				save_jobs_airport($id,"del",$_REQUEST["t_zip"]);

			
			$j=1;
				
			if($_REQUEST["total_pcs"]>0 && $_REQUEST["commodity"]!="document") {

				$sql="select * from job_pieces_temp where user_id ='".$_SESSION["user_id"]."';";
				$jobPieces=$db->query($sql)->getResultArray();
					
				$j=1;
				foreach($jobPieces as $jp) {
					$sql="insert into job_pieces (job_id,pcs,weight,height,lenght,width,order_no) 
					values ('".$id."','".$jp["pcs"]."','".$jp["weight"]."','".$jp["height"]."',
					'".$jp["lenght"]."','".$jp["width"]."','".$j."')";
					$db->query($sql);
					$j++;
				}
					
			}
				
			$sql="delete from job_pieces_temp where user_id ='".$_SESSION["user_id"]."';";
			$db->query($sql);

			$sql="select inventory.* from jobs_inventory_temp,inventory where inventory.id =jobs_inventory_temp.inven_id and user_id ='".$_SESSION["user_id"]."';";
			$inventoryTemp=$db->query($sql)->getResultArray();
					
			$i=0;
			$w_pcs=0;
			$w_weight=0;

			foreach($inventoryTemp as $it) {
				if($i==0) {
					$trans_id=get_new_id("inventory_trans_m","trans_id");
					$trans_no=get_new_trans_no('out');
								
					$sql="insert into inventory_trans_m set
								trans_id='".$trans_id."',
								trans_no='".$trans_no."',
								account_no ='".$_REQUEST["account_no"]."',
								trans_type='OUT',
								part_no='".$it["part_no"]."',
								part_loc='".$it["part_loc"]."',
								weight='".$it["weight"]."',
								date1='".date("Y/m/d")."',
								time1='".date("H:i:s")."',
								job_no='".$job_no."',
								ref_no='".$_REQUEST["reference_no"]."',
								temp='1',
								user_id='".$_SESSION["user_id"]."';";
					$db->query($sql);
				}
						
				$sql="insert into inventory_trans_d set
						id='".$it['inven_id']."',						
						trans_id='".$trans_id."',
						part_no ='".$it["part_no"]."',
						part_loc='".$it["part_loc"]."',
												inventory_id='".$it["inventory_id"]."',	
						serial_no='".$it["serial_no"]."',
						tracking_no='".$it["tracking_no"]."',
						serial_loc='".$it["serial_loc"]."',
						temp='1';";
				$db->query($sql);
						
				save_warehouse_log("Out Bound",$it["serial_no"],"Out Bound :  ".$trans_no." Job No. :".$job_no);
				
				$sql="delete  from inventory where id ='".$it["id"]."';";
				$db->query($sql);
						
				$i++;
				$w_pcs++;
				$w_weight=$w_weight+$it["weight"];
			}

			if($w_pcs) {	
				$sql="update jobs set warehouse_trans_id ='".$trans_id."',total_pcs='".$w_pcs."',total_weight='".$w_weight."' where id ='".$id."';";
				$db->query($sql);
			}
				
			$sql="delete from jobs_inventory_temp where user_id ='".$_SESSION["user_id"]."';";
			$db->query($sql);

			$vars=$_REQUEST;

			if($p_ticket=='1' && $_REQUEST["account_no"]!='7021') {
				if($_REQUEST["account_no"]=='7220') { 
					online_printer("order",$id,$_REQUEST["branch"]); 
					online_printer("bol",$id,$_REQUEST["branch"]); 
					// save_alert("Ait-Job","AIT JOB ENTERED.","One Job Entered for AIT [7212] Account.<BR> JOB No. :".$job_no."<BR> Reference No.:".$_REQUEST["reference_no"],"all","EZ COURIER -".$_SESSION["user_id"]);
				} elseif($_REQUEST["account_no"]=='7217') {
					online_printer("master_job",$id,$_REQUEST["branch"]);
					online_printer("pickup_alert",$id,$_REQUEST["branch"]);
					online_printer("fedex_alert",$id,$_REQUEST["branch"]);
				} else online_printer("order",$id,$_REQUEST["branch"]);	
			}

			return redirect()->to(base_url().'/jobs/job_search');

		}		
		
	}

	
	function update_job()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		helper('fun');

		$f_date=$_REQUEST["f_date"];
		$month=substr($f_date,5,2);
		$day=substr($f_date,8,2);	
		$year=substr($f_date,0,4);
				
		$f_time=$_REQUEST["f_time"];
		$hour=substr($f_time,0,2);
		$min=substr($f_time,3,2);

		$f_dt=mktime($hour,$min,"0",$month,$day,$year);
		$year=date("y",$f_dt);
		$month=date("m",$f_dt);
		$day=date("d",$f_dt);				

		$int_job_no=get_new_int_job_no($year);
		$cancel=0;
		$ref=0;			
		$temp1=0;		  
			
		$sql="select id,name,billing_method,p_ticket from clients where account_no ='".$_REQUEST["account_no"]. "';";	
		$clientInfo=$db->query($sql)->getFirstRow();

		if(empty($clientInfo)) { 
			$msg="Account Not found in database Please Re Enter Account No."; $cancel=1; 
		} else {
			$client_id =$clientInfo->id; 
			$billing_method =$clientInfo->billing_method; 
			$client_name=$clientInfo->name; 
			$p_ticket=$clientInfo->p_ticket;
		}		
		
		if ($cancel==0) {
			
			if(isset($_REQUEST["round_trip"])) $is_round_trip=1; else $is_round_trip=0;
			if(isset($_REQUEST["continous"])) $is_continous=1; else $is_continous=0;
			if(isset($_REQUEST["schedule"])) $is_schedule=1; else $is_schedule=0;
			if(isset($_REQUEST["multiple"])) $is_multiple=1; else $is_multiple=0;			
			// if($_REQUEST["job_type"]!="") $job_type=$_REQUEST["job_type"]; else 
			$job_type="Normal";			
		
			if(isset($_REQUEST["service_desc"])) $service_desc=$_REQUEST["service_desc"]; else $service_desc ="-";
			$c_date=date("Y/m/d");
			$c_time=date("H:i:s");	
			
			$sql4= "SELECT branch_zip FROM branch_master WHERE branch_html_val='".$_REQUEST['branch']."'";
			$row4 = $db->query($sql4)->getFirstRow();
			
			if($row4->branch_zip=="") $row4->branch_zip="10018";
			$pick_miles=driver_distance_2nd($row4->branch_zip,$_REQUEST["f_zip"]);
			$del_miles=driver_distance_2nd($row4->branch_zip,$_REQUEST["t_zip"]);	
				
			if($_REQUEST["f_zone"]=='NY-NYC') 
			$job_branch='messny';
			else if(strtolower($_REQUEST["f_state"])=='ny' || strtolower($_REQUEST["f_state"])=='nj') 
				$job_branch=strtolower($_REQUEST["f_state"]);
			else {
				$miles=intval(zip_distance("10018",$_REQUEST["f_zip"]));	
				
				if($miles<75) $job_branch='ny';
				else {
					$miles1=intval(zip_distance("7101",$_REQUEST["f_zip"]));	
					
					if($miles1<75) $job_branch='nj';
					else $job_branch='outside';
				}
			
			}
			
			$m=substr($_REQUEST["f_date"],5,2);
			$d=substr($_REQUEST["f_date"],8,2);			
			$y=substr($_REQUEST["f_date"],0,4);			
			$h=substr($_REQUEST["f_time"],0,2);
			$i=substr($_REQUEST["f_time"],3,2);			
			
			$disp_time =disp_time_new($_REQUEST["service_type"],$pick_miles);
			$disp_date = date("Y/m/d H:i:s", mktime($h,$i,0,$m,$d,$y)-($disp_time*60));
			
			$travel_time =travel_time_new($_REQUEST["service_type"],$_REQUEST["driver_miles"]);
			$pickup_time =pick_time_new($_REQUEST["service_type"],$pick_miles);

			if(isset($_REQUEST["service_desc"])) $service_desc=$_REQUEST["service_desc"]; 
			else $service_desc ="-";

			$c_date=date("Y/m/d");
			$c_time=date("H:i:s");	

			$sql="select TIME_ZONE,DAY_LIGHT_SAVING,h_day_light from zip_codes where ZIP ='".$_REQUEST["f_zip"]."' limit 1;";
			$rss1=$db->query($sql)->getResultArray();
			foreach($rss1 as $r)
			{
				$adj_time=intval($r["TIME_ZONE"]) - 5;
			}
			if($_REQUEST["f_time"]=="00:00")
			{
				$temp=$adj_time+($pickup_time*60);
				$f_time_new=date("H:i",$temp);
				$temp = $adj_time;
				
				$temp = $adj_time+($disp_time*60);
				$disp_date = date("Y/m/d H:i:s",$temp);
			}
			else
				$f_time_new=$_REQUEST["f_time"];

				if($_REQUEST["t_time"]=="00:00")
			{
					if($_REQUEST["f_time"]!="00:00")
					{
								$m=substr($_REQUEST["f_date"],5,2);
								$d=substr($_REQUEST["f_date"],8,2);			
								$y=substr($_REQUEST["f_date"],0,4);			
								$h=substr($_REQUEST["f_time"],0,2);
								$i=substr($_REQUEST["f_time"],3,2);			
								$temp=mktime($h,$i,0,$m,$d,$y)+($travel_time *60);
								$t_time_new=date("H:i",$temp);
								$t_date_new=date("Y/m/d",$temp);
												
					}
					else
					{
									
						$temp=($adj_time)+($pickup_time*60)+($travel_time *60);
						$t_time_new=date("H:i",$temp);
						$t_date_new=h_sdate($_REQUEST["t_date"]);
					}
				//print("<HR>".$temp);
			}
			else
				{
					$t_time_new=$_REQUEST["t_time"];
					$t_date_new=h_sdate($_REQUEST["t_date"]);
				}


			$id=$_REQUEST['job_edit_id'];				
			
			$sql="update jobs set
								   month1='".$month."',
				 	               year1='".$year."',								   	
				 	               day1='".$day."',								   									   							   				 
				 	               c_date='".$c_date."',
				 	               c_time='".$c_time."',								   
				 	               l_date='".$c_date."',
				 	               l_time='".$c_time."',						
								   commodity='".$_REQUEST["commodity"]."',											   								   
								   service_type='".$_REQUEST["service_type"]."',	
								   service_desc='".$service_desc."',									   							   
            						total_pcs='".$_REQUEST["total_pcs"]."',
									total_weight='".$_REQUEST["total_weight"]."',
									from_name='".$_REQUEST["f_name"]."',
									from_address1='".$_REQUEST["f_address1"]."',
									from_address2='".$_REQUEST["f_address2"]."', 
									from_room_no='".$_REQUEST["f_room_no"]."',
									from_city='".$_REQUEST["f_city"]."',									
									from_state='".$_REQUEST["f_state"]."',
									from_zip='".$_REQUEST["f_zip"]."',
									from_zone='".$_REQUEST["f_zone"]."',									
									from_phone='".$_REQUEST["f_phone"]."',
									from_phone_ext='".$_REQUEST["f_ext"]."',
									from_contact_name='".$_REQUEST["f_contact"]."',
									from_instruction='".$_REQUEST["f_instruction1"]."',
									from_time='".$f_time_new."',
									from_date='".h_sdate($_REQUEST["f_date"])."',
									to_name='".$_REQUEST["t_name"]."',
									to_address1='".$_REQUEST["t_address1"]."',
									to_address2='".$_REQUEST["t_address2"]."',
									to_room_no='".$_REQUEST["t_room_no"]."',
									to_city='".$_REQUEST["t_city"]."',
									to_state='".$_REQUEST["t_state"]."',
									to_zone='".$_REQUEST["t_zone"]."',
									to_zip='".$_REQUEST["t_zip"]."',									
									to_phone='".$_REQUEST["t_phone"]."',
									to_phone_ext='".$_REQUEST["t_ext"]."',
									to_contact_name='".$_REQUEST["t_contact"]."',
									to_instruction='".$_REQUEST["t_instruction1"]."',
									to_time='".$t_time_new."',
									to_date ='".h_sdate($_REQUEST["t_date"])."',
									agent_miles ='".$_REQUEST["agent_miles"]."',	
									miles ='".$_REQUEST["company_miles"]."',
									driver_miles ='".$_REQUEST["driver_miles"]."',								
									pickup_miles ='".$pick_miles."',									
									delivery_miles ='".$del_miles."',																											
									pod=NULL,
									is_round_trip ='".$is_round_trip."',
									is_schedule='".$is_schedule."',									
									is_multiple='".$is_multiple."',																		
									is_continous ='".$is_continous."',										
									job_type='".$job_type."',			
									disp_time='".$disp_date."',		
									travel_time='".$travel_time."',		
									pickup_time='".$pickup_time."',
									job_type_2='".$_REQUEST['job_type_2']."' where id='".$_REQUEST['job_edit_id']."';";
									
			$db->query($sql);
			$sql_chk="Select * from comman_address_new where phone='".$_REQUEST["f_phone"]."' ";
									
			$rss_chk=$db->query($sql_chk)->getFirstRow();
									
			if(empty($rss_chk)) {
				$insert="Insert into comman_address_new set phone='".$_REQUEST["f_phone"]."',
				name='".$_REQUEST["f_name"]."',address1='".$_REQUEST["f_address1"]."',
				address2='".$_REQUEST["f_address2"]."',room_no='".$_REQUEST["f_room_no"]."',
				city='".$_REQUEST["f_city"]."',state='".$_REQUEST["f_state"]."',
				zip='".$_REQUEST["f_zip"]."',zone='".$_REQUEST["f_zone"]."'";
				$db->query($insert);
			} else{
				$update="Update comman_address_new set name='".$_REQUEST["f_name"]."',
				address1='".$_REQUEST["f_address1"]."',address2='".$_REQUEST["f_address2"]."',
				room_no='".$_REQUEST["f_room_no"]."',city='".$_REQUEST["f_city"]."',
				state='".$_REQUEST["f_state"]."',zip='".$_REQUEST["f_zip"]."',
				zone='".$_REQUEST["f_zone"]."' where phone='".$_REQUEST["f_phone"]."'";
				$db->query($update);
			}
									
			$sql_chk_2="Select * from comman_address_new where phone='".$_REQUEST["t_phone"]."' ";
			$rss_chk_2=$db->query($sql_chk_2)->getFirstRow();
			
			if(empty($rss_chk_2)) {
				$insert_2="Insert into comman_address_new set phone='".$_REQUEST["t_phone"]."',
				name='".$_REQUEST["t_name"]."',address1='".$_REQUEST["t_address1"]."',
				address2='".$_REQUEST["t_address2"]."',room_no='".$_REQUEST["t_room_no"]."',
				city='".$_REQUEST["t_city"]."',state='".$_REQUEST["t_state"]."',
				zip='".$_REQUEST["t_zip"]."',zone='".$_REQUEST["t_zone"]."'";
				$db->query($insert_2);
			} else{
				$update_2="Update comman_address_new set name='".$_REQUEST["t_name"]."',
				address1='".$_REQUEST["t_address1"]."',address2='".$_REQUEST["t_address2"]."',
				room_no='".$_REQUEST["t_room_no"]."',city='".$_REQUEST["t_city"]."',
				state='".$_REQUEST["t_state"]."',zip='".$_REQUEST["t_zip"]."',zone='".$_REQUEST["t_zone"]."'	
				where phone='".$_REQUEST["t_phone"]."'";
				$db->query($update_2);
			}
									
			job_log($id,"Job Entry","New Job Created.","-","-");

			update_job_time_new($id);
							
			if($_REQUEST["account_no"]=='7220')
				save_jobs_airport($id,"pu",$_REQUEST["f_zip"]);

			if($_REQUEST["account_no"]=='7220')			
				save_jobs_airport($id,"del",$_REQUEST["t_zip"]);

			
			$j=1;
				
			if($_REQUEST["total_pcs"]>0 && $_REQUEST["commodity"]!="document") {

				$sql="select * from job_pieces_temp where user_id ='".$_SESSION["user_id"]."';";
				$jobPieces=$db->query($sql)->getResultArray();
				
				$sql="delete from job_pieces where job_id ='".$id."';";
				$db->query($sql);
					
				$j=1;
				foreach($jobPieces as $jp) {
					$sql="insert into job_pieces (job_id,pcs,weight,height,lenght,width,order_no) 
					values ('".$id."','".$jp["pcs"]."','".$jp["weight"]."','".$jp["height"]."',
					'".$jp["lenght"]."','".$jp["width"]."','".$j."')";
					$db->query($sql);
					$j++;
				}
					
			}
				
			$sql="delete from job_pieces_temp where user_id ='".$_SESSION["user_id"]."';";
			$db->query($sql);

			return redirect()->to(base_url().'/jobs/job_search');

		}		
		
	}


}
