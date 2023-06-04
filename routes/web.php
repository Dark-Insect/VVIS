<?php

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OwnerDetailsController;
use App\Http\Controllers\VehicleInformationController;
use App\Http\Controllers\DriversInformationController;
use App\Http\Controllers\MotoVehicleController;
use App\Http\Controllers\TrafficViolationController;
use App\Http\Controllers\ConformeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginSystemController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MotoCashierController;
use App\Http\Controllers\TrafficCashierController;
use App\Http\Controllers\PaymentCashierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return view('welcome');
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin_login',[LoginSystemController::class,'index'])->name('admin');
Route::get('cashier_login',[LoginSystemController::class,'cashier'])->name('cashier');
Route::get('client_login',[LoginSystemController::class,'client'])->name('client');


Route::group(['prefix'=>'admin', 'middleware'=>['Admin','auth','BackPrevention']], function() {
    Route::get('dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/staffs_management',[AdminController::class,'staffs_management'])->name('staffs_management');

    Route::get('/user_accounts_control',[UserController::class, 'index'])->name('users');
    Route::get('/register_user',[UserController::class, 'create'])->name('users.add');
    Route::post('/register_user',[UserController::class, 'store'])->name('users.store');
    Route::delete('/user_accounts_control/{id}',[UserController::class, 'destroy'])->name('users.delete');
    Route::get('users_update/{id}',[UserController::class,'edit'])->name('users.update');
    Route::patch('users_update/{id}',[UserController::class,'update']);

    Route::get('/activity-logs',[AdminController::class, 'logs'])->name('activity.logs');

    Route::get('/registered_users',[AdminController::class,'registered_users'])->name('registered_users');

    Route::get('/cashier',[AdminController::class, 'cashier'])->name('cashier.admin');
});

Route::group(['prefix'=>'cashier','middleware'=>['Cashier','auth','BackPrevention']], function(){
    Route::get('cashier',[CashierController::class,'index'])->name('cashier.dashboard');
    Route::get('/moto_cashier',[MotoCashierController::class,'motoCashier'])->name('moto_cashier');
    Route::get('/traffic_cashier',[TrafficCashierController::class,'trafficCashier'])->name('traffic_cashier');
    Route::get('/payment_cashier',[PaymentCashierController::class,'paymentCashier'])->name('payment_cashier');
    Route::get('/traffic_verification',[TrafficCashierController::class,'traffic'])->name('traffic_verification');
    Route::get('/moto_verification/{id}',[MotoCashierController::class,'moto_verify'])->name('moto_verify');
    Route::patch('moto_verification/{id}',[MotoCashierController::class,'update']);
    Route::get('/traffic_verification/{id}',[TrafficCashierController::class,'traffic_verify'])->name('traffic_verify');
    Route::patch('traffic_verification/{id}',[TrafficCashierController::class,'update']);

});

Route::group(['prefix'=>'client','middleware'=>['Client','auth','BackPrevention']], function(){
    Route::get('dashboard',[ClientController::class,'index'])->name('client.dashboard');
    Route::get('/client_moto',[ClientController::class,'client_moto'])->name('client_moto');
    Route::get('/client_traffic',[ClientController::class,'client_traffic'])->name('client_traffic');
    Route::get('/moto_view/{id}',[ClientController::class,'moto_view'])->name('moto_view');
    Route::get('/traffic_view/{id}',[ClientController::class,'traffic_view'])->name('traffic_view');
    Route::get('/settings',[SettingsController::class,'settings'])->name('settings');
    Route::get('client_profile',[SettingsController::class,'edit'])->name('client.edit');
    Route::patch('client_profile/{id}',[SettingsController::class,'update']);

    Route::get('/client_moto/download-pdf/{id}',[PDFController::class,'client_moto'])->name('client_moto_pdf');
    Route::get('/client_traffic/download-pdf/{id}',[PDFController::class,'client_traffic'])->name('client_traffic_pdf');
});

