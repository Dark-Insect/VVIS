<?php

use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\Auth;
use App\Models\Owner;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/dashboard',[StaffController::class, 'index'])->name('staff.dashboard');
Route::get('/owner_details',[OwnerDetailsController::class, 'index'])->name('owner_details');
Route::get('/vehicle_information',[VehicleInformationController::class, 'index'])->name('vehicle_information');
Route::get('/drivers_information',[DriversInformationController::class, 'index'])->name('drivers_information');
Route::get('/moto_vehicle',[MotoVehicleController::class,'index'])->name('moto_vehicle');
Route::get('traffic_violation', [TrafficViolationController::class, 'index'])->name('traffic_violation');

Route::get('/owner_details_create',[OwnerDetailsController::class, 'create'])->name('owner_details_create');
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
