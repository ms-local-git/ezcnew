<?php

namespace App\Controllers;

class AjaxController extends BaseController
{

	public function account_check()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');

        $sql1="select * from clients where account_no = '".$id."'";
        
        $data = $db->query($sql1)->getFirstRow(); 
   
		echo json_encode($data);
	}

	public function ref_check()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');

        $sql1="select id from jobs  where reference_no ='".$id. "';";	
        $data = $db->query($sql1)->getFirstRow(); 

        if(!empty($data)) {
            $sql="select count(id)+1 as cnt1 from jobs where reference_no like '".$id."%'";
            $data = $db->query($sql)->getFirstRow(); 

            $ref_no = $id."(".$data->cnt1.")";
        } else {
            $ref_no = null;
        }
   
		echo json_encode($ref_no);
	}

	public function caller_search()
	{
		helper("fun");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');

        $sql="select distinct caller_name  from jobs where client_id = '".get_client_id($id)."';";
        
        $data = $db->query($sql)->getResultArray(); 
   
		$html ="<table class='table'>
				<tr><th>Name</th></tr>";

		$i=0;

		foreach ($data as $d) {
			$i++;
			$html.="<tr>
					<td><a href='javascript:void(0)' onclick='callerName(".$i.")' id='caller_".$i."' data-name='".$d['caller_name']."'>".$d['caller_name']."</a></td>
					</tr>";		
		}

		$html.="</table>";

		return $html;
	}

	public function account_search()
	{
		helper("fun");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');

        $sql="select id,name,account_no,phone1,fax from clients 
		where account_no like '%".$id."%' or name like '%".$id."%' or phone1 like '%".$id."%' or phone2 like '%".$id."%' or fax like '%".$id."%' 
		order by account_no limit 200;";
        
        $data = $db->query($sql)->getResultArray(); 
   
		$html ="<table class='table'>
				<tr>
				<th>Account No</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Fax</th>
				</tr>";

		$i=0;

		foreach ($data as $d) {
			$i++;
			$html.="<tr style='cursor: hand;' onclick='accountName(".$i.")' id='account_".$i."' data-name='".$d['account_no']."'>
					<td>".$d['account_no']."</td>
					<td>".$d['name']."</td>
					<td>".$d['phone1']."</td>
					<td>".$d['fax']."</td>
					</tr>";		
		}

		$html.="</table>";

		return $html;
	}

	public function company_search()
	{
		helper("fun");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');
        $txt=$request->getPost('text');
        $type=$request->getPost('type');
		$data['type']=$type;

        if($txt=="")
			  $sql="select distinct * from c_address where client_id = '".get_client_id($id)."'  order by name limit 200;";
		 else
			  $sql="select distinct * from c_address where client_id = '".get_client_id($id)."' 
			  and (name like '".$txt."%' or address1 like '".$txt."%') order by name limit 200;";
        
        $data['address'] = $db->query($sql)->getResultArray(); 
   
		// $html ="<div class='card-datatable'><table class='datatables-basic table'>
		// 		<thead>
		// 		<tr>
		// 		<th>Name</th>      
		// 		<th>Address 1</th>   
		// 		<th>Address 2</th>     
		// 		<th>Room</th>   
		// 		<th>City</th>   
		// 		<th>Zip</th>  
		// 		<th>Contact Name</th>  
		// 		<th>Phone</th>  
		// 		<th>Ext.</th> 
		// 		<th>Instruction</th>
		// 		</tr>
		// 		</thead>";

		// $i=0;

		// foreach ($data as $d) {
		// 	$i++;
		// 	if($type=='shipping') $onclick='companyName_shipping('.$i.')';
		// 	if($type=='consignee') $onclick='companyName_consignee('.$i.')';

		// 	$html.="<tbody>
		// 			<tr style='cursor: hand;' onclick='".$onclick."' id='address_".$i."' data-id='".$d['id']."'>
		// 			<td>".$d["name"]."</td>
		// 			<td>".$d["address1"]."</td>
		// 			<td>".$d["address2"]."</td>  
		// 			<td>".$d["room"]."</td>
		// 			<td>".$d["city"]."</td>     
		// 			<td>".$d["zip"]."</td>    
		// 			<td>".$d["contact_name"]."</td>   
		// 			<td>".$d["phone"]."</td>  
		// 			<td>".$d["ext"]."</td>   
		// 			<td>".$d["instruction"]."</td>
		// 			</tr>
		// 			</tbody>";		
		// }

		// $html.="</table></div>";

		// return $html;

		return view('jobs/ajaxAddress',$data);
	}

	public function get_address()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $id=$request->getPost('id');

        $sql="select distinct * from c_address where id = '".$id."'";
		
        $data = $db->query($sql)->getFirstRow(); 

		echo json_encode($data);
	}

	public function add_bookmark()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $page = $request->getPost('page');
        $title = $request->getPost('title');
		$user_id = $_SESSION['user_id'];

		
        $sql="select * from bookmark_pages where user_id = '".$user_id."' and page_url = '".$page."'";
        $data = $db->query($sql)->getFirstRow(); 

		if(empty($data)) {
			$sql_data['user_id'] = $user_id;
			$sql_data['page_url'] = $page;
			$sql_data['page_title'] = $title;

			$db->table('bookmark_pages')->insert($sql_data);
			
			$sql="select * from bookmark_pages where user_id = '".$user_id."'";
			$bookmarks = $db->query($sql)->getResultArray(); 
			$_SESSION['bookmarks'] = $bookmarks;

			return 'true';
		} else {
			$sql = "delete from bookmark_pages where user_id = '".$user_id."' and page_url = '".$page."'";
			$db->query($sql);
			
			$sql="select * from bookmark_pages where user_id = '".$user_id."'";
			$bookmarks = $db->query($sql)->getResultArray(); 
			$_SESSION['bookmarks'] = $bookmarks;

			return 'false';
		}

	}

	public function bookmark_check()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();
        
        $page = $request->getPost('page');
		$user_id = $_SESSION['user_id'];

		
        $sql="select * from bookmark_pages where user_id = '".$user_id."' and page_url = '".$page."'";
        $data = $db->query($sql)->getFirstRow(); 

		if(empty($data)) {
			return 'false';
		} else {
			return 'true';
		}

	}

    
}
