<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerDetailsController extends Controller
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
            $owner_details = Owner::where('report_identifier','LIKE', "%$search%")->orWhere('id','LIKE', "%$search%")->get();
        }else{
            $owner_details = Owner::all();
        }
        $owner_details = compact('owner_details','search');
        return view('dashboards.staff.owner_details.owner_details')->with($owner_details);

        $owner_details = Owner::all();
        if($owner_details->count() > 0){
            return response()->json([
                'status' => '200',
                'owner_details' => $owner_details
            ], 200);
        }else{
            return response()->json([
                'status' => '404',
                'message' => 'No Records Found'
            ], 404);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.owner_details.owner_details_create');
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
        Owner::create($input);
        return redirect()->route('owner_details')->with('flash_message', 'New Record Added!');

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
        $owner_details = Owner::find($id);
        return view('dashboards.staff.owner_details.owner_details_view')->with('owner_details', $owner_details);

        if($owner_details){
            return response()->json([
                'status' => '200',
                'owner_details' => $owner_details,
            ], 200);
        }else{
            return response()->json([
                'status' => '404',
                'message' => 'Records not found!'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner_details = Owner::find($id);
        if($owner_details){
            return response()->json([
                'status' => '200',
                'owner_details' => $owner_details,
            ], 200);
        }else{
            return response()->json([
                'status' => '404',
                'message' => 'Records not found!'
            ], 404);
        }
        return view('dashboards.staff.owner_details.owner_details_update')->with('owner_details', $owner_details);
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
        $owner_details = Owner::find($id);
        $input = $request->all();
        $owner_details->update($input);
        return redirect()->route('owner_details')->with('flash_message', 'Records Updated!');


        if($input){

            return response()->json([
                "Message" => "Records Updated successfully"]);
        }else{
            return response()->json([
                "Message" => "Error"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner_details = Owner::find($id);
        Owner::destroy($id);
        $owner_details->delete();
        return redirect()->route('owner_details');

        if($owner_details){

            return response()->json([
                "Message" => "Records Deleted successfully"]);
        }else{
            return response()->json([
                "Message" => "Error"
            ]);
        }
    }
}
