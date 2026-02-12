<?php

use Config\Database;
use App\Models\AptDirModel;
use App\Models\AptModel;
use App\Models\AgentModel;


/*
|--------------------------------------------------------------------------
| BASIC DB UTILITY
|--------------------------------------------------------------------------
*/
function db()
{
    return Database::connect();
}

function auth_check()
{
    $session = \Config\Services::session();
	if(isset($_SESSION['user_id'])) {
		return '1';
	} else {
        return '0';
    }
}

function h_safe_sql($str)
{
    $str=str_replace("'","",$str);
    return $str;

}

function h_sdate($date)
{
    if($date=="") return "";
    return date("Y/m/d ",strtotime($date));
}

function h_gdate($date)
{
    if($date=="") return "";
    return date("m/d/Y",strtotime($date));
}

function h_gday($date)
{
    if($date=="") return "";
    return date("l",strtotime($date));
}

function h_gldate($date)
{
    if($date=="") return "";
    return date("D - m/d/Y",strtotime($date));
}

function h_gtime($time)
{
    if($time=="") return "00:00";
    return date("H:i",strtotime($time));
}
function h_gcdate($time)
{
    if($time=="") return "";
    return date("m/d/Y H:i",strtotime($time));
}

function get_attachments($id,$bill) {
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

    $attachment="";
	$i=0;
	$sql="select * from vehicle_new_expense_attachments 
    where expense_id='".$id."' order by id";
    $data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$i++;
		$attachment .='<a href="/~vehicle_docs/'.$d['attachment'].'" target="_blank">Attachment '.$i.'</a>';
	}
		
  	if($bill!="") 
		$attachment .='<a href="/~vehicle_docs/'.$bill.'" target="_blank">Attachment '.($i+1).'</a>';

	if($attachment!="")
		$attachment_str=''.$attachment.'</div>';
}

function get_holding_inv($invoice_no)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$temp=0;
	$sql="select id,inv_ref_amt from jobs_pay_hold where inv_ref_no='".$invoice_no."' and adjusted=0 and inv_ref='inv';";
	$data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$temp=$d["inv_ref_amt"];
	}
	return $temp;
}


function get_holding_client($client_id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$temp=0;
	$sql="select sum(inv_ref_amt) as amt from jobs_pay_hold where client_id ='".$client_id."' and adjusted=0 ;";
	$data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$temp=$d["amt"];
	}
	return $temp;
}

function get_gtw($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$gtw='';
	$sql="select gateway_trans_no from jobs_cc_info where job_id='".$id."'";
	$data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$gtw.=$d["gateway_trans_no"].', ';
	}

	return $gtw;
}

function get_cpt_name($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select name from cpt where id='".$id."'";
	$data=$db->query($sql)->getFirstRow(); 
	
	return $data->name;
}

function get_miles_attachment($id) 
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

    $attachment="";
	$i=0;
	$sql="select * from vehicle_new_expense_attachments 
    where expense_id='".$id."' order by id";
    $data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$i++;
		$attachment .='<a href="/~vehicle_docs/'.$d['attachment'].'" target="_blank">A<img width="24" src="'.base_url().'/pic/attach.png"></a>';
	}
}

function get_job_drivers($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$str="";
	$sql="select code,first_name,pager_transmit from jobs_drivers,drivers 
	where drivers.id = jobs_drivers.driver_id and job_id ='".$id."' 
	order by driver_order desc;";
    $data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$str.=$d["code"].",";
	}
	return $str;
}

function get_driver($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	if($id=="") return "-";
	$temp=" ";
	if(substr($id,0,1)=='A') 
		$sql_driver="select code from agents  where id= '".substr($id,1)."'";
	else
		$sql_driver="select code from drivers  where id=".$id;

    $data=$db->query($sql_driver)->getResultArray(); 
	foreach($data as $d) {
	  $temp.=$d["code"];
	}
 
 	return $temp;
}

