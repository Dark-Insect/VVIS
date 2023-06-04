<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Vehicle;
use App\Models\Drivers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Conforme;
use App\Models\Payment;


class AdminController extends Controller
{
  public function index() {

    $users = User::with("users")->count();
    $owner_details = Owner::with("owner_details")->count();
    $vehicle_information = Vehicle::with("vehicle_information")->count();
    $drivers_information = Drivers::with("drivers_information")->count();
    $moto_vehicle = Moto::with("moto_vehicle")->count();
    $traffic_violation = Traffic::with("traffic_violation")->count();
    $conforme = Conforme::with("conforme")->count();
    $payment = Payment::with("payment")->count();
    return view('dashboards.admin.index',
     compact('owner_details','vehicle_information','payment','drivers_information','moto_vehicle',
    'traffic_violation','conforme','users'));
      }

      public function logs(){

        $logs = ActivityLog::orderBy('created_at', 'desc')->get();

        return view('activity_logs.index', ['logs' => $logs]);
      }

    public function profile() {
        return view('dashboards.admin.profile');
      }
    public function settings() {
        return view('dashboards.admin.settings');
      }
      public function registered_users(Request $request){

        $search = $request['search'] ?? "";

        if($search!=""){
            $users = User::where('name','LIKE', "%$search%")->orWhere('email','LIKE', "%$search%")->get();
        }else{
            $users = User::all();
        }
        $users = compact('users','search');
        return view('dashboards.admin.registered_users')->with($users);
      }
      public function staffs_management(){

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
        return view('dashboards.admin.staffs_management',
         compact('owner_details','vehicle_information','drivers_information','moto_vehicle',
        'traffic_violation','conforme','payment'));
      }
   public function cashier(){

    $moto_vehicle = Moto::all();
    $traffic_violation = Traffic::all();
    $payment = Payment::all();
    return view("dashboards.admin.cashier", compact("moto_vehicle", "traffic_violation", "payment"));

   }
}
