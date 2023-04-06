<?php
namespace App\Controllers;

use App\Models\ParkingSlotModel;
use CodeIgniter\Controller;

class SlotsController extends Controller
{
    public function index()
    {
        $data['result'] = (new ParkingSlotModel())->findAll();
        return view('SlotsView', $data);
    }
}