function weekly_charges_td($from_date,$to_date,$dr_id,$dr_tot,$come_days,$tot_tot,$sdate_no)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$data['come_days']=$come_days;
	$data['dr_tot']=$dr_tot;
	$data['tot_tot']=$tot_tot;
	$data['sdate_no']=$sdate_no;

	$sql ="select sum(base_chr+weight_chr+fuel_chr+pwaiting_chr+dwaiting_chr+other1_chr+other2_chr+other3_chr+other4_chr) as total,di.driver_id,count(di.job_id) from driver_invoice di, jobs_drivers jd where di.job_id = jd.job_id and di.driver_id=jd.driver_id and di.driver_order=jd.driver_order and dr_datetime >='".$from_date."' and dr_datetime <='".$to_date."' and di.driver_id ='".$dr_id."' group by di.driver_id ;";
	$sqldata=$db->query($sql)->getFirstRow();
	
	if(!empty($sqldata)) {
		$data['come_days']=$come_days+1;
		$data['td']='<td>'.$sqldata["total"].'</td>';
		$data['dr_tot']=$dr_tot+floatval($sqldata["total"]);
		$data['tot_tot']=$tot_tot +floatval($sqldata["total"]);
	} else {
		$data['td']='<td>0</td>';
		$data['sdate_no'] =strtotime($sdate_no.'+ 1 days');
	}
	return $data;
}

function check_agent($job_id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();
	$sql="select * from jobs_agents where job_id='".$job_id."';";
	$data=$db->query($sql)->getResultArray(); 
	$f1=0; 
	if(!empty($data)) {
		$f1=1;
	}
	return $f1;
}

function get_invoice_no_by_job($inv_id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$temp="&nbsp;";
	$sql="select invoice_no from invoice_master where id ='".$inv_id."';";
	$data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$temp=$d["invoice_no"];
	}
	return $temp;
}


function get_client_id($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select id from clients where account_no ='".$id."';";
	$data=$db->query($sql)->getFirstRow(); 

	if(!empty($data))
		return $data->id;
	else 
		return null;
}

function get_new_client_account()
{
    $db = \Config\Database::connect();

    $sql = "
        SELECT COALESCE(MAX(CAST(account_no AS UNSIGNED)), 0) + 1 AS account_no
        FROM clients
    ";

    $row = $db->query($sql)->getFirstRow();
	// dd($row->account_no);
    return (int) $row->account_no;
}


function last_driver_no($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$str="";
	$sql="select code,first_name,pager_transmit from jobs_drivers,drivers 
	where drivers.id = jobs_drivers.driver_id and job_id ='".$id."' 
	order by driver_order desc limit 1;";
	$data=$db->query($sql)->getResultArray(); 
	foreach($data as $d) {
		$str=$d["first_name"].",".$d["code"].",".$d["pager_transmit"];
	}
	return $str;
}

function get_settlement_amt($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

    $sql="select * from driver_settlements where settlement_no ='".$id."';";
    $data=$db->query($sql)->getFirstRow(); 
    if(!empty($data)) {
        return $data->settlement_amt;
    } else {
        return false;
    }
}

function get_driver_code($id,$date)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

    $sql="select driver_code from vehicle_new_miles where vehicle_id ='".$id."' and entry_date='".$date."';";
    $data=$db->query($sql)->getFirstRow(); 
    if(!empty($data)) {
        return $data->driver_code;
    } else {
        return false;
    }
}

function get_driver_code1($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

    $sql="select driver_code from vehicle_new_miles where vehicle_id ='".$id."';";
    $data=$db->query($sql)->getFirstRow(); 
    if(!empty($data)) {
        return $data->driver_code;
    } else {
        return false;
    }
}

function get_comp_part_loc($id)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select * from inventory_comp where part_no ='".$id."'";
    $r=$db->query($sql)->getFirstRow(); 
    // print_r($r);die;
    $part_loc="";
    if(!empty($r))
	    $part_loc = $r->comp_part_location." [".$r->account."]";
	
	return $part_loc;
}

function getid($driver = array(),$max_d,$driver_code)
{
	for ($i=0;$i<=$max_d;$i++) {
		if($driver[$i]==$driver_code) return $i;					
	}
	
    return $max_d+1;
}

function get_charges($driver_id,$job_id)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

    $sql="select * from driver_invoice where driver_id='".$driver_id."' and job_id ='".$job_id."';";
	$data=$db->query($sql)->getFirstRow(); 
	
    $charges=0.00;
	$charges= $data->base_chr+$data->weight_chr+$data->pwaiting_chr+$data->dwaiting_chr+$data->fuel_chr+$data->other1_chr+$data->other2_chr+$data->other3_chr+$data->other4_chr;

    return $charges;

}

function get_status($id) 
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

    $sql="select trans_type from inventory_trans_d,inventory_trans_m 
    where inventory_trans_d.trans_id=inventory_trans_m.trans_id and serial_no = '".$id."' 
    order by inventory_trans_d.id desc limit 1;";
    $data=$db->query($sql)->getFirstRow(); 
    return $data->trans_type;
}

