<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginSystemController extends Controller
{
    public function index(){

        return view('admin_login');
    }
    public function cashier(){
        return view('cashier_login');
    }
    public function client(){
        return view('client_login');
    }
}
