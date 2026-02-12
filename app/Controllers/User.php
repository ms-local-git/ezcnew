<?php

namespace App\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;

class User extends BaseController
{
	public function __construct() {}

	public function index()
	{
		$db = \Config\Database::connect();
		$user = $db->table('users u')
			->select('u.*, r.name as role_name')
			->join('roles r', 'r.id = u.role_id', 'left')
			->get()
			->getResultArray();
		// echo '<pre>'; print_r($user);die;
		$data["user"] = $user;
		return view('user/listing', $data);
	}
	public function add()
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->findAll();
		return view('user/user', $data);
	}

	private function resolveRoleId(): int
	{
		$roleModel = new RoleModel();
		$postedRoleId = (int) ($this->request->getVar('role_id') ?? 0);
		if ($postedRoleId > 0) {
			return $postedRoleId;
		}

		$userType = trim((string) $this->request->getVar('user_type'));
		if ($userType !== '') {
			$candidates = array_unique([
				$userType,
				strtolower($userType),
				ucfirst(strtolower($userType)),
				str_replace('administrator', 'admin', strtolower($userType)),
				str_replace('admin', 'administrator', strtolower($userType)),
			]);

			foreach ($candidates as $candidate) {
				$matchedRoleId = $roleModel->getIdBySlugOrName($candidate);
				if (! empty($matchedRoleId)) {
					return (int) $matchedRoleId;
				}
			}
		}

		$userId = (string) $this->request->getVar('user_id');
		if ($userId !== '') {
			$existing = (new UserModel())->where('user_id', $userId)->first();
			if (! empty($existing['role_id'])) {
				return (int) $existing['role_id'];
			}
		}

		$fallback = $roleModel->orderBy('id', 'ASC')->first();
		return (int) ($fallback['id'] ?? 0);
	}

	private function getUserFormData(bool $includeUserId = true): array
	{
		$data = [
			'master_password' => md5((string) $this->request->getVar('master_password')),
			'user_type'       => $this->request->getVar('user_type'),
			'user_name'       => $this->request->getVar('user_name'),
			'email'           => $this->request->getVar('email'),
			'department'      => $this->request->getVar('department'),
			'designation'     => $this->request->getVar('designation'),
			'remarks'         => $this->request->getVar('remarks'),
			'driver_id'       => $this->request->getVar('driver_id'),
			'two_hour_popup'  => $this->request->getVar('two_hour_popup') ? 1 : 0,
			'sms_email'       => $this->request->getVar('sms_email'),
			'user_slevel'     => (int) ($this->request->getVar('user_slevel') ?? 0),
			'retry'           => (int) ($this->request->getVar('retry') ?? 0),
			'is_webcam'       => (int) ($this->request->getVar('is_webcam') ?? 0),
			'is_lunch'        => (int) ($this->request->getVar('is_lunch') ?? 0),
			'is_session_show' => (int) ($this->request->getVar('is_session_show') ?? 0),
			'whatsapp_number' => $this->request->getVar('whatsapp_number'),
			'hour_rate_day'   => $this->request->getVar('hour_rate_day'),
			'hour_rate_night' => $this->request->getVar('hour_rate_night'),
			'is_payroll'      => (int) ($this->request->getVar('is_payroll') ?? 0),
			'page_id'         => (int) ($this->request->getVar('page_id') ?? 0),
			'role_id'         => $this->resolveRoleId(),
		];

		if (!empty($this->request->getVar('user_password'))) {
			$data['user_password']   = md5((string) $this->request->getVar('user_password'));
		}


		if ($includeUserId) {
			$data['user_id'] = $this->request->getVar('user_id');
		}

		return $data;
	}


	public function create()
	{
		$user = new UserModel();
		$user->save($this->getUserFormData(true));
		return redirect()->to(base_url('user'));
	}

	public function edit($id)
	{
		$userModel = new UserModel();
		$roleModel = new RoleModel();
		$data['row'] = $userModel->where('user_id', $id)->first();
		$data['roles'] = $roleModel->findAll();
		// print_r($data); die;
		return view('user/edit', $data);
	}

	// public function update()
	// {
	// 	$userid = $this->request->getVar('user_id');
	// 	$data = $this->getUserFormData(false);
	// 	$user = new UserModel();
	// 	$user->where('user_id', $userid)->set($data)->update();

	// 	return redirect()->to(base_url('user'));
	// }

	public function update($id)
	{	

		$userid = $this->request->getVar('user_id');
		$data = $this->getUserFormData(true);
		// dd($data);
		$user = new UserModel();
		$user->where('id_1 ', $id)->set($data)->update();

		return redirect()->to(base_url('user'));
	}


	public function profile($id)
	{
		$user = new UserModel();
		$data['row'] = $user->where('user_id', $id)->first();
		// print_r($data); die;
		return view('user/change', $data);
	}
	public function Changep($user_id = null)
	{
		$user = new UserModel();

		$this->session = \Config\Services::session();
		$id = $this->request->getVar('user_id');




		$old_pass = md5($this->request->getVar('cpassword'));
		$new_pass = md5($this->request->getVar('npassword'));
		$confirm_pass = md5($this->request->getVar('nmpassword'));

		$file   = $this->request->getFile('profile');
		if ($file->isValid() && ! $file->hasMoved()) {
			$prof_img = $file->getRandomName();
			echo $file->move('./assets/uploads/', $prof_img);
		}



		$id = $this->request->getVar('user_id');
		$data = array(
			'user_password' 		        => $new_pass,
			'master_password' 				    => $confirm_pass,

		);
		echo '<pre>';
		print_r($data);
		$user->update($id, $data);
		return redirect()->to(base_url('login'));
	}
}
