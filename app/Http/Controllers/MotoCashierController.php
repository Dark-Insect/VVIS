<?php

namespace App\Http\Controllers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Payment;


use Illuminate\Http\Request;

class MotoCashierController extends Controller
{
    public function motoCashier(Request $request){

        $search = $request['search'] ?? "";

        if($search!=""){
            $moto_vehicle = Moto::where('ownerofthevehicle','LIKE', "%$search%")->orWhere('completeaddress','LIKE', "%$search%")
            ->orWhere('completenameofthedriver','LIKE', "%$search%")->get();
        }else{
            $moto_vehicle = Moto::all();
        }
        $moto_vehicle = compact('moto_vehicle','search');
        return view('dashboards.cashier.moto_cashier')->with($moto_vehicle);
    }
    public function moto_verify($id){

        $moto_vehicle = Moto::find($id);
        return view('dashboards.cashier.moto_verification')->with('moto_vehicle', $moto_vehicle);
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
        $moto_vehicle = Moto::find($id);
        $input = $request->all();
        $moto_vehicle->update($input);
        return redirect()->route('moto_cashier')->with('flash_message', 'Records Updated!');
    }
}
