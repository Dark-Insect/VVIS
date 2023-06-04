<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drivers;

class DriversInformationController extends Controller
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
            $drivers_information = Drivers::where('name','LIKE', "%$search%")->orWhere('address','LIKE', "%$search%")->get();
        }else{
            $drivers_information = Drivers::all();
        }
        $drivers_information = compact('drivers_information','search');
        return view('dashboards.staff.drivers_information.drivers_information')->with($drivers_information);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.drivers_information.drivers_information_create');
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
        Drivers::create($input);
        return redirect()->route('drivers_information')->with('flash_message', 'Records Addedd!');

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
        $drivers_information = Drivers::find($id);
        return view('dashboards.staff.drivers_information.drivers_information_view')->with('drivers_information',$drivers_information);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivers_information = Drivers::find($id);
        return view('dashboards.staff.drivers_information.drivers_information_update')->with('drivers_information', $drivers_information);
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
        $drivers_information = Drivers::find($id);
        $input = $request->all();
        $drivers_information->update($input);
        return redirect()->route('drivers_information')->with('flash_message', 'Records Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drivers::destroy($id);
        return redirect()->route('drivers_information')->with('flash_message', 'Records deleted!');
    }
}
