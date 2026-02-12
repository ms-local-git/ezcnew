<?php

namespace App\Controllers;

use App\Models\AgentModel;
use App\Models\AgentairportModel;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use App\Models\AgentsChargesTempModel;

class Agent extends BaseController
{
    protected $request;
    public function __construct()
    {
        $this->request = \Config\Services::request();
    }

    public function paid_jobs()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        if ($request->getPost() != null) {
            $option = $request->getPost('option');
            $txt = $request->getPost('txt');

            if ($option == "agent")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where agent_code='" . $txt . "' and agents.id = agents_charges_temp.agent_id limit 200";

            if ($option == "job")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where job_no='" . $txt . "' and agents.id = agents_charges_temp.agent_id limit 200";

            if ($option == "sett")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where settlement_no='" . $txt . "' and agents.id = agents_charges_temp.agent_id limit 200";

            if ($option == "invoice")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where invoice_no like '" . $txt . "%' and agents.id = agents_charges_temp.agent_id limit 200";

            if ($option == "check")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where check_no like '" . $txt . "%' and agents.id = agents_charges_temp.agent_id limit 200";

            if ($option == "amount")
                $sql = "select agents_charges_temp.id,code,agent_name,job_no,invoice_no,check_no,charges,settlement_no,check_amt from agents_charges_temp,agents where charges >= '" . $txt . "' and agents.id = agents_charges_temp.agent_id limit 200";

            $reports = $db->query($sql)->getResultArray();
            $data['reports'] = $reports;
        } else {
            $data = array();
        }

