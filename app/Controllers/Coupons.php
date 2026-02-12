<?php

namespace App\Controllers;

class Coupons extends BaseController
{

	public function email_bank()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        if($request->getPost()!=null) {
            $search=$request->getPost('search');
            $search_in=$request->getPost('search_in');

            $filter="";
            if($search!="" && $search_in!="") $filter.=" and ".$search_in." like '".$search."%'";
						
			$sql1 ='select * from gr_email where 1 '.$filter.';';
            $coupons = $db->query($sql1)->getResultArray(); 
            
            $data["coupons"]=$coupons;
        } else {
            $data=array();
        }
		return view('coupons/email_bank',$data);
	}

    public function add_email()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $sql_data = $request->getPost();
        $id = $sql_data['id'];
        unset($sql_data['id']);

        if(empty($id)) {

            $db->table('gr_email')->insert($sql_data);
            $session->setFlashdata('msg','Added New Email');
            return redirect()->to(base_url().'/coupons/email_bank');

        } else {

            $db->table('gr_email')->where('id',$id)->update($sql_data);
            $session->setFlashdata('msg','Email Updated Successfully');
            return redirect()->to(base_url().'/coupons/email_bank');

        }
	}

    public function email_info()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPost('id');

        $sql1 ='select * from gr_email where id="'.$id.'"';
        $coupons = $db->query($sql1)->getFirstRow(); 

        echo json_encode($coupons);
    }

    public function delete_email()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $id = $request->getPost('id');

        $db->table('gr_email')->where('id',$id)->delete();
        $session->setFlashdata('msg','Email Deleted Successfully');
        return redirect()->to(base_url().'/coupons/email_bank');

	}

    public function email_delete_selected() {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        $max_chk = $request->getPost('max_chk');
        
        for($i=0;$i<=$max_chk;$i++) {	
            $chk = $request->getPost('chk'.$i);

            if($chk!="") {

                $db->table('gr_email')->where('id',$chk)->delete();
                
            } 
	    }
        
        $session->setFlashdata('msg','Email Deleted Successfully');
        return redirect()->to(base_url().'/coupons/email_bank');
    }
    
}
