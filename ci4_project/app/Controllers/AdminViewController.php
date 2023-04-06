<?php

namespace App\Controllers;

use App\Models\ParkingMonitorModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class AdminViewController extends Controller
{
    public function index()
    {
        $parkingMonitorModel = new ParkingMonitorModel();
        $usersModel = new UserModel();

        $infos = $parkingMonitorModel->findAll();

        // Loop through each vehicle to retrieve the user's rfid_no from the users database
        foreach ($infos as &$info) {
            $user = $parkingMonitorModel->find($info['user_id']);
            $userDetails = $usersModel->find($user['user_id']);
            $info['rfid_no'] = $userDetails['rfid_no'];
        }

        $data['info'] = $infos;
        return view('AdminViewMonitor', $data);
    }
}