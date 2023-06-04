<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traffic;

class TrafficViolationController extends Controller
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
            $traffic_violation = Traffic::where('name','LIKE', "%$search%")->orWhere('address','LIKE', "%$search%")->get();
        }else{
            $traffic_violation = Traffic::all();
        }
        $traffic_violation= compact('traffic_violation','search');
        return view('dashboards.staff.traffic_violation.traffic_violation')->with($traffic_violation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.traffic_violation.traffic_violation_create');
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
        Traffic::create($input);
        return redirect()->route('traffic_violation')->with('flash_message', 'Records Addedd!');

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
        $traffic_violation = Traffic::find($id);
        return view('dashboards.staff.traffic_violation.traffic_violation_view')->with('traffic_violation', $traffic_violation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traffic_violation = Traffic::find($id);
        return view('dashboards.staff.traffic_violation.traffic_violation_update')->with('traffic_violation', $traffic_violation);
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
        return redirect()->route('traffic_violation')->with('flash_message', 'Records Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Traffic::destroy($id);
        return redirect()->route('traffic_violation')->with('flash_message', 'Records deleted!');
    }
}
