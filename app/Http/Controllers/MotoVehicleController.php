<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Moto;
use DataTables;
use Illuminate\Validation\Rule;


class MotoVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $moto_vehicle = Moto::select(['ownerofthevehicle', 'completeaddress']); // Add other columns as needed

        return DataTables::of($moto_vehicle)->make(true);
    }

    public function index(Request $request)
    {

        $search = $request['search'] ?? "";

        if($search!=""){
            $moto_vehicle = Moto::where('ownerofthevehicle','LIKE', "%$search%")->orWhere('completeaddress','LIKE', "%$search%")
            ->orWhere('completenameofthedriver','LIKE', "%$search%")->get();
        }else{
            $moto_vehicle = Moto::all();
        }
        $moto_vehicle = compact('moto_vehicle','search',);

        return view('dashboards.staff.moto_vehicle.moto_vehicle')->with($moto_vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.moto_vehicle.moto_vehicle_create');
    }
    public function autofill(Request $request)
    {
        $mvirno = $request->input('mvirno');

        $moto = Moto::where('mvirno', $mvirno)->first();


        if ($moto) {
            $response = [
                'success' => true,
                'data' => [
                    'owner' => $moto->ownerofthevehicle,
                    'telephonenumber' => $moto->telephonenumber,
                    'completeaddress' => $moto->completeaddress,
                    'completenameofthedriver' => $moto->completenameofthedriver,
                    'license_number' => $moto->license_number,
                    'dlrno' => $moto->dlrno,
                    'mvplateno' => $moto->mvplateno,
                    'makeofthevehicle' => $moto->makeofthevehicle,
                    'typeofthebody' => $moto->typeofthebody,
                    'yearmodel' => $moto->yearmodel,
                    'motono' => $moto->motono,
                    'chassisnumber' => $moto->chassisnumber,

                    // Add other fields to populate as needed
                ]
            ];
        } else {
            $response = [
                'success' => false,
                'data' => null
            ];
        }
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mvirno' => [
                'required',
                'numeric',
                Rule::unique(Moto::class, 'mvirno'),
            ],
            // Add validation rules for other fields here
        ]);


        $input = $request->all();
        $violations = $input['violations'];
        $vehicle = $input['vehicle'];
        $acknowledging = $input['acknowledging'];
        $apprehending = $input['apprehending'];

        $input['acknowledging'] = implode(',',$acknowledging);
        $input['apprehending'] = implode(',',$apprehending);
        $input['violations'] = implode(',',$violations);
        $input['vehicle'] = implode(',',$vehicle);

        Moto::create($input);
        return redirect()->route('moto_vehicle')->with('flash_message', 'Records Addedd!');

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
        $moto_vehicle = Moto::find($id);
        return view('dashboards.staff.moto_vehicle.moto_vehicle_view')->with('moto_vehicle',$moto_vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moto_vehicle = Moto::find($id);
        return view('dashboards.staff.moto_vehicle.moto_vehicle_update')->with('moto_vehicle', $moto_vehicle);
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
        $input = $request->all();
        $violations = $input['violations'];
        $vehicle = $input['vehicle'];
        $acknowledging = $input['acknowledging'];
        $apprehending = $input['apprehending'];

        $input['acknowledging'] = implode(',',$acknowledging);
        $input['apprehending'] = implode(',',$apprehending);
        $input['violations'] = implode(',',$violations);
        $input['vehicle'] = implode(',',$vehicle);
        
        $moto_vehicle = Moto::find($id);
        $input = $request->all();
        $moto_vehicle->update($input);
        return redirect()->route('moto_vehicle')->with('flash_message', 'Records Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moto::destroy($id);
        return redirect()->route('moto_vehicle')->with('flash_message', 'Records deleted!');
    }
}
