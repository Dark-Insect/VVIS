<?php

namespace App\Http\Controllers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Client;
use App\Models\User;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $moto_vehicle = Moto::all();
        $traffic_violation = Traffic::all();
        $users = User::all();
        return view("dashboards.client.index", compact("moto_vehicle","users", "traffic_violation",));

    }

    public function moto_view($id){

        $moto_vehicle = Moto::find($id);
        $users = User::all();
        return view('dashboards.client.moto_view',compact("moto_vehicle","users",));
    }

    public function traffic_view($id){
        $traffic_violation = Traffic::find($id);
        $users = User::all();
        return view('dashboards.client.traffic_view',compact("users","traffic_violation",));
    }

    public function edit(){

        $users = User::all();
        return view('dashboards.client.settings')->with('users',$users);

    }
    public function client_moto(Request $request){

        $search = $request['search'] ?? "";

        if($search!=""){
            $moto_vehicle = Moto::where('ownerofthevehicle','LIKE', "%$search%")->orWhere('completeaddress','LIKE', "%$search%")
            ->orWhere('completenameofthedriver','LIKE', "%$search%")->get();
        }else{
            $moto_vehicle = Moto::all();
        }
        $moto_vehicle = compact('moto_vehicle','search');
        $moto_vehicle = Moto::all();
        $traffic_violation = Traffic::all();
        $users = User::all();
        return view("dashboards.client.client_moto", compact("moto_vehicle","users", "traffic_violation",));
    }
    public function client_traffic(){

        $traffic_violation = Traffic::all();
        $users = User::all();
        return view("dashboards.client.client_traffic", compact("users","traffic_violation",));
    }
}

//$moto_vehicle = Moto::find($id);
        //return view('dashboards.client.index')->with('moto_vehicle', $moto_vehicle);
