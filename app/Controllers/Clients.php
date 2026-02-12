<?php

namespace App\Controllers;

use App\Models\ClientsModel;
use App\Models\ClientsCardModel;
use App\Models\CptDirModel;
use App\Models\CptModel;
use App\Models\UserModel;

class Clients extends BaseController
{
	public function __construct() {}

	public function index()
	{
		permission_check('client_list');

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
		$data = [];
		if ($request->getVar('search-keyword')) {
			$keyword = $request->getVar('search-keyword');
			// dd($keyword);
			$data["clients"] = search_data($keyword, 'clients');
		}
		$session = \Config\Services::session();
		// dd($data);
		return view('clients/listing', $data);
	}

	public function get_listing()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();



		$search = h_safe_sql($request->getPost('search'));
		// dd($search);
		$company_name = $request->getPost('company_name');
		$city = $request->getPost('city');
		$email = $request->getPost('email');
		$phone = $request->getPost('phone');
		$c_billing = $request->getPost('c_billing');
		$status = $request->getPost('show_status');

		$searchConditions = [];

		if ($company_name != "") {
			$searchConditions[] = 'name like "%' . $search . '%"';
		}
		if ($city != "") {
			$searchConditions[] = 'city like "%' . $search . '%"';
		}
		if ($email != "") {
			$searchConditions[] = 'email like "%' . $search . '%"';
		}
		if ($phone != "") {
			$searchConditions[] = 'phone1 like "%' . $search . '%"';
		}

		// If no checkbox is selected, use broad default search across common fields.
		if (empty($searchConditions)) {
			$searchConditions = [
				'name like "%' . $search . '%"',
				'city like "%' . $search . '%"',
				'email like "%' . $search . '%"',
				'phone1 like "%' . $search . '%"'
			];
		}

		$filter = ' and (' . implode(' or ', $searchConditions) . ')';

		if ($c_billing != "") {
			$filter .= ' and billing_method="' . $c_billing . '"';
		}

		if ($status == 'active') {
			$filter .= ' and status ="1"';
		}
		if ($status == 'inactive') {
			$filter .= ' and status ="0"';
		}

		$sql1 = 'select * from clients where 1 ' . $filter . ' order by name limit 100;';
		$clients = $db->query($sql1)->getResultArray();
		// die($sql1);
		$data["clients"] = $clients;

