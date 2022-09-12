<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|s
*/


Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/{id}', [ReservationController::class, 'show']);
Route::get('/trips', [TripController::class, 'index']);
Route::get('/trips/{country}', [TripController::class, 'show']);
Route::get('/trips/{country}/{city}/{date}');
