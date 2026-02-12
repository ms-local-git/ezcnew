<?php

namespace App\Controllers;
use App\Models\CcnotesModel;

class Credit_cards extends BaseController
{
	public function index()
	{
		return view('clients/listing');
	}

	public function notes_listing()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql="select distinct done_by from cc_notes where done_by is not null order by done_by";
        $done_by = $db->query($sql)->getResultArray(); 
		$data['done_by']=$done_by;

        $sql="select distinct user_id from cc_notes order by user_id";
        $req_by = $db->query($sql)->getResultArray(); 
		$data['req_by']=$req_by;

		if(!empty($request->getPost())) {
			$from_date=h_sdate($request->getPost('from_date'));
			$to_date=h_sdate($request->getPost('to_date'));
			$type=$request->getPost('type');
			$job_no=$request->getPost('job_no');
			$ref_no=$request->getPost('ref_no');
			$amount=$request->getPost('amount');
			$done_by=$request->getPost('done_by');
			$req_by=$request->getPost('req_by');

			$filter="";
			if ($type!="All") $filter .=' and act_type="'.$type.'"';
			if ($job_no!="") $filter .=' and job_no like "'.$job_no.'"';
            if ($ref_no!="") $filter .=" and reference_no like '".$ref_no."'";
            if ($amount!="") $filter .=" and amount >=  '".$amount."'";
            if ($done_by!="All") $filter .=" and done_by = '".$done_by."'";	
            if ($req_by!="All") $filter .=" and user_id = '".$req_by."'";	

            $sql="select * from cc_notes where date_time >='".$from_date."' 
			and date_time <= '".$to_date."'".$filter." limit 100";

            // die($sql);
            
			$reports = $db->query($sql)->getResultArray();
			
			$data["reports"]=$reports;
		}

		// print_r($data);die;

		return view('credit_cards/notes_list',$data);

	}

	public function pay_report()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql="select distinct done_by from cc_notes order by user_id";
        $done_by = $db->query($sql)->getResultArray(); 
		$data['done_by']=$done_by;

		if($request->getPost()!=null) {
			$from_date=h_sdate($request->getPost('from_date'));
			$to_date=h_sdate($request->getPost('to_date'));
			$ref_no=$request->getPost('ref_no');
			$amount=$request->getPost('amount');
			$done_by=$request->getPost('done_by');

			$filter="";
            if ($ref_no!="") $filter .=" and job_id like '".$ref_no."'";
            if ($amount!="") $filter .=" and cc_amt >=  '".$amount."'";
            if ($done_by!="") $filter .=" and user_id = '".$done_by."'";	

            $sql="select jobs_cc_info.*,jobs.job_no,jobs.reference_no from jobs_cc_info,jobs 
			where jobs_cc_info.job_id=jobs.id and date_format(date_time,'%Y/%m/%d') >='".$from_date."' 
			and date_format(date_time,'%Y/%m/%d') <= '".$to_date."'".$filter." limit 100";

            // die($sql);
            
			$reports = $db->query($sql)->getResultArray();
			
			$data["reports"]=$reports;
		}

		// print_r($data);die;

		return view('credit_cards/pay_report',$data);

	}

	public function online_charges()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$from_date=h_sdate($request->getPost('from_date'));
		$to_date=$request->getPost('to_date');
		$from_client=$request->getPost('from_client');
		$to_client=$request->getPost('to_client');
		$greater=$request->getPost('greater');

		if($request->getPost()!=null) {
			$filter="";
			if($from_client!="") $filter.=" and clients.account_no >='".$from_client."'";
			if($to_client!="") $filter.=" and clients.account_no <='".$to_client."'";
			if($greater!="") $filter.=" and online_charges >='".$greater."'";
			if($to_date	!="") {
				$filter.=" and c_date <='".$to_date."'";
			} else { 
				$filter.=" and c_date <= ADDDATE('".$from_date."', 6)";
			}
						  
			$sql="select jobs.id,job_no,c_date,reference_no,clients.account_no,from_name,
			(base_chr+fuel_chr+weight_chr+pwaiting_chr+dwaiting_chr+weekend_chr+other1_chr+other2_chr+other3_chr+other4_chr) as tot,
			from_address1,from_city,from_state,from_zip,to_address1,to_name,to_city,to_state,
			to_zip,insurance_cost,additional_service,online_charges 
			from jobs,clients,client_invoice where jobs.client_id =clients.id and jobs.id=client_invoice.job_id
			and c_date >='".$from_date."'  ".$filter."  limit 100";
			// die($sql);
			$reports = $db->query($sql)->getResultArray();
			
			$data["reports"]=$reports;
		} else {
			$data=array();
		}
		return view("credit_cards/online_charges",$data);
	}

	public function credit_card_list()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if($request->getPost()!=null) {
			$search=$request->getPost('search');
			
			$filter="";
			if($search!="all") $filter.=" and credit_card >='".$search."'";
			
			$sql="select * from credit_card where 1 ".$filter;
			$reports = $db->query($sql)->getResultArray();
				
			$data["reports"]=$reports;
		} else {
			$data = array();
		}
		
		return view("credit_cards/credit_card_list",$data);
	}

	public function add_cc()
	{
		return view("credit_cards/add_cc");
	}

	public function save_cc()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data = $request->getPost();

		$db->table('credit_card')->insert($sql_data);

		return redirect()->to(base_url().'/credit_cards/credit_card_list');
	}

	public function add()
	{   
		$db = \Config\Database::connect();
		return view('credit_cards/ccnotes');
	}


    public function create()
	{   
		$user = new CcnotesModel();
        
		$job_id 	   = 	$this->request->getVar('job_id');
		$job_no        = 	$this->request->getVar('job_no');
		// $refund 	   = 	$this->request->getVar('refund');
		$notes 	       = 	$this->request->getVar('notes');
		$amount        = 	$this->request->getVar('amount');
		$done_amount   = 	$this->request->getVar('done_amount');
				
			$data = array
			(   
				'job_id'        => $job_id,
				'job_no' 		=> $job_no,
				// 'refund' 	    => $refund,
				'notes' 		=> $notes,
				'amount'	    => $amount,
				'done_amount'   => $done_amount
			);
			// print_r($data);die;
			$user->save($data);
			return redirect()->to(base_url('credit_cards/notes_listing'));

	}

}
