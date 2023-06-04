<?php

namespace App\Http\Controllers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Payment;

use Illuminate\Http\Request;

class TrafficCashierController extends Controller
{
    public function trafficCashier(Request $request){

        $search = $request['search'] ?? "";

        if($search!=""){
            $traffic_violation = Traffic::where('name','LIKE', "%$search%")->orWhere('address','LIKE', "%$search%")->get();
        }else{
            $traffic_violation = Traffic::all();
        }
        $traffic_violation= compact('traffic_violation','search');
        return view('dashboards.cashier.traffic_cashier')->with($traffic_violation);
    }

    public function traffic_verify($id){

        $traffic_violation = Traffic::find($id);
        return view('dashboards.cashier.traffic_verification')->with('traffic_violation', $traffic_violation);
    }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $traffic_violation = Traffic::find($id);
        $input = $request->all();
        $traffic_violation->update($input);
        return redirect()->route('traffic_cashier')->with('flash_message', 'Records Updated!');
    }
}
