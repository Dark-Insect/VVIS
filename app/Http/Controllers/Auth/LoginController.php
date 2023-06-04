<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if( Auth()->user()->user_role == 'Admin'){
            return route('admin.dashboard');

        }elseif( Auth()->user()->user_role == 'Staff'){
            return route('staff.dashboard');

        }elseif( Auth()->user()->user_role == 'Cashier'){
            return route('cashier.dashboard');

        }elseif( Auth()->user()->user_role == 'Client'){
            return route('client.dashboard');

        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'username' =>'required',
            'password' =>'required'

        ]);
        if(auth()->attempt(array('username' =>$input['username'], 'password' => $input['password'])) ){

        if(auth()->user()->user_role == 'Admin'){
            return redirect()->route('admin.dashboard');

        }

        elseif(auth()->user()->user_role == 'Staff'){
            return redirect()->route('staff.dashboard');

        }

        elseif(auth()->user()->user_role == 'Cashier'){
            return redirect()->route('cashier.dashboard');

        }
        elseif(auth()->user()->user_role == 'Client'){
            return redirect()->route('client.dashboard');

        }

        }else{
            return redirect()->route('login')->with('Error', 'Login failed');
        }
    }
}
