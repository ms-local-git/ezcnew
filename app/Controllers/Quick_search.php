<?php

namespace App\Controllers;

class Quick_search extends BaseController
{

    public function index()
    {
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

        if($request->getPost()!=null) {
            $search = $request->getPost('search');

            $redirect_url="";

            // job search
            $sql = "select * from jobs where job_no='".$search."' or reference_no='".$search."'";
            $result = $db->query($sql)->getFirstRow(); 

            if(!empty($result)) {
                $redirect_url = base_url().'/jobs';
            } else {
                // clients search
                $sql = "select * from clients where account_no='".$search."'";
                $result = $db->query($sql)->getFirstRow(); 

                if(!empty($result)) {
                    $redirect_url = base_url()."/clients/editclient?id=".$result->id;
                } else {
                    // driver search
                    $sql = "select * from drivers where code='".$search."'";
                    $result = $db->query($sql)->getFirstRow(); 

                    if(!empty($result)) {
                        $redirect_url = base_url()."/d_info/driver_edit?id=".$result->id;
                    } else {
                        // agent search
                        $sql = "select * from agents where code='".$search."'";
                        $result = $db->query($sql)->getFirstRow(); 

                        if(!empty($result)) {
                            $redirect_url = base_url()."/agents/edit/".$result->id;
                        }
                    }
                }
            }

            // print_r($result);
            // die($sql);

            if($redirect_url=="")
                return "false";
            else 
                echo json_encode($redirect_url);

        } else {
            return false;
        }
    }

}