function get_driver_vehicle_ids($driver_id, $from_date,$to_date)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

    $vehicle_info=array();
	$vehicle_info['vehicle_id'][]="999999";
	$vehicle_info['plate'][]="";
	$vehicle_info['type'][]="";		
							
	$filter="and driver_id ='".$driver_id."'";
	if($from_date!='') $filter.=" and  date(entry_date) >= '".$from_date."'"; 
	if($to_date!='') $filter.=" and  date(entry_date)<='".$to_date."'"; 
					
	$miles=0;
	$plate="";
	$sql="select distinct vehicle_id,plate,type,sum(end_miles-miles) as miles 
    from vehicle_new_miles,drivers,vehicle_new 
    where vehicle_new_miles.vehicle_id= vehicle_new.id and 
    vehicle_new_miles.driver_id=drivers.id  ".$filter." group by vehicle_id,plate,type";
    $vehicles=$db->query($sql)->getResultArray(); 
	foreach($vehicles as $v) {
		$vehicle_info['vehicle_id'][]=$v["vehicle_id"];
		$plate.=$v["plate"]."-".$v["type"].", ";
		$miles =$miles +intval($v["miles"]);
	}
  
    $vehicle_info['miles']=$miles;	
	$vehicle_info['plate']=$plate;				 
	return $vehicle_info;
}
		
function get_driver_vehicle_ids_new($driver_id, $from_date,$to_date) {
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

    $vehicle_info2=array();
	$filter="and driver_id ='".$driver_id."'";
	if($from_date!='') $filter.=" and  date(entry_date) >= '".$from_date."'"; 
	if($to_date!='') $filter.=" and  date(entry_date)<='".$to_date."'";
					
	$miles=0;
	$plate="";
	$sql="select distinct vehicle_id,entry_date from 
    vehicle_new_miles where 1 ".$filter."  group by vehicle_id,entry_date ;";
    $vehicles=$db->query($sql)->getResultArray(); 
	$n=0;
	foreach($vehicles as $v) {
		$vehicle_info2[$n]['vehicle_id']=$v["vehicle_id"];
		$vehicle_info2[$n]['entry_date']=$v["entry_date"];	
		$n++;						
	}
    return $vehicle_info2;
}
		

function get_vehicle_info($vehicle_new_arr,$from_date,$to_date)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$filter="";
	if($from_date!='') $filter.=" and  date(expense_date) >= '".$from_date."'"; 
	if($to_date!='') $filter.=" and  date(expense_date)<='".$to_date."'"; 
						
	$tolls=0;
	$weekly_expense=0;
	$gas=0;
	$expense=0;	
	
    foreach($vehicle_new_arr as $v) {
		$sql="select sum(amount) as tolls from vehicle_new_expense 
        where account_head='toll' and vehicle_id ='".$v["vehicle_id"]."' 
        and expense_date='".$v["entry_date"]."'";
        $toll=$db->query($sql)->getResultArray(); 
		foreach($toll as $t) {
			$tolls=$tolls+$t["tolls"];
		}
		
        $sql="select sum(amount) as weekly_expense from vehicle_new_expense 
        where account_head='Weekly Expense' and vehicle_id ='".$v["vehicle_id"]."' 
        and expense_date='".$v["entry_date"]."'";
        $expense=$db->query($sql)->getResultArray(); 
		foreach($expense as $e) {
			$weekly_expense=$weekly_expense+$e["weekly_expense"];
		}
					
		$sql="select sum(amount) as gas from vehicle_new_expense 
        where account_head='gas' and vehicle_id ='".$v["vehicle_id"]."' 
        and expense_date='".$v["entry_date"]."'";
        $gases=$db->query($sql)->getResultArray(); 
		foreach($gases as $g) {
			$gas=$gas+$g["gas"];
		}
						
		$sql="select sum(amount) as expense from vehicle_new_expense 
        where account_head='expenses' and vehicle_id ='".$v["vehicle_id"]."' 
        and expense_date='".$v["entry_date"]."';";
        $expenses=$db->query($sql)->getResultArray(); 
        $expense=0;
		foreach($expenses as $e) {
			$expense=$expense+$e["expense"];
		}
	}
				
	$data=array();
	$data["vehcile_tolls"]=$tolls;
	$data["vehcile_weekly_expense"]=$weekly_expense;
	$data["vehcile_gas"]=$gas;
	$data["vehcile_expense"]=$expense;
				
	return $data;
}

