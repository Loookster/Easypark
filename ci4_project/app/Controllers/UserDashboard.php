<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserDashboard extends Controller
{
    public function index()
    {
        $session = session();
        $user_id = $session->get('user_id');
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        return view('DashboardUser', $data);
    }
}

