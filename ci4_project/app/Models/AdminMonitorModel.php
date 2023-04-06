<?php

namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'rfid_no';
    protected $allowedFields = ['rfid_no', 'entry_time', 'exit_time', 'flag'];
}