function get_job_info($driver_id, $from_date,$to_date)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

    $filter="";
	if($from_date!='') $filter.=" and  date(dr_datetime) >= '".$from_date."'"; 
	if($to_date!='') $filter.=" and  date(dr_datetime)<='".$to_date."'"; 
	$jobs_miles=0;
	$client_price=0;
	$driver_price=0;
	$expense=0;	
	$jobs_ids=array();
	$jobs_ids[]='99999999';
	
    $sql="SELECT DISTINCT driver_invoice.job_id,base_chr,fuel_chr,weight_chr,pwaiting_chr,dwaiting_chr,other1_chr,other2_chr,other3_chr,other4_chr, tolls_parks 
    FROM driver_invoice,jobs_drivers WHERE jobs_drivers.job_id=driver_invoice.job_id  
    AND jobs_drivers.driver_id=driver_invoice.driver_id 
    AND jobs_drivers.driver_order=driver_invoice.driver_order 
    AND driver_invoice.driver_id = '".$driver_id."' ".$filter."  ORDER BY job_id;";
    $driver_det=$db->query($sql)->getResultArray(); 
	foreach($driver_det as $d) {
		$chr=floatval($d["base_chr"])+floatval($d["fuel_chr"])+floatval($d["weight_chr"])+floatval($d["pwaiting_chr"])+floatval($d["dwaiting_chr"])+floatval($d["other1_chr"])+floatval($d["other2_chr"])+floatval($d["other3_chr"])+floatval($d["other4_chr"])+floatval($d["tolls_parks"]);
		$driver_price=$driver_price+$chr;
        if($chr>1) $jobs_ids[]=$d["job_id"];
	}
					
	$sql="SELECT SUM(driver_miles) as miles FROM jobs 
    WHERE id IN (".implode(",",$jobs_ids).");";
    $job_det=$db->query($sql)->getResultArray(); 
	foreach($job_det as $j) {
		$jobs_miles=$j["miles"];
	}
					
    $driver_price=0;				
	$sql="SELECT * FROM driver_invoice WHERE  driver_id='".$driver_id."' 
    and job_id IN (".implode(",",$jobs_ids).");";
    $drivers=$db->query($sql)->getResultArray();
	foreach($drivers as $d) {
		$chr=floatval($d["base_chr"])+floatval($d["fuel_chr"])+floatval($d["weight_chr"])+floatval($d["pwaiting_chr"])+floatval($d["dwaiting_chr"])+floatval($d["other1_chr"])+floatval($d["other2_chr"])+floatval($d["other3_chr"])+floatval($d["other4_chr"])+floatval($d["tolls_parks"]);
		$driver_price=$driver_price+$chr;
	}

    $sql="SELECT SUM(client_price) as client_price FROM jobs 
    WHERE id IN (".implode(",",$jobs_ids).");";
    $clients=$db->query($sql)->getResultArray();
	foreach($clients as $c) {
		$client_price=$c["client_price"];
	}
					
	$sql="SELECT SUM(driver_price) as driver_price FROM jobs 
    WHERE id IN (".implode(",",$jobs_ids).");";
    $prices=$db->query($sql)->getResultArray();
	foreach($prices as $p) {
		$driver_price_all=$p["driver_price"];
	}
	
    $data=array();
	$data["job_miles"]=$jobs_miles;
	$data["driver_amount"]=$driver_price;
	$data["driver_all_amount"]=$driver_price_all;					
	$data["job_amount"]=$client_price;
					
	return $data;
}


function online_printer ($print_type,$print_id,$branch)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql_data['print_type'] = $print_type;
	$sql_data['date_time'] = date("Y/m/d H:i:s");
	$sql_data['user_id'] = $_SESSION["user_id"];
	$sql_data['print_id'] = $print_id;
	$sql_data['branch'] = $branch;
	$sql_data['print_done'] ='0';

	$db->table('jobs_print')->insert($sql_data);
	
}

function get_new_trans_no($type)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select count(*) +1 as cnt1 from inventory_trans_m where trans_type='".$type."';";
    $trans=$db->query($sql)->getResultArray();

	foreach($trans as $t)
	{
		if($type=='out') $temp='WOB'.$t["cnt1"];
		if($type=='in') $temp='WIB'.$t["cnt1"];		
	}

	return $temp;
}

