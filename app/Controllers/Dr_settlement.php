<?php

namespace App\Controllers;

class Dr_settlement extends BaseController
{

	public function pending_settlement()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!="") {
			$to_date=h_sdate($request->getPost('to_date'));
            $code=$request->getPost('code');
            
            $filter="";
            if($code!="") $filter.="and drivers.code='".$code."'";

            $sql1 ="select jobs.id,job_no,code,first_name,reference_no,from_address1,from_city,
            from_zip,to_address1,to_city,to_zip,paper_submitted,tolls_parks, dr_datetime, 
            (base_chr+fuel_chr+weight_chr +pwaiting_chr +dwaiting_chr+other1_chr+other2_chr +other3_chr +other4_chr+tolls_parks ) as tot from driver_invoice,jobs,drivers, jobs_drivers 
            where drivers.id = driver_invoice.driver_id and jobs.id=driver_invoice.job_id 
            and jobs_drivers.dr_invoice_id = driver_invoice.id and driver_invoice.charges_approved=1 
            and driver_invoice.settlement_done=0 
            and date_format(dr_datetime,'%y%m/%d')<= '".$to_date."' ".$filter."
            order by code, job_no;";
            $reports = $db->query($sql1)->getResultArray(); 

		    $data["reports"]=$reports;
        } else {
            $data=array();
        }
        // print_r($data);die;
		return view('dr_settlement/pending_settlement',$data);
	}

    public function pending_charges_approval()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $to_date=h_sdate($request->getPost('to_date'));
            $code=$request->getPost('code');
            $type = $request->getPost('submit_type');
            
            $filter="";
            if($code!="") $filter.="and drivers.code='".$code."'";
            if($type=='all') $filter.="";
            if($type=='greater') $filter.=" and (base_chr+fuel_chr+weight_chr +pwaiting_chr +dwaiting_chr+other1_chr+other2_chr +other3_chr +other4_chr+tolls_parks ) >=1";

            $sql="select jobs.id,job_no,code,first_name,reference_no,from_address1,from_city,
            from_zip,to_address1,to_city,to_zip,paper_submitted,tolls_parks, dr_datetime, 
            (base_chr+fuel_chr+weight_chr +pwaiting_chr +dwaiting_chr+other1_chr+other2_chr +other3_chr +other4_chr+tolls_parks ) as tot 
            from driver_invoice,jobs,drivers, jobs_drivers 
            where drivers.id = driver_invoice.driver_id and jobs.id=driver_invoice.job_id 
            and jobs_drivers.dr_invoice_id =driver_invoice.id 
            and driver_invoice.charges_approved=0 ".$filter." 
            and date_format(dr_datetime,'%y%m/%d')<= '".$to_date."' order by code limit 100";
			// die($sql);
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
		} else {
			$data=array();
		}

        return view('/dr_settlement/pending_charges_approval',$data);
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
    
	public function check_manage()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$search=h_sdate($request->getPost('search'));
        if(empty($search)) {
            $search=h_sdate($request->getPostGet('search'));
        }

        if($search!="") {
            $data['search'] = $search;

            $sql ="select code, first_name,driver_settlements.* 
            from driver_settlements, drivers where drivers.id= driver_settlements.driver_id 
            and settlement_amt >.99 and settlement_date <='".$search."' 
            and is_check_done=0 and is_bd_done=1 order by code";
        
            $reports = $db->query($sql)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }

		return view('dr_settlement/check_manage',$data);

	}

    public function check_manage_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        // print_r($sql_data);die;
        $vehicle_count = $sql_data['check_count'];
        for ($i=1; $i <= $vehicle_count; $i++) { 
            if($sql_data["chk_amt".$i]!="" && $sql_data["chk_no".$i]!="") {
                $data['chk_amt'] = $sql_data['chk_amt'.$i];
                $data['chk_no'] = $sql_data['chk_no'.$i];
                $data['check_user_id'] = $_SESSION['user_id'];
                $data['check_date_time'] = date("Y/m/d H:i:s");
                $data['is_check_done'] = '1';
                $db->table('driver_settlements')->where('id',$sql_data["sett_id".$i])->update($data);
            }
        }
        $session->setFlashdata('msg','Check Information Successfully Saved');
        return redirect()->to(base_url().'/dr_settlement/check_manage');
    }
    
	public function bonus_deduction()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$search=h_sdate($request->getPost('search'));
        if(empty($search)) {
            $search=h_sdate($request->getPostGet('search'));
        }

        if($search!="") {
            $data['search'] = $search;

            $sql ="select code, first_name,driver_settlements.* 
            from driver_settlements, drivers where drivers.id= driver_settlements.driver_id 
            and settlement_amt >.99 and settlement_date <='".$search."' 
            and is_bd_done=0 order by code limit 100";
        
            $reports = $db->query($sql)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }

		return view('dr_settlement/bonus_deduction',$data);

	}

    public function bonus_deduction_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        $vehicle_count = $sql_data['check_count'];
        for ($i=1; $i <= $vehicle_count; $i++) { 
            if($sql_data["bonus".$i]!="" && $sql_data["ded".$i]!="") {
                $sql="select settlement_amt from driver_settlements 
                where id='".$sql_data["sett_id".$i]."' and is_bd_done=0;";
                $reports = $db->query($sql)->getResultArray(); 
                foreach ($reports as $r) {
                    $s_tot=floatval($r["settlement_amt"]);
                    $deduction=floatval($sql_data["ded".$i]);
                    $bonus=floatval($sql_data["bonus".$i]);												
                    $total=(($s_tot+$bonus)-$deduction);
                    $data['deduction'] = $deduction;
                    $data['bonus'] = $bonus;
                    $data['total'] = $total;
                    $data['bon_remarks'] = $sql_data['bon_remarks'.$i];
                    $data['ded_remarks'] = $sql_data['ded_remarks'.$i];
                    $data['bd_user_id'] = $_SESSION['user_id'];
                    $data['bd_date_time'] = date("Y/m/d H:i:s");
                    $data['is_bd_done'] = '1';
                    $db->table('driver_settlements')->where('id',$sql_data["sett_id".$i])->update($data);
                }
            }
        }
        $session->setFlashdata('msg','Bonus Deduction Information Successfully Saved');
        return redirect()->to(base_url().'/dr_settlement/bonus_deduction');
    }

    public function browse() 
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if(!empty($request->getPost())) {
            $search=$request->getPost('search');
            $type = $request->getPost('submit_type');
            
            $filter="";
            if($type=="driver") $filter.="and code like '".$search."'";
            if($type=="settle_no") $filter.="and settlement_no like '".$search."'";
            if($type=="settle_date") $filter.="and settlement_date='".h_sdate($search)."'";
            if($type=="check") $filter.="and chk_no like '".$search."'";

            $sql="select driver_settlements.id,settlement_group,driver_settlements.driver_id,code,first_name,last_name,group_time.group_name,settlement_date,chk_no,chk_amt,bd_user_id,check_user_id, bonus, deduction, settlement_no, settlement_amt 
            from drivers,group_time, driver_settlements where 
            drivers.id = driver_settlements.driver_id ".$filter." and group_time.id = drivers.d_group";
			// die($sql);
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
		} else {
			$data=array();
		}

        print_r($data);

        return view('/dr_settlement/browse',$data);
    }

    public function check_modify()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $search=$request->getPost('search');
            $type = $request->getPost('submit_type');
            
            $filter="";
            if($type=="driver") $filter.="and code like '".$search."'";
            if($type=="settle_no") $filter.="and settlement_no like '".$search."'";
            if($type=="check") $filter.="and chk_no like '".$search."'";

            $sql ="select driver_settlements.id,total,code,first_name,last_name,settlement_no,settlement_date,chk_no,chk_amt 
            from driver_settlements,drivers where driver_settlements.driver_id =drivers.id ".$filter."  
            and  is_check_done=1 order by code,settlement_no";
        
            $reports = $db->query($sql)->getResultArray(); 
            
            $data["reports"]=$reports;
        } else {
            $data=array();
        }

		return view('dr_settlement/check_modify',$data);
    }
    
    public function check_modify_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        $vehicle_count = $sql_data['check_count'];
        for ($i=1; $i <= $vehicle_count; $i++) { 
            // if($sql_data["check_no_".$i]!="" || $sql_data["check_amt_".$i]!="") {
                $data['chk_no'] = $sql_data['chk_no_'.$i];
                $data['chk_amt'] = $sql_data['chk_amt_'.$i];
                $db->table('driver_settlements')->where('id',$sql_data["act_id_".$i])->update($data);
            // }
        }
        $session->setFlashdata('msg','Check Information Successfully Updated');
        return redirect()->to(base_url().'/dr_settlement/bonus_deduction');
    }
}
