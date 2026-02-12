<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserAttendanceModel;
use App\Models\UserModel;
use App\Models\UserAttendanceRequestModel;
use Config\Database;

class UserAttendance extends BaseController
{
    protected $db;
    protected $attendanceModel;
    protected $userModel;
    protected $userAttendanceRequestModel;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->attendanceModel = new UserAttendanceModel();
        $this->userModel = new UserModel();
        $this->userAttendanceRequestModel = new UserAttendanceRequestModel();
    }


    public function index()
    {

        check_login();

        $month = $this->request->getGet('month') ?? date('Y-m');

        $builder = $this->attendanceModel
            ->select('
            user_id,
            SUM(minutes) as total_minutes,
            SUM(day_minutes) as day_minutes,
            SUM(night_minutes) as night_minutes
        ')
            ->where("DATE_FORMAT(check_in, '%Y-%m')", $month);

        if (!is_admin()) {
            $builder->where('user_id', session()->get('user_id'));
        }

        $attendance = $builder
            ->groupBy('user_id')
            ->orderBy('user_id', 'ASC')
            ->findAll();

        return view('attendance/index', [
            'page_title' => 'Attendance',
            'attendance' => $attendance,
            'month'      => $month
        ]);
    }


    public function details($userId)
    {
        if (!self_check($userId) && !is_admin()) {
            return redirect()->to('/unauthorized')->send();
        }
        $month = $this->request->getGet('month') ?? date('Y-m');

        // Day-wise summary
        $days = $this->attendanceModel
            ->select("
            DATE(check_in) as day,
            COUNT(*) as entries,
            SUM(minutes) as total_minutes,
            SUM(day_minutes) as day_minutes,
            SUM(night_minutes) as night_minutes
        ")
            ->where('user_id', $userId)
            ->where("DATE_FORMAT(check_in, '%Y-%m')", $month)
            ->groupBy('DATE(check_in)')
            ->orderBy('day', 'ASC')
            ->findAll();

        return view('attendance/details', [
            'page_title' => 'Monthly Attendance Details',
            'days'       => $days,
            'month'      => $month,
            'userId'     => $userId
        ]);
    }


    public function day($userId)
    {
        if (!self_check($userId) && !is_admin()) {
            return redirect()->to('/unauthorized')->send();
        }
        $date = $this->request->getGet('date');

        if (!$date) {
            return redirect()->back()->with('error', 'Invalid date');
        }

        $records = $this->attendanceModel
            ->where('user_id', $userId)
            ->where('DATE(check_in)', $date)
            ->orderBy('check_in', 'ASC')
            ->findAll();

        return view('attendance/day_details', [
            'page_title' => 'Day Attendance Details',
            'records'    => $records,
            'date'       => $date,
            'userId'     => $userId
        ]);
    }

    public function create()
    {
        check_admin();

        return view('attendance/create', [
            'page_title' => 'Add Attendance',
        ]);
    }


    public function store()
    {
        check_admin();

        $rules = [
            'user_id'  => 'required',
            'check_in' => 'required|valid_date',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->db->transBegin();

        try {

            $insertId = $this->attendanceModel->insert([
                'user_id'   => $this->request->getPost('user_id'),
                'reason'    => $this->request->getPost('reason'),
                'check_in'  => $this->request->getPost('check_in'),
                'pic_in'    => $this->request->getPost('pic_in'),
                'out_type'  => $this->request->getPost('out_type'),
            ]);

            if (!$insertId) {
                throw new \Exception('Failed to add attendance');
            }

            $this->db->transCommit();

            return redirect()->to('/attendance')
                ->with('msg', 'Attendance added successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();

            return redirect()->back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        check_admin();

        $attendance = $this->attendanceModel->find($id);

        if (!$attendance) {
            return redirect()->to('/attendance')
                ->with('error', 'Attendance record not found');
        }

        return view('attendance/edit', [
            'page_title' => 'Edit Attendance',
            'attendance' => $attendance,
        ]);
    }


    public function update($id)
    {
        check_admin();

        $rules = [
            'check_out' => 'required|valid_date',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->db->transBegin();

        try {

            $updated = $this->attendanceModel->update($id, [
                'check_out'       => $this->request->getPost('check_out'),
                'real_check_out'  => $this->request->getPost('real_check_out'),
                'minutes'         => $this->request->getPost('minutes'),
                'day_minutes'     => $this->request->getPost('day_minutes'),
                'night_minutes'   => $this->request->getPost('night_minutes'),
                'old_mintues'     => $this->request->getPost('old_mintues'),
                'new_minutes'     => $this->request->getPost('new_minutes'),
                'pic_out'         => $this->request->getPost('pic_out'),
            ]);

            if ($updated === false) {
                throw new \Exception('Failed to update attendance');
            }

            $this->db->transCommit();

            return redirect()->to('/attendance')
                ->with('msg', 'Attendance updated successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();

            return redirect()->back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }


    public function delete($id)
    {
        check_admin();

        $this->db->transBegin();

        try {

            $deleted = $this->attendanceModel->delete($id);

            if (!$deleted) {
                throw new \Exception('Failed to delete attendance');
            }

            $this->db->transCommit();

            return redirect()->to('/attendance')
                ->with('msg', 'Attendance deleted successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();

            return redirect()->to('/attendance')
                ->with('error', $e->getMessage());
        }
    }


    public function user_desk_time()
    {
        check_admin();

        $users = $this->userModel->select('user_id , user_name')->findAll();
        // dd($users);
        return view('attendance/user_desk_time', [
            'page_title' => '',
            'users' => $users

        ]);
    }

    public function store_attendence()
    {
        // dd($this->request->getPost());

        $rules = [
            'user_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ];


        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()
                ->with('errors', $this->validator
                    ->getErrors());
        }

        try {
            $this->db->transBegin();
            $checkIn = $this->request->getPost('check_in');
            $checkOut = $this->request->getPost('check_out');

            $minutesData = calculate_attendance_minutes($checkIn, $checkOut);
            $insertId = $this->attendanceModel->insert([
                'user_id' => $this->request->getPost('user_id'),
                'check_in' => $this->request->getPost('check_in'),
                'check_out' => $this->request->getPost('check_out'),
                'minutes' => $minutesData['minutes'],
                'day_minutes' => $minutesData['day_minutes'],
                'night_minutes' => $minutesData['night_minutes'],
                'reason' => $this->request->getPost('reason')
            ]);

            if (!$insertId) {
                throw new \Exception('Failed to update attendance');
            }

            $this->db->transCommit();

            return redirect()->to('/attendance')->with('msg', 'Attendance Added Successfully');
        } catch (\Throwable $e) {

            $this->db->transRollback();
            return redirect()->to('attendence')
                ->with('error', $e->getMessage());
        }
    }


    public function requestAttendence($id)
    {

        if ($this->request->getMethod() === 'GET') {

            return view('attendance/request_attendance', ['id' => $id, 'page_title' => 'Request Attendance']);
        }
        $rules = [
            'check_in_date' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',
            'request_notes' => 'required',
        ];

        $req = $this->request;

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        };

        $this->db->transBegin();

        try {
            $checkInDate = $req->getPost('check_in_date');
            $checkDate = \DateTimeImmutable::createFromFormat('Y-m-d', $checkInDate);
            if (!$checkDate) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', ['check_in_date' => 'Invalid check in date.']);
            }

            $today = new \DateTimeImmutable('today');
            $minDate = $today->sub(new \DateInterval('P3D'));
            if ($checkDate < $minDate || $checkDate > $today) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', ['check_in_date' => 'Check in date must be within the last 3 days.']);
            }

            $insertId = $this->userAttendanceRequestModel->checkinRequest([
                'user_id' => $id,
                'check_in_date' => $checkInDate,
                'from_time' => $req->getPost('from_time'),
                'to_time' => $req->getPost('to_time'),
                'request_notes' => $req->getPost('request_notes'),
                'request_status' => 'on_waiting',
            ]);

            //       var_dump($insertId);
            // die();

            if (!$insertId) {
                throw new \Exception('Failed to Update');
            }

            $this->db->transCommit();

            return  redirect()->back('attendance')->with('msg', 'Attendence Request Added');
        } catch (\Throwable $e) {
            $this->db->transRollback();
            return redirect()->to('attendance')->with('errors', $e->getMessage());
        }
    }

    public function reqAttendenceList()
    {
        $data['list'] = $this->userAttendanceRequestModel->getAllRequest();
        $data['page_title']='';
        return view('attendance/request_list', $data);
    }


   public function updateStatus()
{
    check_admin();

    $id   = $this->request->getPost('id');
    $type = $this->request->getPost('type');

    if (!$id || !$type) {
        return $this->response->setJSON([
            'success' => false,
            'msg' => 'Invalid Request'
        ]);
    }

    $allowedTypes = ['accept', 'reject'];
    if (!in_array($type, $allowedTypes)) {
        return $this->response->setJSON([
            'success' => false,
            'msg' => 'Invalid Request Type'
        ]);
    }

    $request = $this->userAttendanceRequestModel->find($id);
    if (!$request) {
        return $this->response->setJSON([
            'success' => false,
            'msg' => 'Request not found'
        ]);
    }

    $status = ($type === 'accept') ? 'Accepted' : 'Rejected';

    $updated = $this->userAttendanceRequestModel->update($id, [
        'request_status' => $status
    ]);

    if ($updated === false) {
        return $this->response->setJSON([
            'success' => false,
            'msg' => 'Failed to update status'
        ]);
    }

    return $this->response->setJSON([
        'success' => true,
        'msg' => "Request {$status} successfully",
        'status' => $status
    ]);
}

}