function save_warehouse_log($action,$action_id,$remarks)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	if(isset($_SESSION["user_id"])) 
		$session_id=$_SESSION["user_id"]; 
	else 
		$session_id=$_SESSION["c_login_id"];

		$sql_data['action'] = $action;
		$sql_data['action_id'] = $action_id;
		$sql_data['remarks'] = $remarks;
		$sql_data['user_id'] = $session_id;
		$sql_data['date_time'] = date("Y/m/d H:i:s");
		$sql_data['remote_ip'] = $_SERVER["REMOTE_ADDR"];
		$sql_data['remote_name'] = gethostbyaddr($_SERVER["REMOTE_ADDR"]);

	$db->table('warehouse_log')->insert($sql_data);
}


function get_new_int_job_no($db_connection)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select  flag from jobs_int_flag;";
	$flags=$db->query($sql)->getResultArray();

	if(empty($flag)) $f='0';

	foreach($flags as $fl) {
		$f=$fl["flag"];
	}
	
	if($f=='0') {
		$sql="select max(int_job_no)+1 as int_job_no  from jobs;";
		$jobs=$db->query($sql)->getResultArray();

		foreach($jobs as $j) {
			$n=$j["int_job_no"];
		}

						
		if($n==2000) {
			$sql="update jobs set int_job_no='0' where int_job_no  <='1000';";
			$db->query($sql);

			$sql="update jobs_int_flag set flag ='1' ;";
			$db->query($sql);

		}
	}
	
	if($f=='1') {
		$sql="select max(int_job_no) as int_job_no  from jobs where int_job_no  <=1000;";
		$jobs=$db->query($sql)->getResultArray();

		foreach($jobs as $j) {
			$n=intval($j["int_job_no"])+1;
		}

		if($n==1000) {
			$sql="update jobs set int_job_no='0' where int_job_no  >'1000';";
			$db->query($sql);
							
			$sql="update jobs_int_flag set flag ='0' ;";
			$db->query($sql);
		}

	}
				
	return $n;
}

function job_log($id,$form,$change,$old,$new)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="insert into jobs_log (job_id,form,changes,old,new,date_time,user_id) values('".$id."','".$form."','".$change."','".$old."','".$new."','".date("Y/m/d H:i:s")."','".$_SESSION['user_id']."');";
	$db->query($sql);    

}

