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
use Carbon\Carbon;
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

$violationsInDays = Moto::where('created_at', '>=', Carbon::now()->subDays(1))->count();

// Total violations in months
$violationsInMonths = Moto::where('created_at', '>=', Carbon::now()->subMonths(1))->count();

// Total violations in years
$violationsInYears = Moto::where('created_at', '>=', Carbon::now()->subYears(1))->count();

    return view('dashboards.staff.index',
     compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
    'traffic_violation','conforme','payment','violationsInDays', 'violationsInMonths', 'violationsInYears'));
  }
 function profile() {
    return view('dashboards.staff.profile');
  }
 function settings() {
    return view('dashboards.staff.settings');
  }
}
