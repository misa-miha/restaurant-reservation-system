<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\NavigationController;

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


Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/', [RestaurantController::class, 'index']);
Route::get('/search', [RestaurantController::class, 'search']);
Route::get('/detail/{restaurant}',[RestaurantController::class, 'detail']);

Route::post('/reservethanks',[ReservationController::class,'store']);

Route::get('/beforelogin',[NavigationController::class,'showNavBeforeLogin']);
Route::get('/afterlogin',[NavigationController::class,'showNavAfterLogin']);