function update_job_time_new($id)
{
    $request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql="select TIME_ZONE,h_time_zone,h_day_light from zip_codes where ZIP='10018' limit 1 ;";

	// if($_SESSION["user_id"]=='harpreet') print("<BR>".$sql);

	$zip=$db->query($sql)->getResultArray();

	foreach($zip as $z) {
		$est_zone=intval($z["TIME_ZONE"]);
	}

	$sql="select from_zip,to_zip,from_date,from_time,to_date,to_time,phase3,service_type,pickup_miles,driver_miles from  jobs where id='".$id."' limit 1;";
		
	// if($_SESSION["user_id"]=='harpreet') print("<BR>".$sql);	

	$zip=$db->query($sql)->getResultArray();

	foreach($zip as $z) {
		$from_zip=$z["from_zip"];
		$to_zip=$z["to_zip"];
		$from_date=$z["from_date"];			
		$from_time=$z["from_time"];						
		$to_date=$z["to_date"];									
		$to_time=$z["to_time"];					
		$phase3=$z["phase3"];			
					
		$service_type=$z["service_type"];			
		$pickup_miles=$z["pickup_miles"];				
		$driver_miles=$z["driver_miles"];
	}
	
		$y=substr($from_date,0,4);
		$m=substr($from_date,5,2);
		$d=substr($from_date,8,2);	
		$h=substr($from_time,0,2);
		$i=substr($from_time,3,2);	
			
		$travel_time = travel_time_new($service_type,$driver_miles);
		$pickup_time = pick_time_new($service_type,$pickup_miles);

	
		$y=substr($from_date,0,4);
		$m=substr($from_date,5,2);
		$d=substr($from_date,8,2);	
		$h=substr($from_time,0,2);
		$i=substr($from_time,3,2);	
		$ff =mktime(intval($h),intval($i),0,intval($m),intval($d),intval($y));
		
		$sql="select TIME_ZONE,h_time_zone,h_day_light from zip_codes where ZIP='".$from_zip."' limit 1 ;";
		// if($_SESSION["user_id"]=='harpreet') print("<BR>".$sql);

		$zip=$db->query($sql)->getResultArray();
	
		foreach($zip as $z) {
			$h_zone_from=intval($z["TIME_ZONE"]);					
		}
	

		$t_zone=abs(($est_zone)-($h_zone_from));
		 $ff_2=$ff + (intval($t_zone)*3600);


	
		$sql="select TIME_ZONE,h_time_zone,h_day_light from zip_codes where ZIP='".$to_zip."' limit 1 ;";
		// if($_SESSION["user_id"]=='harpreet') print("<BR>".$sql);

		$zip=$db->query($sql)->getResultArray();
	
		foreach($zip as $z) {
			$h_zone_to=intval($z["TIME_ZONE"]);					
		}	
	
		$y=substr($to_date,0,4);
		$m=substr($to_date,5,2);
		$d=substr($to_date,8,2);	
		$h=substr($to_time,0,2);
		$i=substr($to_time,3,2);	
		$tt =mktime(intval($h),intval($i),0,intval($m),intval($d),intval($y));
		
		
		// if($_SESSION["user_id"]=='harpreet') print("<BR> est time:". $est_zone);
		// if($_SESSION["user_id"]=='harpreet') print("<BR> h_zone_from:". $h_zone_from);
		// if($_SESSION["user_id"]=='harpreet') print("<BR> h_zone_to:". $h_zone_to);
						
		$t_zone=abs(($est_zone)-($h_zone_to));
		$tt_2=$tt + (intval($t_zone)*3600);

		if($phase3<5)
			$show_time=($ff_2-1800);
		else
			$show_time= ($tt_2-1800);								

		$disp_time = disp_time_new($service_type,$pickup_miles);
		$disp_date = date("Y/m/d H:i:s", $ff_2-($disp_time*60));
		// if($_SESSION["user_id"]=='harpreet')	
		// print('<br><br>Service----'.$service_type.'---'.$pickup_miles.'-----'.$driver_miles.'---------disp_time'.$disp_time."min&nbsp;&nbsp;".$disp_date);

		$sql="update jobs set show_time='".date("Y/m/d H:i",$show_time)."',disp_time='".$disp_date."',est_from='".date("Y/m/d H:i",$ff_2)."',est_to='".date("Y/m/d H:i",$tt_2)."',h_zone_from='".$h_zone_from."',h_zone_to='".$h_zone_to."' where id ='".$id."' limit 1;";
		if($_SESSION["user_id"]=='harpreet')
			$db->query($sql);
		
		// if($_SESSION["user_id"]=='harpreet') 
		// print("<script>  alert('a'); </script>");

		return true;
}

function disp_time_new($service_name,$miles)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$time=0;
	$sql="select * from disp_time_new where name ='".$service_name."' and to_miles >= '".$miles."' order by from_miles limit 1";
	$disp=$db->query($sql)->getResultArray();
	
	foreach($disp as $d) {
		$time = intval($d["min"]);
	}
	
	return $time;
}

function pick_time_new($service_name,$miles)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$time=0;
	$sql="select * from pickup_time_new where name ='".$service_name."' and to_miles >= '".$miles."' order by from_miles limit 1";
	$pickup=$db->query($sql)->getResultArray();
	
	foreach($pickup as $p) {
		$time = intval($p["min"]);
	}
	
	return $time;
}

function travel_time_new($service_name,$miles)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$time=0;
	$sql="select * from travel_time_new where name ='".$service_name."' and to_miles >= '".$miles."' order by from_miles limit 1";
	$travel=$db->query($sql)->getResultArray();
	
	foreach($travel as $t) {
		$time = intval($t["min"]);
	}
	
	return $time;
}

function save_jobs_airport($job_id,$trans_type,$zip)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$airports=array();
	
	$sql="delete  from jobs_near_airports where job_id ='".$job_id."' and trans_type ='".$trans_type."';";
	$db->query($sql);
	
	
	$sql="select * from airports_radius,airports where airports.a_code=airports_radius.a_code and ZIP_code='".$zip."' order by distance limit 0,4;";
	$travel=$db->query($sql)->getResultArray();

	$i=0;
	
	foreach($travel as $t) {
		$sql2="insert into jobs_near_airports set job_id='".$job_id."',trans_type ='".$trans_type."',airport_code='".$t["a_code"]."',airport_type='".$t["a_type"]."',distance='".$t["distance"]."',zip_code='".$t["z_code"]."';";
		$db->query($sql2);
	}

}