Route::group(['prefix'=>'staff','middleware'=>['Staff','auth','BackPrevention']], function() {
    Route::get('/dashboard',[StaffController::class, 'index'])->name('staff.dashboard');
    Route::get('/profile',[StaffController::class, 'profile'])->name('staff.profile');
    Route::get('/settings',[StaffController::class, 'settings'])->name('staff.settings');
    Route::get('/owner_details',[OwnerDetailsController::class, 'index'])->name('owner_details');
    Route::get('/vehicle_information',[VehicleInformationController::class, 'index'])->name('vehicle_information');
    Route::get('/drivers_information',[DriversInformationController::class, 'index'])->name('drivers_information');
    Route::get('/moto_vehicle',[MotoVehicleController::class,'index'])->name('moto_vehicle');
    Route::get('traffic_violation', [TrafficViolationController::class, 'index'])->name('traffic_violation');

    Route::get('/owner_details_create',[OwnerDetailsController::class, 'create'])->name('owner_details_create');

    //Route::resource('owner_details', 'OwnerDetailsController');
    Route::post('/owner_details_create', [OwnerDetailsController::class, 'store'])->name('details.store');
    Route::get('owner_details_view/{id}',[OwnerDetailsController::class,'show'])->name('details.view');
    Route::delete('/owner_details/{id}', [OwnerDetailsController::class, 'destroy'])->name('details.destroy');
    Route::get('/owner_details_update/{id}', [OwnerDetailsController::class, 'edit'])->name('details.edit');
    Route::patch('/owner_details_update/{id}', [OwnerDetailsController::class, 'update']);


    Route::get('/vehicle_information_create',[VehicleInformationController::class,'create'])->name('vehicle.create');
    Route::delete('/vehicle_information/{id}',[VehicleInformationController::class,'destroy'])->name('vehicle.delete');
    Route::post('/vehicle_information_create',[VehicleInformationController::class,'store'])->name('vehicle.store');
    Route::get('vehicle_information_update/{id}',[VehicleInformationController::class,'edit'])->name('vehicle.update');
    Route::patch('/vehicle_information_update/{id}',[VehicleInformationController::class,'update']);
    Route::get('/vehicle_information_view/{id}',[VehicleInformationController::class,'show'])->name('vehicle.view');

    Route::get('/drivers_information_create', [DriversInformationController::class, 'create'])->name('drivers.create');
    Route::post('drivers_information_create', [DriversInformationController::class, 'store'])->name('drivers.store');
    Route::delete('/drivers_information/{id}', [DriversInformationController::class, 'destroy'])->name('drivers.destroy');
    Route::get('/drivers_information/{id}',[DriversInformationController::class,'edit'])->name('drivers.update');
    Route::patch('/drivers_information/{id}',[DriversInformationController::class,'update']);
    Route::get('/drivers_information_view/{id}',[DriversInformationController::class,'show'])->name('drivers.view');


    Route::get('/moto_vehicle_create', [MotoVehicleController::class, 'create'])->name('moto.create');
    Route::post('/moto_vehicle_create', [MotoVehicleController::class, 'store'])->name('moto.store');
    Route::delete('/moto_vehicle/{id}', [MotoVehicleController::class, 'destroy'])->name('moto.destroy');
    Route::get('/moto_vehicle_update/{id}',[MotoVehicleController::class, 'edit'])->name('moto.update');
    Route::patch('/moto_vehicle_update/{id}',[MotoVehicleController::class,'update']);
    Route::get('/moto_vehicle_view/{id}',[MotoVehicleController::class,'show'])->name('moto.view');

    Route::get('traffic_violation_create', [TrafficViolationController::class,'create'])->name('traffic.create');
    Route::post('traffic_violation_create',[TrafficViolationController::class,'store'])->name('traffic.store');
    Route::delete('traffic_violation/{id}',[TrafficViolationController::class,'destroy'])->name('traffic.destroy');
    Route::get('traffic_violation_update/{id}',[TrafficViolationController::class,'edit'])->name('traffic.update');
    Route::patch('/traffic_violation_update/{id}',[TrafficViolationController::class,'update']);
    Route::get('/traffic_violation_view/{id}',[TrafficViolationController::class,'show'])->name('traffic.view');

    Route::get('/conforme',[ConformeController::class,'index'])->name('conforme');
    Route::get('conforme_create',[ConformeController::class,'create'])->name('conforme.create');
    Route::post('/conforme_create',[ConformeController::class,'store'])->name('conforme.store');
    Route::get('/conforme_update/{id}',[ConformeController::class,'edit'])->name('conforme.update');
    Route::patch('/conforme_update/{id}',[ConformeController::class,'update']);
    Route::delete('/conforme/{id}',[ConformeController::class,'destroy'])->name('conforme.destroy');
    Route::get('conforme_view/{id}',[ConformeController::class,'show'])->name('conforme.view');

    Route::get('/owner_details/download-pdf',[PDFController::class,'exportPDFowner'])->name('pdf.owner');
    Route::get('/drivers_informations/download-pdf',[PDFController::class,'exportPDFdriver'])->name('pdf.driver');
    Route::get('/vehicle_information/download-pdf',[PDFController::class,'exportPDFvehicle'])->name('pdf.vehicle');
    Route::get('/moto_vehicle/download-pdf',[PDFController::class,'exportPDFmoto'])->name('pdf.moto');
    Route::get('/traffic_violation/download-pdf',[PDFController::class,'exportPDFtraffic'])->name('pdf.traffic');
    Route::get('/conforme/download-pdf',[PDFController::class,'exportPDFconforme'])->name('pdf.conforme');

    Route::get('/moto_vehicle/export-pdf/{id}',[PDFController::class,'motoTicket'])->name('pdf.motoTicket');
    Route::get('/traffic_violation/export-pdf/{id}',[PDFController::class,'trafficTicket'])->name('pdf.trafficTicket');

    Route::get('/payment',[PaymentController::class,'staffindex'])->name('payment.index');
    Route::get('/payment_view_moto/{id}',[PaymentController::class,'payment_view_moto'])->name('payment_view_moto');
    Route::get('/payment_view_traffic/{id}',[PaymentController::class,'payment_view_traffic'])->name('payment_view_traffic');

    Route::get('/moto_vehicle/data',[MotoVehicleController::class,'data'])->name('tables');

});