        return view('agent/paid_jobs', $data);
    }

    public function index()
    {
        permission_check('agent_list');

        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();


        $data = [];
        if ($request->getVar('search-keyword')) {
            $keyword = $request->getVar('search-keyword');
            // dd($keyword);
            $data["agent"] = search_data($keyword, 'agents');
            return view('agent/listing', $data);
        }
        // $sql1 ='select * from agents';
        // $agent = $db->query($sql1)->getResultArray(); 

        if ($request->getPost() != null) {
            $search = h_safe_sql($request->getPost('search'));

            $agent_name = $request->getPost('agent_name');
            $city = $request->getPost('city');
            $email = $request->getPost('email');
            $phone = $request->getPost('phone');

            $filter = "";
            if ($agent_name != "")  $filter .= ' and agent_name like"%' . $search . '%"';
            if ($city != "") {
                if (strlen($filter) >= 1) $filter .= ' or ';
                else $filter .= 'and ';
                $filter .= ' city like"%' . $search . '%"';
            }
            if ($email != "") {
                if (strlen($filter) >= 1) $filter .= ' or ';
                else $filter .= 'and ';
                $filter .= ' email like"%' . $search . '%"';
            }
            if ($phone != "") {
                if (strlen($filter) >= 1) $filter .= ' or ';
                else $filter .= 'and ';
                $filter .= ' phone like"%' . $search . '%"';
            }


            if ($filter == "") $filter .= ' and agent_name like"%' . $search . '%" or city like"%' . $search . '%" or email like"%' . $search . '%" or phone like"%' . $search . '%"';

            $sql1 = 'select * from agents where 1 ' . $filter . '  order by id limit 100;';
            // die($sql1);
            $agent = $db->query($sql1)->getResultArray();
            // die($sql1);
            $data["agent"] = $agent;
            $data['page_title'] = 'Agent Listing';
        } else {
            $data = array();
        }

        $data['request'] = $this->request;
        $data['page_title'] = 'Agent Listing';

        return view('agent/listing', $data);
    }

    public function add()
    {
        permission_check('agent_add');
        $db = \Config\Database::connect();
        return view('agent/agent', ['page_title' => 'Agent Add']);
    }

    // public function create()
    // {   $agent = new AgentModel();
    // 	$agentairprt = new AgentairportModel();

    // 	$agent_name 	= 	$this->request->getVar('agent_name');
    // 	$phone 		    = 	$this->request->getVar('phone');
    // 	$em_phone 		= 	$this->request->getVar('em_phone');
    // 	$cellphone 	    = 	$this->request->getVar('cellphone');
    // 	$fax         = 	$this->request->getVar('fax');
    // 	$customer_no         = 	$this->request->getVar('customer_no');
    // 	$notes           = 	$this->request->getVar('notes');
    // 	$start_date  = 	$this->request->getVar('start_date');
    // 	$category            = 	$this->request->getVar('category');
    // 	$address1         = 	$this->request->getVar('address1');
    // 	$city      = 	$this->request->getVar('city');
    // 	$state           = 	$this->request->getVar('state');
    // 	$zip     = 	$this->request->getVar('zip');
    // 	$email            = 	$this->request->getVar('email');
    // 	$website         = 	$this->request->getVar('website');
    // 	$attention        = 	$this->request->getVar('attention');
    // 	$ain  = 	$this->request->getVar('ain');

    // 	$ssn  = 	$this->request->getVar('ssn');

    // 	$air_port  = 	$this->request->getVar('air_port');

    // 	$a_zip_code  = 	$this->request->getVar('a_zip_code');

    // 	$wday_rank  = 	$this->request->getVar('wday_rank');

    // 	$wend_rank  = 	$this->request->getVar('wend_rank');

    // 	$truck  = 	$this->request->getVar('truck');

    // 	$radius  = 	$this->request->getVar('radius');

    // 	$discount_miles  = 	$this->request->getVar('discount_miles');
    // 	$add_percentage  = 	$this->request->getVar('add_percentage');
    // 	$main_rank  = 	$this->request->getVar('main_rank');


    // 		$data = array
    // 		(   
    // 			'agent_name'                   => $agent_name,
    // 			'phone' 		        => $phone,
    // 			'em_phone' 				    => $em_phone,
    // 			'cellphone' 		=> $cellphone,
    // 			'fax'			        => $fax,
    // 			'customer_no' 		        => $customer_no,
    // 			'notes' 		            => $notes,
    // 			'start_date' 		            => $start_date,
    // 			'category' 		=> $category,
    // 			'address1'                 => $address1,
    // 			'city' 		        => $city,

    // 			'state' 		=> $state,
    // 			'zip' 		=> $zip,
    // 			'email' 		=> $email,
    // 			'website' 		=> $website,

    // 			'attention' 		    => $attention,

    // 			'ain' 		            => $ain,
    // 			'ssn' 		            => $ssn

    // 		);
    // 		$data1 = array
    // 		(   
    // 			'air_port'                   => $air_port,
    // 			'a_zip_code' 		        => $a_zip_code,
    // 			'wday_rank' 				    => $wday_rank,
    // 			'wend_rank' 		=> $wend_rank,
    // 			'truck'			        => $truck,
    // 			'radius' 		        => $radius,
    // 			'discount_miles' 		            => $discount_miles,
    // 			'add_percentage' 		            => $add_percentage,
    // 			'main_rank' 		=> $main_rank

    // 		);
    // 		$agent->save($data);
    // 		$agentairprt->save($data1);
    // 		return redirect()->to(base_url('agent'));

    // }

    public function create()
    {
        permission_check('agent_add');

        helper('fun');

        $validationRules = [
            // ===== BASIC INFO =====
            'agent_name' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required'   => 'Agent name is required',
                    'min_length' => 'Agent name must be at least 3 characters'
                ]
            ],

            'phone' => [
                'rules'  => 'required|numeric|min_length[7]',
                'errors' => [
                    'required' => 'Phone number is required',
                    'numeric'  => 'Phone must contain numbers only'
                ]
            ],

            'fax' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Fax number is required'
                ]
            ],

            'start_date' => [
                'rules'  => 'required|valid_date',
                'errors' => [
                    'required' => 'Start date is required',
                    'valid_date' => 'Invalid date format'
                ]
            ],

            'customer_no' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Customer account is required'
                ]
            ],

            // ===== ADDRESS =====
            'address1' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Street address is required'
                ]
            ],

            'city' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'City is required'
                ]
            ],

            'zip' => [
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'ZIP code is required',
                    'numeric'  => 'ZIP code must be numeric'
                ]
            ],

            // ===== CONTACT =====
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email is required',
                    'valid_email' => 'Please enter a valid email'
                ]
            ],

            'website' => [
                'rules' => 'permit_empty|valid_url'
            ],

            // ===== IDENTIFIERS =====
            'ain' => [
                'rules' => 'permit_empty|numeric'
            ],

            'ssn' => [
                'rules' => 'permit_empty|numeric'
            ],

            // ===== AIRPORT TABLE (ARRAY VALIDATION) =====
            'air_port.*' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Airport name is required'
                ]
            ],

            'a_zip_code.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'wday_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'wend_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'radius.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'discount_miles.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'add_percentage.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'main_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ]
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors())
                ->with('validation', $this->validator);
        }

        $a_id = get_new_id("agents", "id");
        $code2 = get_new_agent_no();
        $a_acc_no = "A" . $code2;
        // dd($a_id, $code2);
        $agent = new AgentModel();
        $agentairport = new AgentairportModel();

        // -------- Agent data --------
        $agentData = [
            'agent_name'   => $this->request->getVar('agent_name'),
            'code'           => $a_acc_no,
            'code2'           => $code2,
            'phone'        => $this->request->getVar('phone'),
            'em_phone'     => $this->request->getVar('em_phone'),
            'cellphone'    => $this->request->getVar('cellphone'),
            'fax'          => $this->request->getVar('fax'),
            'customer_no'  => $this->request->getVar('customer_no'),
            'notes'        => $this->request->getVar('notes'),
            'start_date'   => $this->request->getVar('start_date'),
            'category'     => $this->request->getVar('category'),
            'address1'     => $this->request->getVar('address1'),
            'city'         => $this->request->getVar('city'),
            'state'        => $this->request->getVar('state'),
            'zip'          => $this->request->getVar('zip'),
            'email'        => $this->request->getVar('email'),
            'website'      => $this->request->getVar('website'),
            'attention'    => $this->request->getVar('attention'),
            'ain'          => $this->request->getVar('ain'),
            'ssn'          => $this->request->getVar('ssn')
        ];
        // dd($agentData);

        // Save agent
        $agent->save($agentData);
        $agent_id = $agent->getInsertID();



        create_apt(
            $agent_id,
            $a_acc_no,
            $this->request->getVar('agent_name')
        );
        // dd($agent_id);

        // -------- Airport arrays --------
        $air_ports        = $this->request->getVar('air_port');
        $a_zip_codes      = $this->request->getVar('a_zip_code');
        $wday_ranks       = $this->request->getVar('wday_rank');
        $wend_ranks       = $this->request->getVar('wend_rank');
        $trucks           = $this->request->getVar('truck');
        $radius           = $this->request->getVar('radius');
        $discount_miles   = $this->request->getVar('discount_miles');
        $add_percentage   = $this->request->getVar('add_percentage');
        $main_rank        = $this->request->getVar('main_rank');

        // -------- Loop & save airports --------
        if (!empty($air_ports)) {
            foreach ($air_ports as $i => $airport) {

                if (empty($airport)) {
                    continue; // skip empty rows
                }

                $airportData = [
                    'id'              => get_new_id('agents_airports', 'id'),
                    'agent_id'        => (string) $agent_id,
                    'air_port'        => $airport,
                    'a_zip_code'      => $a_zip_codes[$i] ?? null,
                    'wday_rank'       => $wday_ranks[$i] ?? null,
                    'wend_rank'       => $wend_ranks[$i] ?? null,
                    'truck'           => isset($trucks[$i]) ? 1 : 0,
                    'radius'          => $radius[$i] ?? null,
                    'discount_miles'  => $discount_miles[$i] ?? null,
                    'add_percentage'  => $add_percentage[$i] ?? null,
                    'main_rank'       => $main_rank[$i] ?? null,
                ];
                // dd($airportData);
                $agentairport->insert($airportData);
            }
        }

        return redirect()->to(base_url('agent'))->with('success', 'Agent created successfully');
    }


    public function edit($id)
    {
        permission_check('agent_edit');

        $agent = new AgentModel();
        $data['row'] = $agent->find($id);

        $agentairport = new AgentairportModel();

        $data['airports'] = $agentairport
            ->where('agent_id', (string) $id)
            ->findAll();
        $data['page_title'] = 'Agent Edit';

        return view('agent/edit', $data);
    }


    // public function update()
    // {   $id 	= 	$this->request->getVar('id');
    //     $agntid 	= 	$this->request->getVar('agntid');
    //     $agent_name 	= 	$this->request->getVar('agent_name');
    // 	$phone 		    = 	$this->request->getVar('phone');
    // 	$em_phone 		= 	$this->request->getVar('em_phone');
    // 	$cellphone 	    = 	$this->request->getVar('cellphone');
    // 	$fax         = 	$this->request->getVar('fax');
    // 	$customer_no         = 	$this->request->getVar('customer_no');
    // 	$notes           = 	$this->request->getVar('notes');
    // 	$start_date  = 	$this->request->getVar('start_date');
    // 	$category            = 	$this->request->getVar('category');
    // 	$address1         = 	$this->request->getVar('address1');
    // 	$city      = 	$this->request->getVar('city');
    // 	$state           = 	$this->request->getVar('state');
    // 	$zip     = 	$this->request->getVar('zip');
    // 	$email            = 	$this->request->getVar('email');
    // 	$website         = 	$this->request->getVar('website');
    // 	$attention        = 	$this->request->getVar('attention');
    // 	$ain  = 	$this->request->getVar('ain');

    // 	$ssn  = 	$this->request->getVar('ssn');

    // 	$air_port  = 	$this->request->getVar('air_port');

    // 	$a_zip_code  = 	$this->request->getVar('a_zip_code');

    // 	$wday_rank  = 	$this->request->getVar('wday_rank');

    // 	$wend_rank  = 	$this->request->getVar('wend_rank');

    // 	$truck  = 	$this->request->getVar('truck');

    // 	$radius  = 	$this->request->getVar('radius');

    // 	$discount_miles  = 	$this->request->getVar('discount_miles');
    // 	$add_percentage  = 	$this->request->getVar('add_percentage');
    // 	$main_rank  = 	$this->request->getVar('main_rank');

    // 		$data = array
    // 		(   
    // 			'agent_name'                   => $agent_name,
    // 			'phone' 		        => $phone,
    // 			'em_phone' 				    => $em_phone,
    // 			'cellphone' 		=> $cellphone,
    // 			'fax'			        => $fax,
    // 			'customer_no' 		        => $customer_no,
    // 			'notes' 		            => $notes,
    // 			'start_date' 		            => $start_date,
    // 			'category' 		=> $category,
    // 			'address1'                 => $address1,
    // 			'city' 		        => $city,

    // 			'state' 		=> $state,
    // 			'zip' 		=> $zip,
    // 			'email' 		=> $email,
    // 			'website' 		=> $website,

    // 			'attention' 		    => $attention,

    // 			'ain' 		            => $ain,
    // 			'ssn' 		            => $ssn

    // 		);
    // 		$data1 = array
    // 		(   
    // 			'air_port'                   => $air_port,
    // 			'a_zip_code' 		        => $a_zip_code,
    // 			'wday_rank' 				    => $wday_rank,
    // 			'wend_rank' 		=> $wend_rank,
    // 			'truck'			        => $truck,
    // 			'radius' 		        => $radius,
    // 			'discount_miles' 		            => $discount_miles,
    // 			'add_percentage' 		            => $add_percentage,
    // 			'main_rank' 		=> $main_rank

    // 		);
    // 		$agent = new AgentModel();
    // 		$agent->update($id, $data);

    // 		$agentairprt = new AgentairportModel();
    // 		$agentairprt->update($agntid, $data1);

    // 		return redirect()->to(base_url('agent'));

    // }

    public function update()
    {
        permission_check('agent_list');
        helper('fun');

        $id = $this->request->getPost('id');

        // ===============================
        // VALIDATION
        // ===============================
        $validationRules = [

            // ===== BASIC INFO =====
            'agent_name' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required'   => 'Agent name is required',
                    'min_length' => 'Agent name must be at least 3 characters'
                ]
            ],

            'phone' => [
                'rules'  => 'required|numeric|min_length[7]',
                'errors' => [
                    'required' => 'Phone number is required',
                    'numeric'  => 'Phone must contain numbers only'
                ]
            ],

            'fax' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Fax number is required'
                ]
            ],

            'start_date' => [
                'rules'  => 'required|valid_date',
                'errors' => [
                    'required' => 'Start date is required',
                    'valid_date' => 'Invalid date format'
                ]
            ],

            'customer_no' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Customer account is required'
                ]
            ],

            // ===== ADDRESS =====
            'address1' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Street address is required'
                ]
            ],

            'city' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'City is required'
                ]
            ],

            'zip' => [
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'ZIP code is required',
                    'numeric'  => 'ZIP code must be numeric'
                ]
            ],

            // ===== CONTACT =====
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email is required',
                    'valid_email' => 'Please enter a valid email'
                ]
            ],

            'website' => [
                'rules' => 'permit_empty|valid_url'
            ],

            // ===== IDENTIFIERS =====
            'ain' => [
                'rules' => 'permit_empty|numeric'
            ],

            'ssn' => [
                'rules' => 'permit_empty|numeric'
            ],

            // ===== AIRPORT TABLE (ARRAY VALIDATION) =====
            'air_port.*' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Airport field cannot be empty'
                ]
            ],

            'a_zip_code.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'wday_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'wend_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'radius.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'discount_miles.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'add_percentage.*' => [
                'rules' => 'permit_empty|numeric'
            ],

            'main_rank.*' => [
                'rules' => 'permit_empty|numeric'
            ]
        ];

        // ===== RUN VALIDATION =====
        if (!$this->validate($validationRules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors())
                ->with('validation', $this->validator);
        }

        /* ===============================
       UPDATE AGENT
    =============================== */
        $agentData = [
            'agent_name'   => $this->request->getPost('agent_name'),
            'phone'        => $this->request->getPost('phone'),
            'em_phone'     => $this->request->getPost('em_phone'),
            'cellphone'    => $this->request->getPost('cellphone'),
            'fax'          => $this->request->getPost('fax'),
            'customer_no'  => $this->request->getPost('customer_no'),
            'notes'        => $this->request->getPost('notes'),
            'start_date'   => $this->request->getPost('start_date'),
            'category'     => $this->request->getPost('category'),
            'address1'     => $this->request->getPost('address1'),
            'city'         => $this->request->getPost('city'),
            'state'        => $this->request->getPost('state'),
            'zip'          => $this->request->getPost('zip'),
            'email'        => $this->request->getPost('email'),
            'website'      => $this->request->getPost('website'),
            'attention'    => $this->request->getPost('attention'),
            'ain'          => $this->request->getPost('ain'),
            'ssn'          => $this->request->getPost('ssn'),
        ];

        $agentModel = new AgentModel();
        $agentModel->update($id, $agentData);

        /* ===============================
       UPDATE / INSERT AIRPORTS
    =============================== */
        $airportModel = new AgentairportModel();

        $airportIds = $this->request->getPost('airport_id');   // hidden field
        $airPorts   = $this->request->getPost('air_port');

        if (!empty($airPorts)) {
            foreach ($airPorts as $key => $airport) {

                // Skip empty rows
                if (empty($airport)) {
                    continue;
                }

                $airportData = [
                    'agent_id'        => (string) $id,
                    'air_port'        => $airport,
                    'a_zip_code'      => $this->request->getPost('a_zip_code')[$key] ?? null,
                    'wday_rank'       => $this->request->getPost('wday_rank')[$key] ?? null,
                    'wend_rank'       => $this->request->getPost('wend_rank')[$key] ?? null,
                    'truck'           => isset($this->request->getPost('truck')[$key])
                        ? (int) $this->request->getPost('truck')[$key]
                        : 0,
                    'radius'          => $this->request->getPost('radius')[$key] ?? null,
                    'discount_miles'  => $this->request->getPost('discount_miles')[$key] ?? null,
                    'add_percentage'  => $this->request->getPost('add_percentage')[$key] ?? null,
                    'main_rank'       => $this->request->getPost('main_rank')[$key] ?? null,
                ];

                // dd($airportIds[$key]);
                if (!empty($airportIds[$key])) {
                    // UPDATE existing airport
                    $airportModel->update($airportIds[$key], $airportData);
                } else {
                    // INSERT new airport (➕ ADD)
                    $airportData['id'] = get_new_id('agents_airports', 'id');
                    $airportModel->insert($airportData);
                }
            }
        }

        return redirect()->to(base_url('agent'))->with('success', 'Agent updated successfully');
    }

    // 	public function ach($id)
    // {

    // 	    return view('agent/ach', );

    // }

    public function ach($id = null)
    {
        $agentModel = new AgentModel();
        $db = \Config\Database::connect();

        // Fetch agent details
        $agent = $agentModel->find($id);

        if (!$agent) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Agent not found with ID: $id");
        }

        $tempCharges = $db->table('agents_charges_temp')
            ->where('agent_id', $id)
            ->get()
            ->getResultArray();

        // If you expect only one row (common for ACH settlement), use getRowArray()
        // $tempCharge = $db->table('agents_charges_temp')->where('agent_id', $id)->get()->getRowArray();

        // Prepare data to pass to view
        $data = [
            'agent'         => $agent,
            'tempCharges'   => $tempCharges, // or 'tempCharge' if single row
            'page_title'    => 'ACH Settlement',
        ];

        return view('agent/ach', $data);
    }

    // public function save_ach()
    // {
    //     $chargeModel = new AgentsChargesTempModel();

    //     $charge_id  = $this->request->getPost('charge_id');
    //     $agent_id   = $this->request->getPost('agent_id');

    //     $data = [
    //         'agent_id'      => (int)$agent_id,
    //         'settlement_no' => $this->request->getPost('settlement_no'),
    //         'sett_amt'      => $this->request->getPost('sett_amt'),
    //         'settlement_date'     => $this->request->getPost('sett_date'),
    //         'check_no'      => $this->request->getPost('check_no'),
    //         'check_date'    => $this->request->getPost('check_date'),
    //         'check_amt'     => $this->request->getPost('check_amt'),
    //         'notes'         => $this->request->getPost('notes'),
    //         // 'notice'        => $this->request->getPost('notice'),
    //     ];

    //     if (!empty($charge_id)) {
    //         // Update
    //         $success = $chargeModel->update($charge_id, $data);
    //         $message = $success ? 'ACH Settlement updated successfully!' : 'Update failed.';
    //     } else {
    //         // Insert
    // 			// dd($data);

    //         $success = $chargeModel->insert($data);
    //         $message = $success ? 'ACH Settlement created successfully!' : 'Creation failed.';
    //     }

    //     if ($success) {
    //         return redirect()->to(base_url('agent/ach/' . $agent_id))
    //                          ->with('success', $message);
    //     }

    //     return redirect()->back()->withInput()->with('error', $message);
    // }

    public function save_ach()
    {
        helper(['form', 'url']);



        $data = [
            'agent_id'       => (int)$this->request->getPost('agent_id'),
            // 'settlement_no'  => $this->request->getPost('settlement_no'),
            // 'sett_amt'       => $this->request->getPost('sett_amt'),
            '	settlement_date'      => $this->request->getPost('sett_date'),
            'check_no'       => $this->request->getPost('check_no'),
            'check_date'     => $this->request->getPost('check_date'),
            'check_amt'      => $this->request->getPost('check_amt'),
            'notes'          => $this->request->getPost('notes'),
            // 'notice'         => $this->request->getPost('notice'),
            // 'updated_at'     => date('Y-m-d H:i:s'),
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('agents_charges_temp');

        $charge_id = $this->request->getPost('charge_id');

        if (!empty($charge_id)) {
            // Update existing record
            $builder->where('id', $charge_id);
            $success = $builder->update($data);

            $message = $success ? 'ACH Settlement updated successfully!' : 'Failed to update ACH Settlement.';
        } else {
            // Insert new record
            // dd($data);
            $success = $builder->insert($data);

            $message = $success ? 'ACH Settlement created successfully!' : 'Failed to create ACH Settlement.';
        }

        // Set flash message and redirect
        if ($success) {
            return redirect()->to(base_url('agent/ach/' . $data['agent_id']))
                ->with('success', $message);
        } else {
            return redirect()->back()->withInput()->with('error', $message);
        }
    }
}