function get_new_id($table1,$field) 
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql= 'select max('.$field.') + 1 as f1 from '. $table1.';';
    $max_val=$db->query($sql)->getResultArray();                               
	if(empty($max_val)) 
		return '1';

	foreach($max_val as $m) {
		if ($m['f1']=='')
			return 1;
		else	
			if($table1=='drivers'){
				// dd((int)$m['f1']);
				return (int)$m['f1'];
			}
			return $m['f1'];
	}

}
function get_new_jobno2 ($year,$month,$day)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$sql1 ='select max(sr_no) as m from jobs where year1 ="'.$year.'" and month1 ="'.$month.'" and day1="'.$day.'";';

  	$temp1="100";
	$max_val=$db->query($sql1)->getResultArray();                               

	foreach($max_val as $m) {
		$temp1 =sprintf("%03d",$m['m']+1);
	}
		
	return $temp1;
}

function zip_distance($fzip,$tzip)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$miles=0;

	$sql="select  max(miles) as dr_miles from zip_code_miles where (from_zip ='".$fzip."' and to_zip ='".$tzip."');";
	$max_val=$db->query($sql)->getFirstRow();	

	if(!empty($max_val)) { 
		$miles=$max_val->dr_miles;
	}
							
	if($miles==0) {
		$sql="select  max(miles) as dr_miles from zip_code_miles where  (to_zip ='".$fzip."' and from_zip ='".$tzip."');";			  
		$max_val=$db->query($sql)->getFirstRow();	

		if(!empty($max_val)) { 
			$miles=$max_val->dr_miles;
		}
	}

	if($miles==0) {
		$sql="select  distance from airports_radius,airports where airports.a_code=airports_radius.a_code and airports.z_code= '".$fzip."' and  airports_radius.zip_code='".$tzip."';";			  
		$max_val=$db->query($sql)->getFirstRow();	

		if(!empty($max_val)) { 
			$miles=$max_val->distance;
		}
	}

	if($miles!="" ||$miles!="0")
		return number_format($miles,0,"","");
	else
		return "1";
				
}

function driver_distance_2nd($fzip,$tzip)
{
	$request = \Config\Services::request();
	$db = \Config\Database::connect();

	$miles=0;
	$sql="select  max(miles) as dr_miles from zip_code_miles where (from_zip ='".$fzip."' and to_zip ='".$tzip."');";
	$max_val=$db->query($sql)->getFirstRow();	

	if(!empty($max_val)) {  
		if($max_val->dr_miles=="")
			$miles=0;
		else
			$miles=$max_val->dr_miles;
	}

	if($miles==0) {
		$sql="select  max(miles) as dr_miles from zip_code_miles where  (to_zip ='".$fzip."' and from_zip ='".$tzip."');";			  
		$max_val=$db->query($sql)->getFirstRow();	

		if(!empty($max_val)) {  
			if($max_val->dr_miles=="")
				$miles=0;
			else
				$miles=$max_val->dr_miles;
		}
	}
						

	if($miles==0) {
		$lan1=0;
		$log1=0;
		$lan2=0;
		$log2=0;						  
							   
		$sql="select LATITUDE,LONGITUDE from zip_codes where ZIP='".$fzip."';";
		$zip=$db->query($sql)->getResultArray();
		
		foreach ($zip as $z) {
			$lan1=$z["LATITUDE"];
			$log1=$z["LONGITUDE"];					
		}
								
		$sql="select LATITUDE,LONGITUDE from zip_codes where ZIP='".$tzip."';";
		$zip=$db->query($sql)->getResultArray();
		
		foreach ($zip as $z) {
			$lan2=$z["LATITUDE"];
			$log2=$z["LONGITUDE"];					
		}				
								
		$miles = distance($lan1,$log1,$lan2,$log2,"M");
	}	
	
	return $miles;
} 

function distance($lat1, $lon1, $lat2, $lon2, $unit) 
{
	$theta = $lon1 - $lon2; 
	$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
	$dist = acos($dist); 
	$dist = rad2deg($dist); 
	$miles = $dist * 60 * 1.1515;
	$unit = strtoupper($unit);
			
	if(floatval($miles)==0) $miles=1;
			
	if ($unit == "K") {
		return ($miles * 1.609344); 
	} elseif ($unit == "N") {
		return ($miles * 0.8684);
	} else {
		return $miles + floatval((($miles*25)/100));
	}
}	


