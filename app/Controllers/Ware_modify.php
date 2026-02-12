<?php

namespace App\Controllers;

class Ware_modify extends BaseController
{

	public function tracking_modify()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $serial_no=$request->getPost('serial_no');
        
            $sql="select clients.name,inventory.* from inventory,clients where serial_no ='".$serial_no."' limit 1";
            $inventory = $db->query($sql)->getFirstRow(); 
            if(!empty($inventory)) {
                $data["inventory"]=$inventory;
            } else {
                $data=array();
                $session->setFlashdata('error','Serial No. does not exist');
            }
        } else {
            $data=array();
        }
		return view('ware_modify/tracking_modify',$data);
	}

    public function tracking_update()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql_data=$request->getPost();
        $serial_no=$sql_data['serial_no'];
        $data['tracking_no']=$sql_data['tracking_no'];

        $db->table('inventory')->where('serial_no',$serial_no)->update($data);
        $db->table('inventory_trans_d')->where('serial_no',$serial_no)->update($data);
        
        $session->setFlashdata('msg','Tracking No successfully updated');
        return redirect()->to(base_url().'/ware_modify/tracking_modify');
    }

	public function location_modify()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $serial_no=$request->getPost('serial_no');
        
            $sql="select clients.name,inventory.* from inventory,clients where serial_no ='".$serial_no."' limit 1";
            $inventory = $db->query($sql)->getFirstRow(); 
            if(!empty($inventory)) {
                $data["inventory"]=$inventory;
            } else {
                $data=array();
                $session->setFlashdata('error','Serial No. does not exist');
            }
        } else {
            $data=array();
        }
		return view('ware_modify/location_modify',$data);
	}

    public function location_update()
    {
        $session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $sql_data=$request->getPost();
        $serial_no=$sql_data['serial_no'];
        $data['serial_loc']=$sql_data['serial_loc'];

        $db->table('inventory')->where('serial_no',$serial_no)->update($data);
        $db->table('inventory_trans_d')->where('serial_no',$serial_no)->update($data);
        
        $session->setFlashdata('msg','Serial Location successfully updated');
        return redirect()->to(base_url().'/ware_modify/location_modify');
    }

    public function inventory_modify()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        
        $filter="";
        if($request->getPost()!=null) {
            $part_no=$request->getPost('part_no');
            $account_no=$request->getPost('account_no');
        
            if($request->getPost('part_no')!="") $filter.="AND part_no like '".$part_no."%'";  
            if($request->getPost('account_no')!="") $filter.="AND account_no like '".$account_no."%'";
        }
        
		$sql="SELECT * FROM inventory  where 1 ".$filter." order by account_no, part_no";
        $report = $db->query($sql)->getFirstRow(); 
        $data['report']=$report;
        return view('ware_modify/inventory_modify',$data);
    }

}
