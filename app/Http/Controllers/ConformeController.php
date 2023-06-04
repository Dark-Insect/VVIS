<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conforme;

class ConformeController extends Controller
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
            $conforme = Conforme::where('owner_driver','LIKE', "%$search%")->orWhere('apprehending_officers','LIKE', "%$search%")->get();
        }else{
            $conforme = Conforme::all();
        }
        $conforme = compact('conforme','search');
        return view('dashboards.staff.conforme.conforme')->with($conforme);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.staff.conforme.conforme_create');
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
        Conforme::create($input);
        return redirect()->route('conforme')->with('flash_message', 'New Records Addedd!');

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
        $conforme = Conforme::find($id);
        return view('dashboards.staff.conforme.conforme_view')->with('conforme', $conforme);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conforme = Conforme::find($id);
        return view('dashboards.staff.conforme.conforme_update')->with('conforme', $conforme);
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
        $conforme = Conforme::find($id);
        $input = $request->all();
        $conforme->update($input);
        return redirect()->route('conforme')->with('flash_message', 'Records Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conforme::destroy($id);
        return redirect()->route('conforme')->with('flash_message', 'Records deleted!');
    }
}