function get_new_client_no_new($branch)
{
    $start = [
        'nj' => 4001,
        'ny' => 7001,
        'online' => 2001,
        'trucking' => 9001,
        'ezwarehouse' => 5001
    ];

    $row = db()->table('clients')
        ->selectMax('account_no')
        ->where('branch', $branch)
        ->get()
        ->getRow();

    return ($row && $row->account_no)
        ? $row->account_no + 1
        : ($start[$branch] ?? 1001);
}
function get_client_code($id)
{
    if ($id === '' || $id === null) {
        return '';
    }

    $db = \Config\Database::connect();

    $row = $db->table('clients')
              ->select('account_no')
              ->where('id', $id)
              ->get()
              ->getRow();

    return $row->account_no ?? '';
}


function get_new_driver_no($name1 = null)
    {
        $db = Database::connect();

        $builder = $db->table('drivers');
        $builder->selectMax('code', 'max_code');

        $row = $builder->get()->getRow();

        return ($row && $row->max_code)
            ? ((int) $row->max_code + 1)
            : 1;
    }

	 function search_users($keyword = '', $type = '', $table = 'users')
    {
        $db = \Config\Database::connect();
        $builder = $db->table($table);

        // Get all columns dynamically
        $fields = $builder->getFieldNames();

        // Filter by type if provided
        if (!empty($type)) {
            $builder->where('type', $type);
        }

        // Search keyword across all columns
        if (!empty($keyword)) {
            $builder->groupStart();
            foreach ($fields as $index => $col) {
                if ($index === 0) {
                    $builder->like($col, $keyword);
                } else {
                    $builder->orLike($col, $keyword);
                }
            }
            $builder->groupEnd();
        }

        $query = $builder->get();
        return $query->getResultArray();
    }

	function search_data($keyword = '', $table = 'users')
{
    $db = \Config\Database::connect();
    $builder = $db->table($table);

    // ✅ Get all columns dynamically (CORRECT WAY)
    $fields = $db->getFieldNames($table);
	// dd($keyword);
    // Search keyword across all columns
    if (!empty($keyword)) {
        $builder->groupStart();
        foreach ($fields as $index => $col) {
            if ($index === 0) {
                $builder->like($col, $keyword);
            } else {
                $builder->orLike($col, $keyword);
            }
        }
        $builder->groupEnd();
    }
// dd($builder->get()->getResultArray());
    return $builder->get()->getResultArray();
}


function get_new_agent_no()
{
    $db = \Config\Database::connect();

    $row = $db->table('agents')
              ->select('MAX(code2) + 1 AS code2')
              ->get()
              ->getRowArray();

    $code = $row['code2'] ?? 0;

    return (!empty($code) && $code > 0) ? (int) $code : 101;
}


function create_apt(int $agent_id, string $code, string $agent_name)
{
    $db = \Config\Database::connect();
    $db->transStart();

    // ---------- APT DIR ----------
    $aptDirModel = new AptDirModel();
    $aptDirModel->insert([
        'name'        => $code,
        'description' => $agent_name,
    ]);
    $apt_dir_id = $aptDirModel->getInsertID();

    // ---------- APT DEFAULT ROWS ----------
    $aptModel = new AptModel();

    $vehicles = [
        ['Car', '1_Car', 10],
        ['Mini Van', '2_Mini Van', 20],
        ['Cargo Van', '3_Cargo Van', 30],
        ['Truck 12 Ft.', '4_Truck 12 Ft.', 40],
        ['Truck 18 Ft.', '5_Truck 18 Ft.', 50],
        ['Truck 24 Ft.', '6_Truck 24 Ft.', 60],
    ];

    foreach ($vehicles as $v) {
        $aptModel->insert([
            'dir_id'       => $apt_dir_id,
            'name'         => $v[0],
            'description'  => $v[1],
            'service_no'   => $v[2],
            'weight_for'   => 1,
            'weight_ran'   => 0,
            'miles_for'    => 1,
            'miles_ran'    => 0,
            'waiting_for'  => 1,
            'waiting_ran'  => 0,
            'is_county'    => 1,
        ]);
    }


    // ---------- UPDATE AGENT ----------
    $agentModel = new AgentModel();
	// dd($agent_id);
    $agentModel->update($agent_id, [
        'agent_price_code' => (string)$apt_dir_id,
    ]);

    $db->transComplete();

    if ($db->transStatus() === false) {
        throw new \RuntimeException('Failed to create APT/CPT data');
    }
}




?>