		return view('clients/listing', $data);
	}

	public function inactive_clients()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql1 = 'select * from clients where status ="0"  order by Name';
		$clients = $db->query($sql1)->getResultArray();

		$data["clients"] = $clients;
		return view('clients/inactive_clients', $data);
	}

	public function client_activity()
	{
		return view('clients/client_activity');
	}

	public function client_activity_search()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if (!empty($request->getPost())) {
			$from_client = $request->getPost('from_client');
			$to_client = $request->getPost('to_client');
			$days = $request->getPost('days');

			$filter = "";
			$filter .= "and account_no >='" . $from_client . "'";
			$filter .= "and account_no <='" . $to_client . "'";

			if (!empty($days)) {
				$from_date = date('Y/m/d', strtotime("-" . $days . " days"));
				$check = $request->getPost('job');
				if ($check == 'not') {
					$filter .= "group by account_no HAVING max(date_format(c_date,'%Y/%m/%d')) < '" . $from_date . "'";
				} elseif ($check == 'job') {
					$filter .= "group by account_no HAVING max(date_format(c_date,'%Y/%m/%d')) >= '" . $from_date . "'";
				} else {
					$filter .= "group by account_no";
				}
			} else {
				$filter .= "group by account_no";
			}

			$sql = "select account_no,name,count(*) as no_jobs,max(date_format(c_date,'%Y/%m/%d')) as job_date 
			from jobs,clients 
			where jobs.client_id =clients.id and client_price>=1 " . $filter . " Limit 100";

			$reports = $db->query($sql)->getResultArray();
			// echo $db->getLastQuery();
			$data["reports"] = $reports;
		} else {
			$data = array();
		}
		// die;
		return view('clients/client_activity', $data);
	}


	public function charges_report()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if (!empty($request->getPost())) {
			$from_date = h_sdate($request->getPost('from_date'));
			$to_date = h_sdate($request->getPost('to_date'));
			$from_client = $request->getPost('from_client');
			$to_client = $request->getPost('to_client');
			$amount = $request->getPost('amount');

			$filter = "";
			if ($amount == "l10")  $filter .= ' and phase3 <=10';
			if ($amount == "g10")  $filter .= ' and phase3 >=10';
			if ($from_client != "") $filter .= ' and clients.account_no>=' . $from_client;
			if ($to_client != "") $filter .= ' and clients.account_no<=' . $to_client;

			$sql1 = "select jobs.id as job_id,(base_chr+fuel_chr+weight_chr+pwaiting_chr+dwaiting_chr+weekend_chr+other1_chr+other2_chr+other3_chr+other4_chr) as tot,job_no,account_no,reference_no,c_date,c_time,
			from_name,from_address1,from_city,to_name,to_address1,to_city,client_price,driver_price,pod,de_dep_dt,client_invoice.* 
			from jobs,clients,client_invoice
			where jobs.id=client_invoice.job_id and clients.id=client_invoice.client_id 
			and jobs.client_id=clients.id and from_date >='" . $from_date . "' 
			and from_date <= '" . $to_date . "'" . $filter . " Limit 100";
			$reports = $db->query($sql1)->getResultArray();

			// print_r($reports);
			// die($sql1);

			$data["reports"] = $reports;
		} else {
			$data = array();
		}

		return view('clients/charges_report', $data);
	}


	public function clients_pod_report()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if (!empty($request->getPost())) {
			$from_date = h_sdate($request->getPost('from_date'));
			$to_date = h_sdate($request->getPost('to_date'));
			$client = $request->getPost('client');

			$filter = "";
			if ($client != "") $filter .= ' and account_no>=' . $client;
			if ($from_date != "") $filter .= " and date_format(jobs.from_date,'%Y/%m/%d') >='" . $from_date . "'";
			if ($from_date != "") $filter .= " and date_format(jobs.from_date,'%Y/%m/%d') <='" . $to_date . "'";

			$sql = "select jobs.job_no, drivers.code, jobs.id, reference_no, from_address1,from_city,from_name, from_state, from_zip, to_address1, to_city,to_name, to_state, to_zip, pod 
			from clients, jobs, jobs_drivers, drivers where clients.id =jobs.client_id 
			and jobs_drivers.driver_id=drivers.id 
			and jobs_drivers.job_id=jobs.id " . $filter . " Limit 100";

			$reports = $db->query($sql)->getResultArray();

			// print_r($reports);

			$data["reports"] = $reports;
		} else {
			$data = array();
		}

		// print_r($data);die;

		return view('clients/clients_pod_report', $data);
	}

	public function missing_charges()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if (!empty($request->getPost())) {
			$to_date = h_sdate($request->getPost('to_date'));
			$dr_charges = $request->getPost('dr_charges');

			$filter = "";
			if (isset($dr_charges)) {
				if ($dr_charges == '1') $filter .= 'and (d_price_done=1 and driver_price>0)';
			} else {
				$filter .= 'and (d_price_done=0 or driver_price=0)';
			}

			$sql1 = "select jobs.id as jb_id,agent_price,date_format(jobs.pod_date,'%Y/%m/%d') 
			as po,c_date,c_time,client_id,account_no,name,count(*) as cnt 
			from jobs,clients where clients.id=jobs.client_id and jobs.phase3 >= 10 
			and date_format(jobs.pod_date,'%Y/%m/%d')  <= '" . $to_date . "' " . $filter . " 
			and (c_price_done=0 or client_price=0) group by date_format(jobs.pod_date,'%Y/%m/%d'),client_id";

			$reports = $db->query($sql1)->getResultArray();

			// print_r($reports);
			// die($sql1);

			$data["reports"] = $reports;
		} else {
			$data = array();
		}

		return view('clients/missing_charges', $data);
	}



	public function addclient()
	{
		permission_check('client_add');

		return view('clients/client_add');
	}



	public function createclient()
	{
		permission_check('client_add');



		helper('fun');
		$rules = [
			'login_id'       => 'required|min_length[4]|is_unique[users.user_id]',
			'password'       => 'required|min_length[6]',
			// BASIC INFO
			'name'            => 'required|min_length[3]',
			'branch'          => 'required|in_list[online,nj,ezwarehouse,ny,trucking]',
			'client_group'    => 'required|in_list[A,B,C]',
			'status'          => 'required|in_list[0,1]',

			// CONTACT
			'phone1'          => 'required|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',
			'phone2'          => 'permit_empty|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',
			'emer_phone'      => 'permit_empty|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',
			'fax'             => 'permit_empty',

			// ADDRESS
			'street'          => 'required',
			'country'         => 'required',
			'state'           => 'required',
			'city'            => 'required',
			'zip'             => 'required|numeric',

			// PEOPLE
			'attention'       => 'required',
			'caller_person'   => 'required',

			// WEB
			'website'         => 'required|valid_url_strict',
			'email'           => 'required|valid_email',
			'invoice_email'   => 'permit_empty|valid_email',

			// FINANCE
			'doj'             => 'required|valid_date',
			'opening_balance' => 'required|decimal',
			'credit_limit'    => 'required|decimal',
			'special_discount' => 'required|decimal',
			'int_rate_30'     => 'required|decimal',
			'int_rate_60'     => 'required|decimal',
			'int_rate_90'     => 'required|decimal',
			'priority'        => 'required|greater_than_equal_to[1]|less_than_equal_to[10]',
			'billing_method'  => 'required|in_list[daily,weekly]',

			// FLAGS
			'service_type_required' => 'required|in_list[0,1]',
			'is_wh_sr'              => 'required|in_list[0,1]',
		];

		if (! $this->validate($rules)) {

			return redirect()->back()
				->withInput()
				->with('errors', $this->validator->getErrors());
		}



		$clientsModel = new ClientsModel();
		$cardModel    = new ClientsCardModel();
		$cptDirModel  = new CptDirModel();
		$cptModel     = new CptModel();

		$db = \Config\Database::connect();
		$db->transStart();

		$userModel = new UserModel();

		$userModel->createUser([
			'user_name'       => $this->request->getPost('name'),
			'user_id'       => $this->request->getPost('login_id'),
			'user_password' => $this->request->getPost('password'),
			'role_id'       => 4,
		]);
		$account_no = get_new_client_no_new($this->request->getVar('branch'));

		$cpt_dir_id = get_new_id('cpt_dir', 'id');

		$cptDirModel->insert([
			'id' => $cpt_dir_id,
			'name' => $account_no,
			'description' => 'For Account ' . $account_no
		]);

		$cptEntries = [
			['name' => 'CAR', 'description' => '1_car_rates'],
			['name' => 'Mini Van', 'description' => '2_Mini_Van rates'],
			['name' => 'Cargo Van', 'description' => '3_Cargo Van rates'],
			['name' => 'Truck', 'description' => '4_Truck_rates'],
			['name' => 'Truck With lift', 'description' => '5_Truck With lift rates'],
			['name' => 'Trailer', 'description' => '6_Trailer']
		];

		foreach ($cptEntries as $e) {
			$e['id']     = get_new_id('cpt', 'id');
			$e['dir_id'] = $cpt_dir_id;
			$cptModel->insert($e);
		}

		// CLIENT
		$data = $this->request->getPost();
		$data['account_no'] = get_new_client_account();
		$acc_no = $data['account_no'];
		// dd($get_new_client_account);
		$clientId = $clientsModel->insertClient($data);

		// CARDS
		$cards = [];

		foreach ($this->request->getVar('card_num') ?? [] as $k => $no) {
			$cards[] = [
				'card_type'      => $this->request->getVar('card_type')[$k] ?? null,
				'card_no'        => $no,
				'card_exp_month' => $this->request->getVar('card_exp_month')[$k] ?? null,
				'card_exp_year'  => $this->request->getVar('card_exp_year')[$k] ?? null,
				'card_cvv2_code' => $this->request->getVar('card_cvv2_code')[$k] ?? null,
			];
		}

		$cardModel->insertCards($acc_no, $cards);

		$db->transComplete();

		return redirect()->to(base_url('clients'))
			->with('success', 'Client created successfully.');
	}


	// public function createclient()
	// {   
	// 	helper('fun');
	// 	$account_no = get_new_client_account();

	// 	$branch 	= 	$this->request->getVar('branch');
	// 	$group 		    = 	$this->request->getVar('client_group');
	// 	$status 		= 	$this->request->getVar('status');
	// 	$attention 	    = 	$this->request->getVar('attention');
	// 	$phone1         = 	$this->request->getVar('phone1');
	// 	$phone2         = 	$this->request->getVar('phone2');
	// 	$name           = 	$this->request->getVar('name');
	// 	$caller_person  = 	$this->request->getVar('caller_person');
	// 	$fax            = 	$this->request->getVar('fax');
	// 	$street         = 	$this->request->getVar('street');
	// 	$emer_name      = 	$this->request->getVar('emer_name');
	// 	$city           = 	$this->request->getVar('city');
	// 	$emer_phone     = 	$this->request->getVar('emer_phone');
	// 	$zip            = 	$this->request->getVar('zip');
	// 	$status         = 	$this->request->getVar('status');
	// 	$country        = 	$this->request->getVar('country');
	// 	$website        = 	$this->request->getVar('website');
	// 	$email          = 	$this->request->getVar('email');
	// 	$login_id       = 	$this->request->getVar('login_id');
	// 	$password       = 	$this->request->getVar('password');
	// 	$invoice_email  = 	$this->request->getVar('invoice_email');
	// 	$remarks        = 	$this->request->getVar('remarks');
	// 	$remarks_2      = 	$this->request->getVar('remarks_2');
	// 	$doj            = 	$this->request->getVar('doj');
	// 	$opening_balance_date     = 	$this->request->getVar('opening_balance_date');
	// 	$credit_limit     = 	$this->request->getVar('credit_limit');
	// 	$opening_balance     = 	$this->request->getVar('opening_balance');
	// 	$special_discount     = 	$this->request->getVar('special_discount');
	// 	$int_rate_30     = 	$this->request->getVar('int_rate_30');
	// 	$referencer_required     = 	$this->request->getVar('referencer_required');
	// 	$int_rate_60     = 	$this->request->getVar('int_rate_60');
	// 	$priority     = 	$this->request->getVar('priority');
	// 	$int_rate_90     = 	$this->request->getVar('int_rate_90');
	// 	$billing_method     = 	$this->request->getVar('billing_method');
	// 	$quality_window     = 	$this->request->getVar('quality_window');
	// 	$p_coverpage     = 	$this->request->getVar('p_coverpage');
	// 	$p_long          = 	$this->request->getVar('p_long');
	// 	$p_ref_sum       = 	$this->request->getVar('p_ref_sum');
	// 	$a_email_job     = 	$this->request->getVar('a_email_job');
	// 	$af_del_time     = 	$this->request->getVar('af_del_time');
	// 	$a_fax_pod       = 	$this->request->getVar('a_fax_pod');
	// 	$af_sent_ch      = 	$this->request->getVar('af_sent_ch');
	// 	$brd_time        = 	$this->request->getVar('brd_time');
	// 	$a_fax_job  = 	$this->request->getVar('a_fax_job');
	// 	$a_fax_del     = 	$this->request->getVar('a_fax_del');

	// 	$a_fax_pod     = 	$this->request->getVar('a_fax_pod');
	// 	$a_fax_ch     = 	$this->request->getVar('a_fax_ch');
	// 	$web_alert     = 	$this->request->getVar('web_alert');
	// 	$auto_alert     = 	$this->request->getVar('auto_alert');
	// 	$airport1     = 	$this->request->getVar('airport1');
	// 	$airport_miles1     = 	$this->request->getVar('airport_miles1');
	// 	$airport2     = 	$this->request->getVar('airport2');
	// 	$airport_miles2     = 	$this->request->getVar('airport_miles2');
	// 	$airport3     = 	$this->request->getVar('airport3');
	// 	$airport_miles3     = 	$this->request->getVar('airport_miles3');
	// 	$sales_person1     = 	$this->request->getVar('sales_person1');
	// 	$sales_person2     = 	$this->request->getVar('sales_person2');
	// 	$sales_person3     = 	$this->request->getVar('sales_person3');
	// 	$sales_person4     = 	$this->request->getVar('sales_person4');
	// 	$cc_accept     = 	$this->request->getVar('cc_accept');
	// 	$cc_auto_pay     = 	$this->request->getVar('cc_auto_pay');
	// 	$card_name     = 	$this->request->getVar('card_name');
	// 	$card_no     = 	$this->request->getVar('card_no');
	// 	$card_address     = 	$this->request->getVar('card_address');
	// 	$card_city     = 	$this->request->getVar('card_city');
	// 	$card_state     = 	$this->request->getVar('card_state');
	// 	$card_phone     = 	$this->request->getVar('card_phone');
	// 		$data = array
	// 		(   
	// 			'account_no'	=> $account_no,
	// 			'branch'                   => $branch,
	// 			'client_group' 		            => $group,
	// 			'status' 				    => $status,
	// 			'attention' 				=> $attention,
	// 			'phone1'			        => $phone1,
	// 			'phone2' 		            => $phone2,
	// 			'name' 		=> $name,
	// 			'caller_person' 		=> $caller_person,
	// 			'service_type_required' 		=> $service_type_required,
	// 			'fax' 		=> $fax,
	// 			'street' 		    => $street,
	// 			'emer_name' 		=> $emer_name,
	// 			'city' 		=> $city,
	// 			'emer_phone' 		=> $emer_phone,
	// 			'zip' 		=> $zip,
	// 			'status'                   => $status,
	// 			'country' 		            => $country,
	// 			'website' 				    => $website,
	// 			'email' 				=> $email,
	// 			'login_id'			        => $login_id,
	// 			'password' 		            => $password,
	// 			'invoice_email' 		=> $invoice_email,
	// 			'remarks' 		=> $remarks,
	// 			'remarks_2' 		=> $remarks_2,
	// 			'doj' 		    => $doj,
	// 			'opening_balance_date' 		=> $opening_balance_date,
	// 			'credit_limit' 		=> $credit_limit,
	// 			'opening_balance' 		=> $opening_balance,
	// 			'special_discount' 		=> $special_discount,
	// 			'int_rate_30' 		=> $int_rate_30,
	// 			'referencer_required' 		=> $referencer_required,
	// 			'int_rate_60' 		=> $int_rate_60,
	// 			'priority' 		=> $priority,
	// 			'int_rate_90' 		=> $int_rate_90,
	// 			'billing_method' 		=> $billing_method,
	// 			'quality_window' 		=> $quality_window,
	// 			'p_coverpage' 		=> $p_coverpage,
	// 			'p_long' 		=> $p_long,
	// 			'p_ref_sum' 		=> $p_ref_sum,
	// 			'a_email_job' 		=> $a_email_job,
	// 			'af_del_time' 		=> $af_del_time,
	// 			'a_fax_pod' 		=> $a_fax_pod,
	// 			'af_del_time' 		=> $af_del_time,
	// 			'brd_time' 		=> $brd_time,
	// 			'a_fax_job' 		=> $a_fax_job,
	// 			'a_fax_del' 		=> $a_fax_del,
	// 			'a_fax_pod' 		=> $a_fax_pod,
	// 			'a_fax_ch' 		=> $a_fax_ch,
	// 			'web_alert' 		=> $web_alert,
	// 			'auto_alert' 		=> $auto_alert,
	// 			'airport1' 		=> $airport1,
	// 			'airport_miles1' 		=> $airport_miles1,
	// 			'airport2' 		=> $airport2,
	// 			'airport_miles2' 		=> $airport_miles2,
	// 			'airport3' 		=> $airport3,
	// 			'airport_miles3' 		=> $airport_miles3,
	// 			'sales_person1' 		=> $sales_person1,
	// 			'sales_person2' 		=> $sales_person2,
	// 			'sales_person3' 		=> $sales_person3,
	// 			'sales_person4' 		=> $sales_person4,
	// 			'cc_accept' 		=> $cc_accept,
	// 			'cc_auto_pay' 		=> $cc_auto_pay,
	// 			'card_name' 		=> $card_name,
	// 			'card_no' 		=> $card_no,
	// 			'card_address' 		=> $card_address,
	// 			'card_city' 		=> $card_city,
	// 			'card_state' 		=> $card_state,
	// 			'card_phone' 		=> $card_phone
	// 		);
	// 		// print_r($data);
	// 		$db = \Config\Database::connect();
	// 		$builder = $db->table('clients');
	// 		$builder->insert($data);
	// 		return redirect()->to(base_url('clients'));

	// }

	// 	public function createclient()
	// {
	//     helper('fun');
	// 	//  helper('db_simple');

	// 	 $db = \Config\Database::connect();

	//     // ================== CPT_DIR & CPT TABLES ==================
	//     $c_acc_no = get_new_client_no_new($this->request->getVar('branch'));

	//     $cpt_dir_id = get_new_id("cpt_dir", "id");

	//     // CPT_DIR insert
	//     $db->table('cpt_dir')->insert([
	//         'id' => $cpt_dir_id,
	//         'name' => $c_acc_no,
	//         'description' => 'For Account ' . $c_acc_no
	//     ]);

	//     // CPT insert multiple entries
	//     $cpt_entries = [
	//         ['name' => 'CAR', 'description' => '1_car_rates'],
	//         ['name' => 'Mini Van', 'description' => '2_Mini_Van rates'],
	//         ['name' => 'Cargo Van', 'description' => '3_Cargo Van rates'],
	//         ['name' => 'Truck', 'description' => '4_Truck_rates'],
	//         ['name' => 'Truck With lift', 'description' => '5_Truck With lift rates'],
	//         ['name' => 'Trailer', 'description' => '6_Trailer']
	//     ];

	//     foreach ($cpt_entries as $entry) {

	//         $cpt_id = get_new_id("cpt", "id");

	//         $entry['id'] = $cpt_id;
	//         $entry['dir_id'] = $cpt_dir_id;
	//         $db->table('cpt')->insert($entry);
	//     };
	//     // $account_no = get_new_client_account();
	// 	    $account_no = get_new_client_account();
	// 		// var_dump($account_no);
	// 		// die();

	//     /* ================== GENERAL INFO ================== */
	//     $branch     = $this->request->getVar('branch');
	//     $client_group      = $this->request->getVar('client_group');
	//     $status     = $this->request->getVar('status');
	//     $name       = $this->request->getVar('name');
	//     $attention  = $this->request->getVar('attention');
	//     $caller_person = $this->request->getVar('caller_person');
	// 	$job_color = $this->request->getVar('job_color');

	//     $phone1     = $this->request->getVar('phone1');
	//     $phone2     = $this->request->getVar('phone2');
	//     $emer_phone = $this->request->getVar('emer_phone');
	//     $fax        = $this->request->getVar('fax');

	//     $street     = $this->request->getVar('street');
	//     $city       = $this->request->getVar('city');
	//     $state      = $this->request->getVar('state');  
	//     $zip        = $this->request->getVar('zip');
	//     $country    = $this->request->getVar('country');

	//     $emer_name  = $this->request->getVar('emer_name');
	//     $service_type_required = $this->request->getVar('service_type_required');

	// 	/* ================== WAREHOUSE ================== */
	//     $is_wh_sr        = $this->request->getVar('is_wh_sr');


	//     /* ================== WEB INFO ================== */
	//     $website        = $this->request->getVar('website');
	//     $email          = $this->request->getVar('email');
	//     $login_id       = $this->request->getVar('login_id');
	//     $password       = $this->request->getVar('password');
	//     $invoice_email  = $this->request->getVar('invoice_email');

	//     /* ================== REMARKS ================== */
	//     $remarks    = $this->request->getVar('remarks');
	//     $remarks_2  = $this->request->getVar('remarks_2');

	//     /* ================== FINANCE ================== */
	// 	$date                    = $this->request->getVar('date'); 
	//     $doj                    = $this->request->getVar('doj'); 
	//     $opening_balance_date   = $this->request->getVar('opening_balance_date');
	//     $opening_balance        = $this->request->getVar('opening_balance');
	//     $credit_limit           = $this->request->getVar('credit_limit');
	//     $special_discount       = $this->request->getVar('special_discount');

	//     $int_rate_30 = $this->request->getVar('int_rate_30');
	//     $int_rate_60 = $this->request->getVar('int_rate_60');
	//     $int_rate_90 = $this->request->getVar('int_rate_90');

	//     $priority               = $this->request->getVar('priority');
	//     $referencer_required    = $this->request->getVar('referencer_required');
	//     $billing_method         = $this->request->getVar('billing_method');
	//     $quality_window         = $this->request->getVar('quality_window');

	//     /* ================== INVOICE ================== */
	//     $p_coverpage = $this->request->getVar('p_coverpage');
	//     $p_long      = $this->request->getVar('p_long');
	//     $p_ref_sum   = $this->request->getVar('p_ref_sum');
	//     $p_ticket    = $this->request->getVar('p_ticket');

	//     /* ================== AUTO EMAIL ================== */
	//     $ae_job              = $this->request->getVar('ae_job');
	//     $a_email_job         = $this->request->getVar('a_email_job');
	//     $af_del_time         = $this->request->getVar('af_del_time');
	//     $a_email_del         = $this->request->getVar('a_email_del');
	//     $ae_pickup_image     = $this->request->getVar('ae_pickup_image');
	//     $ae_email_icupdate   = $this->request->getVar('ae_email_icupdate');
	//     $ae_pod              = $this->request->getVar('ae_pod');
	//     $a_email_pod         = $this->request->getVar('a_email_pod');
	//     $af_sent_ch          = $this->request->getVar('af_sent_ch'); 
	//     $a_email_ch          = $this->request->getVar('a_email_ch');
	//     $brd_time_select     = $this->request->getVar('brd_time_select');
	//     $brd_a_email_time    = $this->request->getVar('brd_a_email_time');

	//     /* ================== AUTO FAX ================== */
	//     $af_job     = $this->request->getVar('af_job');
	//     $a_fax_job  = $this->request->getVar('a_fax_job');
	//     $a_fax_del  = $this->request->getVar('a_fax_del');
	//     $af_pod     = $this->request->getVar('af_pod');
	//     $a_fax_pod  = $this->request->getVar('a_fax_pod');
	//     $a_fax_ch   = $this->request->getVar('a_fax_ch');
	//     $brd_time   = $this->request->getVar('brd_time');
	//     $a_email_time = $this->request->getVar('a_email_time');

	//     /* ================== ALERTS ================== */
	//     $web_alert        = $this->request->getVar('web_alert');
	//     $auto_alert       = $this->request->getVar('auto_alert');
	//     $is_job_deadline  = $this->request->getVar('is_job_deadline');

	//     /* ================== AIRPORT ================== */
	//     $airport1 = $this->request->getVar('airport1');
	//     $airport_miles1 = $this->request->getVar('airport_miles1');
	//     $airport2 = $this->request->getVar('airport2');
	//     $airport_miles2 = $this->request->getVar('airport_miles2');
	//     $airport3 = $this->request->getVar('airport3');
	//     $airport_miles3 = $this->request->getVar('airport_miles3');

	//     /* ================== SALES ================== */
	//     $sales_person1 = $this->request->getVar('sales_person1');
	//     $sales_person2 = $this->request->getVar('sales_person2');
	//     $sales_person3 = $this->request->getVar('sales_person3');
	//     $sales_person4 = $this->request->getVar('sales_person4');

	//     /* ================== CARD ================== */
	//     $cc_accept   = $this->request->getVar('cc_accept');
	//     $cc_auto_pay = $this->request->getVar('cc_auto_pay');
	//     $card_name   = $this->request->getVar('card_name');
	//     $card_no     = $this->request->getVar('card_no');
	//     $card_address= $this->request->getVar('card_address');
	//     $card_city   = $this->request->getVar('card_city');
	//     $card_state  = $this->request->getVar('card_state');
	// 	 $card_zip  = $this->request->getVar('card_zip');
	//     $card_phone  = $this->request->getVar('card_phone');

	//     /* ================== INSERT ================== */
	//     $data = compact(
	//         'account_no','branch','client_group','status','name','attention','caller_person',
	//         'phone1','phone2','emer_phone','fax','street','city','state','zip','country',
	//         'emer_name','job_color','service_type_required','website','email','login_id','password',
	//         'invoice_email','is_wh_sr','remarks','remarks_2','doj','opening_balance_date',
	//         'opening_balance','credit_limit','special_discount',
	//         'int_rate_30','int_rate_60','int_rate_90','priority',
	//         'referencer_required','billing_method','quality_window',
	//         'p_coverpage','p_long','p_ref_sum','p_ticket',
	//         'ae_job','a_email_job','af_del_time','a_email_del',
	//         'ae_pickup_image','ae_email_icupdate','ae_pod','a_email_pod',
	//         'af_sent_ch','a_email_ch','brd_time_select','brd_a_email_time',
	//         'af_job','a_fax_job','a_fax_del','af_pod','a_fax_pod','a_fax_ch',
	//         'brd_time','a_email_time','web_alert','auto_alert','is_job_deadline',
	//         'airport1','airport_miles1','airport2','airport_miles2',
	//         'airport3','airport_miles3','sales_person1','sales_person2',
	//         'sales_person3','sales_person4','cc_accept','cc_auto_pay',
	//         'card_name','card_no','card_address','card_city','card_state','card_zip','card_phone'
	//     );

	//     $db = \Config\Database::connect();
	//     $db->table('clients')->insert($data);

	// 	$client_id = $db->insertID();


	//     $card_types  = $this->request->getVar('card_type');       // array
	//     $card_nos    = $this->request->getVar('card_num');         // array
	//     $exp_months  = $this->request->getVar('card_exp_month');  // array
	//     $exp_years   = $this->request->getVar('card_exp_year');   // array
	//     $cvvs        = $this->request->getVar('card_cvv2_code');  // array


	//     if (!empty($card_nos) && is_array($card_nos)) {

	//         foreach ($card_nos as $key => $card_no) {

	//             // Skip empty rows
	//             if (empty($card_no)) {
	//                 continue;
	//             }

	//             $cardData = [
	//                 'client_id'        => $account_no ,
	//                 'card_type'        => $card_types[$key] ?? null,
	//                 'card_no'          => $card_no,
	//                 'card_exp_month'   => $exp_months[$key] ?? null,
	//                 'card_exp_year'    => $exp_years[$key] ?? null,
	//                 'card_cvv2_code'   => $cvvs[$key] ?? null
	//             ];

	//             $db->table('clients_card_info')->insert($cardData);
	//         }
	//     }

	//     return redirect()->to(base_url('clients'));
	// }


	// public function editclient()
	// {
	// 	$db = \Config\Database::connect();
	// 	$request = \Config\Services::request();
	// 	$id=$request->getPostGet('id');
	// 	// $model = new ClientModel();
	// 	// $data['row'] = $model->where('id', $id)->first();
	// 	// print_r($data); die;
	// 	$sql="select * from clients where account_no='".$id."'";
	//     $row = $db->query($sql)->getFirstRow(); 
	// 	$data['row'] = $row;

	// $db = \Config\Database::connect();

	// $cards = $db->table('clients_card_info')
	// 			->where('client_id', $id)
	// 			->get()
	// 			->getResult(); 
	// 	// var_dump($cards);
	// 	// die();

	// 	return view('clients/client_edit', $data, $cards);

	// }

	public function editclient()
	{
		$accountNo = (int) $this->request->getGetPost('id');

		$clientsModel = new ClientsModel();
		$cardModel    = new ClientsCardModel();

		// Client row
		$client = $clientsModel->getByAccountNo($accountNo);
		if (!$client) {
			return redirect()->to(base_url('clients'))
				->with('error', 'Client not found');
		}

		// Client cards
		$cards = $cardModel->getByClientId($accountNo);
		// dd($cards);

		return view('clients/client_edit', [
			'row'   => $client,
			'cards' => $cards
		]);
	}


	// public function updateclient()
	// {
	// 	$session = \Config\Services::session();
	// 	$request = \Config\Services::request();
	// 	$db = \Config\Database::connect();

	// 	$id 	= 	$this->request->getVar('id');
	// 	{   $branch 	= 	$this->request->getVar('branch');
	// 	$group 		    = 	$this->request->getVar('client_group');
	// 	$status 		= 	$this->request->getVar('status');
	// 	$attention 	    = 	$this->request->getVar('attention');
	// 	$phone1         = 	$this->request->getVar('phone1');
	// 	$phone2         = 	$this->request->getVar('phone2');
	// 	$name           = 	$this->request->getVar('name');
	// 	$caller_person  = 	$this->request->getVar('caller_person');
	// 	$fax            = 	$this->request->getVar('fax');
	// 	$street         = 	$this->request->getVar('street');
	// 	$emer_name      = 	$this->request->getVar('emer_name');
	// 	$city           = 	$this->request->getVar('city');
	// 	$emer_phone     = 	$this->request->getVar('emer_phone');
	// 	$zip            = 	$this->request->getVar('zip');
	// 	$status         = 	$this->request->getVar('status');
	// 	$country        = 	$this->request->getVar('country');
	// 	$website        = 	$this->request->getVar('website');
	// 	$email          = 	$this->request->getVar('email');
	// 	$login_id       = 	$this->request->getVar('login_id');
	// 	$password       = 	$this->request->getVar('password');
	// 	$invoice_email  = 	$this->request->getVar('invoice_email');
	// 	$remarks        = 	$this->request->getVar('remarks');
	// 	$remarks_2      = 	$this->request->getVar('remarks_2');
	// 	$doj            = 	$this->request->getVar('doj');
	// 	$opening_balance_date     = 	$this->request->getVar('opening_balance_date');
	// 	$credit_limit     = 	$this->request->getVar('credit_limit');
	// 	$opening_balance     = 	$this->request->getVar('opening_balance');
	// 	$special_discount     = 	$this->request->getVar('special_discount');
	// 	$int_rate_30     = 	$this->request->getVar('int_rate_30');
	// 	$referencer_required     = 	$this->request->getVar('referencer_required');
	// 	$int_rate_60     = 	$this->request->getVar('int_rate_60');
	// 	$priority     = 	$this->request->getVar('priority');
	// 	$int_rate_90     = 	$this->request->getVar('int_rate_90');
	// 	$billing_method     = 	$this->request->getVar('billing_method');
	// 	$quality_window     = 	$this->request->getVar('quality_window');
	// 	$p_coverpage     = 	$this->request->getVar('p_coverpage');
	// 	$p_long          = 	$this->request->getVar('p_long');
	// 	$p_ref_sum       = 	$this->request->getVar('p_ref_sum');
	// 	$p_ticket       = 	$this->request->getVar('p_ticket');
	// 	$a_email_job     = 	$this->request->getVar('a_email_job');
	// 	$af_del_time     = 	$this->request->getVar('af_del_time');
	// 	$a_fax_pod       = 	$this->request->getVar('a_fax_pod');
	// 	$af_sent_ch      = 	$this->request->getVar('af_sent_ch');
	// 	$brd_time        = 	$this->request->getVar('brd_time');
	// 	$a_fax_job  = 	$this->request->getVar('a_fax_job');
	// 	$a_fax_del     = 	$this->request->getVar('a_fax_del');

	// 	$a_fax_pod     = 	$this->request->getVar('a_fax_pod');
	// 	$a_fax_ch     = 	$this->request->getVar('a_fax_ch');
	// 	$web_alert     = 	$this->request->getVar('web_alert');
	// 	$auto_alert     = 	$this->request->getVar('auto_alert');
	// 	$airport1     = 	$this->request->getVar('airport1');
	// 	$airport_miles1     = 	$this->request->getVar('airport_miles1');
	// 	$airport2     = 	$this->request->getVar('airport2');
	// 	$airport_miles2     = 	$this->request->getVar('airport_miles2');
	// 	$airport3     = 	$this->request->getVar('airport3');
	// 	$airport_miles3     = 	$this->request->getVar('airport_miles3');
	// 	$sales_person1     = 	$this->request->getVar('sales_person1');
	// 	$sales_person2     = 	$this->request->getVar('sales_person2');
	// 	$sales_person3     = 	$this->request->getVar('sales_person3');
	// 	$sales_person4     = 	$this->request->getVar('sales_person4');
	// 	$cc_accept     = 	$this->request->getVar('cc_accept');
	// 	$cc_auto_pay     = 	$this->request->getVar('cc_auto_pay');
	// 	$card_name     = 	$this->request->getVar('card_name');
	// 	$card_no     = 	$this->request->getVar('card_no');
	// 	$card_address     = 	$this->request->getVar('card_address');
	// 	$card_city     = 	$this->request->getVar('card_city');
	// 	$card_state     = 	$this->request->getVar('card_state');
	// 	$card_phone     = 	$this->request->getVar('card_phone');
	// 		$data = array
	// 		(   
	// 			'branch'                   => $branch,
	// 			'client_group' 		            => $group,
	// 			'status' 				    => $status,
	// 			'attention' 				=> $attention,
	// 			'phone1'			        => $phone1,
	// 			'phone2' 		            => $phone2,
	// 			'name' 		=> $name,
	// 			'caller_person' 		=> $caller_person,
	// 			'fax' 		=> $fax,
	// 			'street' 		    => $street,
	// 			'emer_name' 		=> $emer_name,
	// 			'city' 		=> $city,
	// 			'emer_phone' 		=> $emer_phone,
	// 			'zip' 		=> $zip,

	// 			'status'                   => $status,
	// 			'country' 		            => $country,
	// 			'website' 				    => $website,
	// 			'email' 				=> $email,
	// 			'login_id'			        => $login_id,
	// 			'password' 		            => $password,
	// 			'invoice_email' 		=> $invoice_email,
	// 			'remarks' 		=> $remarks,
	// 			'remarks_2' 		=> $remarks_2,
	// 			'doj' 		    => $doj,
	// 			'opening_balance_date' 		=> $opening_balance_date,
	// 			'credit_limit' 		=> $credit_limit,
	// 			'opening_balance' 		=> $opening_balance,
	// 			'special_discount' 		=> $special_discount,
	// 			'int_rate_30' 		=> $int_rate_30,
	// 			'referencer_required' 		=> $referencer_required,
	// 			'int_rate_60' 		=> $int_rate_60,
	// 			'priority' 		=> $priority,
	// 			'int_rate_90' 		=> $int_rate_90,
	// 			'billing_method' 		=> $billing_method,
	// 			'quality_window' 		=> $quality_window,
	// 			'p_coverpage' 		=> $p_coverpage,
	// 			'p_long' 		=> $p_long,
	// 			'p_ref_sum' 		=> $p_ref_sum,
	// 			'a_email_job' 		=> $a_email_job,
	// 			'af_del_time' 		=> $af_del_time,
	// 			'a_fax_pod' 		=> $a_fax_pod,
	// 			'af_del_time' 		=> $af_del_time,
	// 			'brd_time' 		=> $brd_time,
	// 			'a_fax_job' 		=> $a_fax_job,
	// 			'a_fax_del' 		=> $a_fax_del,
	// 			'a_fax_pod' 		=> $a_fax_pod,
	// 			'a_fax_ch' 		=> $a_fax_ch,
	// 			'web_alert' 		=> $web_alert,
	// 			'auto_alert' 		=> $auto_alert,
	// 			'airport1' 		=> $airport1,
	// 			'airport_miles1' 		=> $airport_miles1,
	// 			'airport2' 		=> $airport2,
	// 			'airport_miles2' 		=> $airport_miles2,
	// 			'airport3' 		=> $airport3,
	// 			'airport_miles3' 		=> $airport_miles3,
	// 			'sales_person1' 		=> $sales_person1,
	// 			'sales_person2' 		=> $sales_person2,
	// 			'sales_person3' 		=> $sales_person3,
	// 			'sales_person4' 		=> $sales_person4,
	// 			'cc_accept' 		=> $cc_accept,
	// 			'cc_auto_pay' 		=> $cc_auto_pay,
	// 			'card_name' 		=> $card_name,
	// 			'card_no' 		=> $card_no,
	// 			'card_address' 		=> $card_address,
	// 			'card_city' 		=> $card_city,
	// 			'card_state' 		=> $card_state,
	// 			'card_phone' 		=> $card_phone
	// 		);
	// 		// $model = new ClientModel();
	// 		// $model->update($id, $data);

	// 		$db->table('clients')->where("id",$id)->update($data);

	// 		return redirect()->to(base_url('clients'));

	// }

	// }

	// 	public function updateclient()
	// {
	//     $db = \Config\Database::connect();

	//     $id = $this->request->getVar('id');

	//     /* ================== GENERAL INFO ================== */
	//     $branch     = $this->request->getVar('branch');
	//     $client_group = $this->request->getVar('client_group');
	//     $status     = $this->request->getVar('status');
	//     $name       = $this->request->getVar('name');
	//     $attention  = $this->request->getVar('attention');
	//     $caller_person = $this->request->getVar('caller_person');
	//     $job_color  = $this->request->getVar('job_color');
	//     $service_type_required = $this->request->getVar('service_type_required');

	//     $phone1     = $this->request->getVar('phone1');
	//     $phone2     = $this->request->getVar('phone2');
	//     $emer_phone = $this->request->getVar('emer_phone');
	//     $fax        = $this->request->getVar('fax');

	//     $street     = $this->request->getVar('street');
	//     $city       = $this->request->getVar('city');
	//     $state      = $this->request->getVar('state');
	//     $zip        = $this->request->getVar('zip');
	//     $country    = $this->request->getVar('country');

	//     $emer_name  = $this->request->getVar('emer_name');

	//     /* ================== WAREHOUSE ================== */
	//     $is_wh_sr   = $this->request->getVar('is_wh_sr');

	//     /* ================== WEB INFO ================== */
	//     $website        = $this->request->getVar('website');
	//     $email          = $this->request->getVar('email');
	//     $login_id       = $this->request->getVar('login_id');
	//     $password       = $this->request->getVar('password');
	//     $invoice_email  = $this->request->getVar('invoice_email');

	//     /* ================== REMARKS ================== */
	//     $remarks    = $this->request->getVar('remarks');
	//     $remarks_2  = $this->request->getVar('remarks_2');

	//     /* ================== FINANCE ================== */
	// 	$date                    = $this->request->getVar('date'); 
	//     $doj                    = $this->request->getVar('doj');
	//     $opening_balance_date   = $this->request->getVar('opening_balance_date');
	//     $opening_balance        = $this->request->getVar('opening_balance');
	//     $credit_limit           = $this->request->getVar('credit_limit');
	//     $special_discount       = $this->request->getVar('special_discount');

	//     $int_rate_30 = $this->request->getVar('int_rate_30');
	//     $int_rate_60 = $this->request->getVar('int_rate_60');
	//     $int_rate_90 = $this->request->getVar('int_rate_90');

	//     $priority               = $this->request->getVar('priority');
	//     $referencer_required    = $this->request->getVar('referencer_required');
	//     $billing_method         = $this->request->getVar('billing_method');
	//     $quality_window         = $this->request->getVar('quality_window');

	//     /* ================== INVOICE ================== */
	//     $p_coverpage = $this->request->getVar('p_coverpage');
	//     $p_long      = $this->request->getVar('p_long');
	//     $p_ref_sum   = $this->request->getVar('p_ref_sum');
	//     $p_ticket    = $this->request->getVar('p_ticket');

	//     /* ================== AUTO EMAIL ================== */
	//     $ae_job            = $this->request->getVar('ae_job');
	//     $a_email_job       = $this->request->getVar('a_email_job');
	//     $af_del_time       = $this->request->getVar('af_del_time');
	//     $a_email_del       = $this->request->getVar('a_email_del');
	//     $ae_pickup_image   = $this->request->getVar('ae_pickup_image');
	//     $ae_email_icupdate = $this->request->getVar('ae_email_icupdate');
	//     $ae_pod            = $this->request->getVar('ae_pod');
	//     $a_email_pod       = $this->request->getVar('a_email_pod');
	//     $af_sent_ch        = $this->request->getVar('af_sent_ch');
	//     $a_email_ch        = $this->request->getVar('a_email_ch');
	//     $brd_time_select   = $this->request->getVar('brd_time_select');
	//     $brd_a_email_time  = $this->request->getVar('brd_a_email_time');

	//     /* ================== AUTO FAX ================== */
	//     $af_job     = $this->request->getVar('af_job');
	//     $a_fax_job  = $this->request->getVar('a_fax_job');
	//     $a_fax_del  = $this->request->getVar('a_fax_del');
	//     $af_pod     = $this->request->getVar('af_pod');
	//     $a_fax_pod  = $this->request->getVar('a_fax_pod');
	//     $af_sent_ch_fax = $this->request->getVar('af_sent_ch');
	//     $a_fax_ch   = $this->request->getVar('a_fax_ch');
	//     $brd_time   = $this->request->getVar('brd_time');
	//     $a_fax_time = $this->request->getVar('a_fax_time');

	//     /* ================== ALERTS ================== */
	//     $web_alert       = $this->request->getVar('web_alert');
	//     $auto_alert      = $this->request->getVar('auto_alert');
	//     $is_job_deadline = $this->request->getVar('is_job_deadline');

	//     /* ================== AIRPORT ================== */
	//     $airport1 = $this->request->getVar('airport1');
	//     $airport_miles1 = $this->request->getVar('airport_miles1');
	//     $airport2 = $this->request->getVar('airport2');
	//     $airport_miles2 = $this->request->getVar('airport_miles2');
	//     $airport3 = $this->request->getVar('airport3');
	//     $airport_miles3 = $this->request->getVar('airport_miles3');

	//     /* ================== SALES ================== */
	//     $sales_person1 = $this->request->getVar('sales_person1');
	//     $sales_person2 = $this->request->getVar('sales_person2');
	//     $sales_person3 = $this->request->getVar('sales_person3');
	//     $sales_person4 = $this->request->getVar('sales_person4');

	//     /* ================== CARD ================== */
	//     $cc_accept   = $this->request->getVar('cc_accept');
	//     $cc_auto_pay = $this->request->getVar('cc_auto_pay');
	//     $card_name   = $this->request->getVar('card_name');
	//     $card_no     = $this->request->getVar('card_no');
	//     $card_address= $this->request->getVar('card_address');
	//     $card_city   = $this->request->getVar('card_city');
	//     $card_state  = $this->request->getVar('card_state');
	//     $card_phone  = $this->request->getVar('card_phone');
	// 	 $card_zip  = $this->request->getVar('card_zip');

	//     /* ================== UPDATE DATA ================== */
	//     $data = compact(
	//         'branch','client_group','status','name','attention','caller_person',
	//         'phone1','phone2','emer_phone','fax','street','city','state','zip','country',
	//         'emer_name','job_color','service_type_required','website','email','login_id','password',
	//         'invoice_email','is_wh_sr','remarks','remarks_2','doj','opening_balance_date',
	//         'opening_balance','credit_limit','special_discount',
	//         'int_rate_30','int_rate_60','int_rate_90','priority',
	//         'referencer_required','billing_method','quality_window',
	//         'p_coverpage','p_long','p_ref_sum','p_ticket',
	//         'ae_job','a_email_job','af_del_time','a_email_del',
	//         'ae_pickup_image','ae_email_icupdate','ae_pod','a_email_pod',
	//         'af_sent_ch','a_email_ch','brd_time_select','brd_a_email_time',
	//         'af_job','a_fax_job','a_fax_del','af_pod','a_fax_pod','a_fax_ch',
	//         'brd_time','web_alert','auto_alert','is_job_deadline',
	//         'airport1','airport_miles1','airport2','airport_miles2',
	//         'airport3','airport_miles3','sales_person1','sales_person2',
	//         'sales_person3','sales_person4','cc_accept','cc_auto_pay',
	//         'card_name','card_no','card_address','card_city','card_state','card_zip','card_phone'
	//     );

	//     $db->table('clients')->where('account_no', $id)->update($data);


	// 	$db->table('clients_card_info')->where('client_id', $id)->delete();
	// 	$card_types  = $this->request->getVar('card_type');       
	//     $card_nos    = $this->request->getVar('card_num');         
	//     $exp_months  = $this->request->getVar('card_exp_month');  
	//     $exp_years   = $this->request->getVar('card_exp_year');   
	//     $cvvs        = $this->request->getVar('card_cvv2_code');  

	// 	if (!empty($card_nos) && is_array($card_nos)) {

	// 		foreach ($card_nos as $key => $card_no) {

	// 			if (empty($card_no)) {
	// 				continue;
	// 			}

	// 			$cardData = [
	// 				'client_id'      => (int) $id,
	// 				'card_type'      => $card_types[$key] ?? null,
	// 				'card_no'        => $card_no,
	// 				'card_exp_month' => $exp_months[$key] ?? null,
	// 				'card_exp_year'  => $exp_years[$key] ?? null,
	// 				'card_cvv2_code' => $cvvs[$key] ?? null,
	// 			];

	// 			$db->table('clients_card_info')->insert($cardData);
	// 		}


	// 		return redirect()->to(base_url('clients'));
	// 	}
	// 			return redirect()->to(base_url('clients'));

	// }

	public function updateclient()
	{
		// dd($this->request->getPost());
		$rules = [

			// BASIC INFO
			'name'         => 'required|min_length[3]',
			'branch'       => 'required|in_list[online,nj,ezwarehouse,ny,trucking]',
			'client_group' => 'required|in_list[A,B,C]',
			'status'       => 'required|in_list[0,1]',

			// CONTACT
			'phone1'     => 'required|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',
			'phone2'     => 'permit_empty|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',
			'emer_phone' => 'permit_empty|regex_match[/^[0-9\\s\\-\\+\\(\\)]{7,20}$/]',

			// ADDRESS
			'street'  => 'required',
			'country' => 'required',
			'state'   => 'required',
			'city'    => 'required',
			'zip'     => 'required|numeric',

			// WEB
			'website' => 'required|valid_url_strict',
			'email'   => 'required|valid_email',

			// FINANCE
			'doj'             => 'required|valid_date[Y-m-d]',
			'opening_balance' => 'required|decimal',
			'credit_limit'    => 'required|decimal',
			'priority'        => 'required|greater_than_equal_to[1]|less_than_equal_to[10]',

			// FLAGS
			'service_type_required' => 'required|in_list[0,1]',
			// 'is_wh_sr'              => 'required|in_list[0,1]',
		];
// dd($this->validate($rules),$this->validator);
		if (! $this->validate($rules)) {
			return redirect()->back()
				->withInput()
				->with('errors', $this->validator->getErrors());
		};

		$accountNo = (int) $this->request->getVar('id');

		$clientsModel = new ClientsModel();
		$cardModel    = new ClientsCardModel();

		$db = \Config\Database::connect();
		$db->transStart();

		// Client update data
		$data = $this->request->getPost();
		unset($data['id']); // safety

		$clientsModel->updateByAccountNo($accountNo, $data);

		// Card arrays
		$cards = [];
		foreach ($this->request->getVar('card_num') ?? [] as $k => $no) {
			$cards[] = [
				'card_type'      => $this->request->getVar('card_type')[$k] ?? null,
				'card_no'        => $no,
				'card_exp_month' => $this->request->getVar('card_exp_month')[$k] ?? null,
				'card_exp_year'  => $this->request->getVar('card_exp_year')[$k] ?? null,
				'card_cvv2_code' => $this->request->getVar('card_cvv2_code')[$k] ?? null,
			];
		}
		// dd($this->request->getVar('card_num'));
		$cardModel->replaceCards($accountNo, $cards);

		$db->transComplete();

		return redirect()->to(base_url('clients'))
			->with('success', 'Client updated successfully.');
	}
}
