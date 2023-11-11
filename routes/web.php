<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('customers', CustomerController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('cars', CarController::class);
Route::resource('motorcycles', MotorcycleController::class);
Route::resource('trucks', TruckController::class);
Route::resource('orders', OrderController::class);

Route::get('/', function () {
    return view('welcome');
});
