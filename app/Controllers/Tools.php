<?php

namespace App\Controllers;

class Tools extends BaseController
{
	public function __construct()
	{
	
	}
	
	public function travel_time_manage()
	{
		return view('tools/travel_time_manage');
	}
    
	public function travel_time_manage_search()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$search=h_safe_sql($request->getPost('search'));
        if(empty($search)) {
            $search=h_safe_sql($request->getPostGet('search'));
        }

        $data['search'] = $search;

        $sql="select * from travel_time_new where name ='".$search."' order by min;";
	
		$vehicles = $db->query($sql)->getResultArray(); 
		
		$data["vehicles"]=$vehicles;

		return view('tools/travel_time_manage',$data);

	}

    public function travel_time_manage_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        // print_r($sql_data);die;
        $vehicle_count = $sql_data['vehicle_count'];
        $db->table('travel_time_new')->where("name",$sql_data['name_1'])->delete();
        for ($i=1; $i <= $vehicle_count; $i++) { 
            $data['name'] = $sql_data['name_'.$i];
            $data['from_miles'] = $sql_data['from_miles_'.$i];
            $data['to_miles'] = $sql_data['to_miles_'.$i];
            $data['min'] = $sql_data['min_'.$i];
            $db->table('travel_time_new')->insert($data);
        }
        return redirect()->to(base_url().'/tools/travel_time_manage_search?search='.$data['name']);
    }

	public function pickup_time_manage()
	{
		return view('tools/pickup_time_manage');
	}
    
	public function pickup_time_manage_search()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$search=h_safe_sql($request->getPost('search'));
        if(empty($search)) {
            $search=h_safe_sql($request->getPostGet('search'));
        }

        $data['search'] = $search;

        $sql="select * from pickup_time_new where name ='".$search."' order by min;";
	
		$vehicles = $db->query($sql)->getResultArray(); 
		
		$data["vehicles"]=$vehicles;

		return view('tools/pickup_time_manage',$data);

	}

    public function pickup_time_manage_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        // print_r($sql_data);die;
        $vehicle_count = $sql_data['vehicle_count'];
        $db->table('pickup_time_new')->where("name",$sql_data['name_1'])->delete();
        for ($i=1; $i <= $vehicle_count; $i++) { 
            $data['name'] = $sql_data['name_'.$i];
            $data['from_miles'] = $sql_data['from_miles_'.$i];
            $data['to_miles'] = $sql_data['to_miles_'.$i];
            $data['min'] = $sql_data['min_'.$i];
            $db->table('pickup_time_new')->insert($data);
        }
        return redirect()->to(base_url().'/tools/pickup_time_manage_search?search='.$data['name']);
    }
}