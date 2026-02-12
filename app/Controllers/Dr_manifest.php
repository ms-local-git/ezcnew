<?php

namespace App\Controllers;

class Dr_manifest extends BaseController
{

	public function manifest_submitted()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $search = $request->getPost('search');
            $sql="select code,first_name,last_name,driver_manifest_submit.* 
            from driver_manifest_submit,drivers 
            where drivers.id = driver_manifest_submit.driver_id 
            and code='".$search."' and is_manifest_submit =0 order by code;";
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
		} else {
			$data=array();
		}

        return view('/dr_manifest/manifest_submitted',$data);
    }

    public function manifest_submitted_save()
    {
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        // print_r($sql_data);die;
        $manifest_count = $sql_data['manifest_count'];
        for ($i=1; $i <= $manifest_count; $i++) { 
            if(isset($sql_data["dr_manifest_id".$i])) {
				if(isset($sql_data["dr_manifest_submit".$i])) {
                    $data['is_manifest_submit'] = '1';
                    $data['notes'] = $sql_data['dr_manifest_text'.$i];
                    $data['user_id'] = $_SESSION['user_id'];
                    $data['user_date_time'] = date('Y-m-d');
                    $db->table('driver_manifest_submit')->where("id",$sql_data['dr_manifest_id'.$i])->update($data);
                }
            }
        }
        // die($manifest_count);
        $session->setFlashdata('msg','Manifest Submitted');
        return redirect()->to(base_url().'/dr_manifest/manifest_submitted');
    }
    
	public function manifest_submit_report()
	{
		helper("fun_helper");
		
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
			$from_date=h_sdate($request->getPost('from_date'));
			$to_date=h_sdate($request->getPost('to_date'));
            $submit = $request->getPost('submit_type');

            $filter='';
            if($submit=='0') {
                $filter.='and is_manifest_submit =0';
            } else {
                $filter.='and is_manifest_submit =1';
            }

            $sql="select code,first_name,last_name,driver_manifest_submit.* 
            from driver_manifest_submit,drivers 
            where  manifest_date >='".$from_date."' 
            and manifest_date <='".$to_date."' 
            and drivers.id = driver_manifest_submit.driver_id ".$filter." 
            and driver_type like 'driver%' limit 100";
            // die($sql);
            $reports = $db->query($sql)->getResultArray(); 

			$data["reports"]=$reports;
		} else {
			$data=array();
		}

        return view('/dr_manifest/manifest_submit_report',$data);
    }
    
}
