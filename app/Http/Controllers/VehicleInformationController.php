<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        if($search!=""){
            $vehicle_information = Vehicle::where('tagstate','LIKE', "%$search%")->orWhere('id','LIKE', "%$search%")->get();
        }else{
            $vehicle_information = Vehicle::all();
        }
        $vehicle_information = compact('vehicle_information','search');
        return view('dashboards.staff.vehicle_information.vehicle_information')->with($vehicle_information);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.vehicle_information.vehicle_information_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Vehicle::create($input);
        return redirect()->route('vehicle_information')->with('flash_message', 'New Record Added!');

        if($input){
            return response()->json([
                "Message" => "Records created successfully"]);
        }else{
            return response()->json([
                "Message" => "Error"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle_information = Vehicle::find($id);
        return view('dashboards.staff.vehicle_information.vehicle_information_view')->with('vehicle_information', $vehicle_information);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle_information = Vehicle::find($id);
        return view('dashboards.staff.vehicle_information.vehicle_information_update')->with('vehicle_information', $vehicle_information);
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
        $vehicle_information = Vehicle::find($id);
        $input = $request->all();
        $vehicle_information->update($input);
        return redirect()->route('vehicle_information')->with('flash_message', 'Records Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehicle::destroy($id);
        return redirect()->route('vehicle_information');
    }
}
