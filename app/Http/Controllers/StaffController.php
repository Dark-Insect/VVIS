<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Vehicle;
use App\Models\Drivers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Conforme;
use App\Models\Payment;
class StaffController extends Controller
{
 function index() {

    $owner_details = Owner::with("owner_details")->count();
    $vehicle_information = Vehicle::with("vehicle_information")->count();
    $drivers_information = Drivers::with("drivers_information")->count();
    $moto_vehicle = Moto::with("moto_vehicle")->count();
    $traffic_violation = Traffic::with("traffic_violation")->count();
    $conforme = Conforme::with("conforme")->count();
    $payment = Payment::with("payment")->count();

    $moto_vehicle = Moto::sum('amount');
    $traffic_violation = Traffic::sum('amount');

$payment = $moto_vehicle + $traffic_violation;

    return view('dashboards.staff.index',
     compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
    'traffic_violation','conforme','payment'));
  }
 function profile() {
    return view('dashboards.staff.profile');
  }
 function settings() {
    return view('dashboards.staff.settings');
  }
}
