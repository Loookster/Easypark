<?php 

namespace App\Controllers;
use App\Models\ParkingMonitorModel;
use CodeIgniter\Controller;


class ParkingMonitor extends Controller{

    public function index()
    {
        $model = new ParkingMonitorModel();
        $data['entries'] = $model->orderBy('entry_time', 'DESC')->findAll();
        $data['exits'] = $model->orderBy('exit_time', 'DESC')->findAll();

        return view('ParkingMonitorView', $data);
    }

}