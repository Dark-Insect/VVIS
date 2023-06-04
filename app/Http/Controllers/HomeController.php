<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Auth;
use App\Models\Owner;
use App\Models\Vehicle;
use App\Models\Drivers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Conforme;
use App\Models\User;
use App\Models\Payment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if( Auth::check() && Auth::user()->user_role == 'Admin'){

            $users = User::with("users")->count();
            $owner_details = Owner::with("owner_details")->count();
            $vehicle_information = Vehicle::with("vehicle_information")->count();
            $drivers_information = Drivers::with("drivers_information")->count();
            $moto_vehicle = Moto::with("moto_vehicle")->count();
            $traffic_violation = Traffic::with("traffic_violation")->count();
            $conforme = Conforme::with("conforme")->count();
            $payment = Payment::with("payment")->count();
            return view('dashboards.admin.index',
             compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
            'traffic_violation','conforme','users','payment'));
        }
        elseif( Auth::check() && Auth::user()->user_role == 'Staff'){

            $owner_details = Owner::with("owner_details")->count();
            $vehicle_information = Vehicle::with("vehicle_information")->count();
             $drivers_information = Drivers::with("drivers_information")->count();
             $moto_vehicle = Moto::with("moto_vehicle")->count();
            $traffic_violation = Traffic::with("traffic_violation")->count();
            $conforme = Conforme::with("conforme")->count();
            $payment = Payment::with("payment")->count();
            return view('dashboards.staff.index', compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
            'traffic_violation','conforme','payment'));
        }
        elseif( Auth::check() && Auth::user()->user_role == 'Cashier'){

            $owner_details = Owner::with("owner_details")->count();
            $vehicle_information = Vehicle::with("vehicle_information")->count();
             $drivers_information = Drivers::with("drivers_information")->count();
              $moto_vehicle = Moto::with("moto_vehicle")->count();
            $traffic_violation = Traffic::with("traffic_violation")->count();
            $conforme = Conforme::with("conforme")->count();
            $payment = Payment::with("payment")->count();
            return view('dashboards.cashier.index', compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
            'traffic_violation','conforme','payment'));
        }
        elseif( Auth::check() && Auth::user()->user_role == 'Client'){

            $users = User::with("users")->count();
            $owner_details = Owner::with("owner_details")->count();
            $vehicle_information = Vehicle::with("vehicle_information")->count();
            $drivers_information = Drivers::with("drivers_information")->count();
            $moto_vehicle = Moto::with("moto_vehicle")->count();
            $traffic_violation = Traffic::with("traffic_violation")->count();
            $conforme = Conforme::with("conforme")->count();
            $payment = Payment::with("payment")->count();
            return view('dashboards.client.index',
             compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
            'traffic_violation','conforme','users','payment'));
        }
    }

}
