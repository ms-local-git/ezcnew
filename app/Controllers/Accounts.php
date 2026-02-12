<?php

namespace App\Controllers;

class Accounts extends BaseController
{
    public function pending_payment()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $option=$request->getPost('option');
            $invoice=$request->getPost("invoice");
            $client=$request->getPost("client");

            $client_id=get_client_id($client);

            $sql="select name from clients where id ='".$client_id."'";
            $name = $db->query($sql)->getFirstRow(); 
            
            if(!empty($name)) {
                $data['name']=$name->name;
            }
            
            $filter="";
            if($option=="all") $filter.="";
			if($option=="greater") $filter.=" and  job_chg>1";			
			if($option=="dues") $filter.=" and job_bal>0.00";			
			if($option=="excess") $filter.=" and job_bal<0.00";						
			if($invoice!="") $filter.=$filter."and invoice_no ='".$invoice."'";				
            
            $sql ="select jobs.id,job_no,reference_no,invoice_id,invoice_no,job_chg,job_bal,invoice_master.from_date,invoice_master.to_date 
			from jobs,invoice_master where invoice_master.id = jobs.invoice_id and jobs.client_id ='".$client_id."' 
			and invoice_id <>0 ".$filter." order by invoice_id limit 200";
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
            $data['client']=$client_id;
        } else {
            $data=array();
        }

        return view('accounts/pending_payment',$data);
    }

    public function holding_payment()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $option=$request->getPost('option');
            $from_client=$request->getPost('from_client');
            $to_client=$request->getPost('to_client');
            $check_no=$request->getPost('check_no');
            
            $filter="";
            if($option=="client")
				$sql="select jobs_pay_hold.*,account_no from jobs_pay_hold,clients 
                where clients.id=jobs_pay_hold.client_id and account_no >='".$from_client."' 
                and adjusted =0 and account_no <='".$to_client."'";
			else
				$sql="select jobs_pay_hold.*,account_no from jobs_pay_hold,clients 
                where clients.id=jobs_pay_hold.client_id  and adjusted =0   
                and ch_no like '".$check_no."%'";  

            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('accounts/holding_payment',$data);
    }
    
    public function bad_debt()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $option=$request->getPost('option');
            $from_client=$request->getPost('from_client');
            $to_client=$request->getPost('to_client');
            $from_invoice=$request->getPost('from_invoice');
            $to_invoice=$request->getPost('to_invoice');
            $act=$request->getPost('act');
            
            $filter="";
            if($option=="greater") $filter.="  pay_chr >=5 and ";
			if($option=="less") $filter.="  pay_chr <=5 and ";
			if($option=="all") $filter.=" ";
			
			if($act=="client")
				$sql="select job_id,account_no,name,invoice_no,job_no,reference_no,pay_chr,
                jobs_pay_rec.notes,jobs_pay_rec.user_id,jobs_pay_rec.date_time,job_chg 
                from jobs_pay_rec,clients,invoice_master,jobs where ".$filter." 
                invoice_master.id=jobs_pay_rec.invoice_id and jobs.id=jobs_pay_rec.job_id 
                and clients.id=jobs_pay_rec.client_id and trans_type ='bad_d' 
                and account_no >='".$from_client."'  and account_no <='".$to_client."' 
                order by account_no limit 200";
						
			if($act=="inv")							
				$sql="select job_id,account_no,name,invoice_no,job_no,reference_no,pay_chr,
                jobs_pay_rec.notes,jobs_pay_rec.user_id,jobs_pay_rec.date_time,job_chg 
                from jobs_pay_rec,clients,invoice_master,jobs where ".$filter." 
                invoice_master.id=jobs_pay_rec.invoice_id and jobs.id=jobs_pay_rec.job_id 
                and clients.id=jobs_pay_rec.client_id and trans_type ='bad_d' 
                and invoice_no >='".$from_invoice."'  and invoice_no <='".$to_invoice."' 
                order by account_no limit 200";

            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('accounts/bad_debt',$data);
    }
    
    public function pending_invoice()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $from_client=$request->getPost('from_client');
            $to_client=$request->getPost('to_client');
            $option=$request->getPost('option');
            $amt=$request->getPost('amt');
            $days=$request->getPost('days');
            $date=date('Y-m-d');
            $my_date=date('Y-m-d', strtotime($date.'- '.$days.' days'));
            
            $filter="";
            if($option=="all") $filter.=" and now_balance >0"; 
            if($option=="complete") $filter.=" and now_balance >=total"; 
            if($option=="partial") $filter.=" and now_balance >0  and now_balance != total";

            if($amt=="1") $filter.=" and total >1"; else $filter=" and total >=0";

            $sql ="select * from invoice_master where to_date <='".$my_date."' 
            ".$filter." and client_code >='".$from_client."'  and client_code <='".$to_client."' limit 200";

            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }

        return view('accounts/pending_invoice',$data);
    }

    public function charge_compare()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $from_date=h_sdate($request->getPost('from_date'));
            $to_date=h_sdate($request->getPost('to_date'));
            $act=$request->getPost('act');
            $ref=$request->getPost('ref');
            $bank=$request->getPost('bank');

            $filter="";
            if($act=='1')  $filter.=" and c_date>='".$from_date."' and c_date<='".$to_date."'";
            if($act=='2') $filter.=" and reference_no='".$ref."'";
            if($act=='3')  $filter.=" and gateway_trans_no='".$bank."'";

            $sql="select jobs.id as id,jobs_cc_info.id as cid,job_no, reference_no,c_date, sum(cc_amt) as cc_amt,client_price as client_price,client_id 
            from jobs,jobs_cc_info where (jobs.id = jobs_cc_info.job_id) ".$filter." group by jobs.id";
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }
        return view('accounts/charge_compare',$data);
    }

    public function payment_search()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $opt=$request->getPost('opt');
            $invoice_no=$request->getPost("invoice_no");
            $acc_no=$request->getPost("acc_no");
            $job_no=$request->getPost("job_no");
            $ref_no=$request->getPost("ref_no");
            $ch_no=$request->getPost("ch_no");

            if($opt=="job")
                $sql="select account_no,job_no,reference_no,ch_no,jobs.invoice_id as inv_id,due_chr,pay_chr,date_time,user_id,ch_amt,jobs_pay_rec.trans_type,jobs_pay_rec.notes from jobs_pay_rec,clients,jobs where jobs_pay_rec.client_id=clients.id and jobs_pay_rec.job_id=jobs.id and job_no like '".$job_no."%' order by jobs_pay_rec.id;";

            if($opt=="ref")
                $sql="select account_no,job_no,reference_no,ch_no,jobs.invoice_id as inv_id,due_chr,pay_chr,date_time,user_id,ch_amt,jobs_pay_rec.trans_type,jobs_pay_rec.notes from jobs_pay_rec,clients,jobs where jobs_pay_rec.client_id=clients.id and jobs_pay_rec.job_id=jobs.id and reference_no like '".$ref_no."%' order by jobs_pay_rec.id;";

            if($opt=="che")
                $sql="select account_no,job_no,reference_no,ch_no,jobs.invoice_id as inv_id,due_chr,pay_chr,date_time,user_id,ch_amt,jobs_pay_rec.trans_type,jobs_pay_rec.notes from jobs_pay_rec,clients,jobs where jobs_pay_rec.client_id=clients.id and jobs_pay_rec.job_id=jobs.id and ch_no like '".$ch_no."%' order by jobs_pay_rec.id;";

            if($opt=="inv")
                $sql="select account_no,job_no,reference_no,ch_no,jobs.invoice_id as inv_id,due_chr,pay_chr,date_time,user_id,ch_amt,jobs_pay_rec.trans_type,jobs_pay_rec.notes from jobs_pay_rec,clients,jobs,invoice_master where jobs.invoice_id=invoice_master.id and jobs_pay_rec.client_id=clients.id and jobs_pay_rec.job_id=jobs.id and invoice_no like '".$invoice_no."%' order by jobs_pay_rec.id;";										

            if($opt=="acc")
                $sql="select account_no,job_no,reference_no,jobs.invoice_id as inv_id,ch_no,due_chr,pay_chr,date_time,user_id,ch_amt,jobs_pay_rec.trans_type,jobs_pay_rec.notes from jobs_pay_rec,clients,jobs where jobs_pay_rec.client_id=clients.id and jobs_pay_rec.job_id=jobs.id and account_no like '".$acc_no."%' order by jobs_pay_rec.id;";
                
            $reports = $db->query($sql)->getResultArray(); 
            $data['reports']=$reports;
        } else {
            $data=array();
        }
        return view('accounts/payment_search',$data);
    }
}