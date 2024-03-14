<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;

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


Route::post('register',[RegisterController::class,'store']);
Route::get('/thanks', [RegisterController::class, 'thanks']);
Route::post('login',[AuthController::class,'store']);
Route::post('logout',[AuthController::class,'destroy']);

Route::get('/', [RestaurantController::class, 'index']);
Route::get('/search', [RestaurantController::class, 'search']);
Route::get('/detail/{restaurant}',[RestaurantController::class, 'detail']);

Route::post('/reservethanks',[ReservationController::class,'store']);

Route::get('/beforelogin',[NavigationController::class,'showNavBeforeLogin']);
Route::get('/afterlogin',[NavigationController::class,'showNavAfterLogin']);

Route::get('/mypage',[UserController::class,'showMypage']);
Route::delete('/mypage/delete', [ReservationController::class,'destroy'])->name('reservations.destroy');
Route::patch('/mypage/update', [ReservationController::class, 'update'])->name('reservations.update');

Route::post('/favorite/{restaurantId}', [FavoriteController::class, 'store'])->name('favorite');
Route::delete('/unfavorite/{restaurantId}', [FavoriteController::class, 'destroy'])->name('unfavorite');
