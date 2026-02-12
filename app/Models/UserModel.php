<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

	protected $primary_key = 'id_1';
	protected $returnType = 'array';
	protected $table = 'users';
	protected $allowedFields = [
		'user_id',
		'user_password',
		'master_password',
		'user_type',
		'role_id',
		'two_hour_popup',
		'user_slevel',
		'page_id',
		'retry',
		'driver_id',
		'user_name',
		'email',
		'sms_email',
		'department',
		'designation',
		'remarks',
		'whatsapp_number',
		'hour_rate_day',
		'hour_rate_night',
		'is_webcam',
		'is_lunch',
		'is_session_show',
		'is_payroll'
	];

	public function createUser(array $data): int
	{
		if (
			empty($data['user_id']) ||
			empty($data['user_password']) ||
			empty($data['role_id'])
		) {
			throw new \Exception('Required user fields missing');
		}

		// Prepare insert data
		$insertData = [
			'user_id'       => $data['user_id'],
			'user_password' => md5($data['user_password']),
			'role_id'       => $data['role_id'],
			'user_name'       => $data['user_name'],

		];

		$userId = $this->insert($insertData);

		if (! $userId) {
			throw new \Exception('Failed to create user account');
		}

		return $userId;
	}
}
