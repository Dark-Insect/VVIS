<?php

namespace App\Http\Controllers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Payment;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function staffindex()

    {
        $moto_vehicle = Moto::all();
        $traffic_violation = Traffic::all();
        $payment = Payment::all();
        return view("dashboards.staff.payment.payment", compact("moto_vehicle", "traffic_violation", "payment"));
    }

    public function payment_view_moto($id){
        $moto_vehicle = Moto::find($id);
        $traffic_violation = Traffic::find($id);
        $payment = Payment::all();
        return view("dashboards.staff.payment.payment_view_moto", compact("moto_vehicle", "traffic_violation", "payment"));
    }

    public function payment_view_traffic($id){
        $moto_vehicle = Moto::find($id);
        $traffic_violation = Traffic::find($id);
        $payment = Payment::all();
        return view("dashboards.staff.payment.payment_view_traffic", compact("moto_vehicle", "traffic_violation", "payment"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
