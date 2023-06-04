<?php

namespace App\Http\Controllers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentCashierController extends Controller
{
    public function paymentCashier(){

        $moto_vehicle = Moto::all();
        $traffic_violation = Traffic::all();
        $payment = Payment::all();
        return view("dashboards.cashier.payment_cashier", compact("moto_vehicle", "traffic_violation", "payment"));
    }
}
