<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class UserController extends Controller
{
    public function showMypage(){
        if (Auth::check()){
            $user = Auth::user();
            $userName = $user->name;
            $reservations = $user->reservations;
            $favoriteRestaurants = $user->favorite_restaurants()->orderBy('created_at', 'desc')->get();

            return view('mypage',[
                'userName' => $userName,
                'reservations' => $reservations,
                'favoriteRestaurants' => $favoriteRestaurants,
            ]);
        } else {
            return redirect('/login');
        }

    }

    public function showFavorites()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $favoriteRestaurants = $user->favorite_restaurants;
            return view('mypage', ['favoriteRestaurants' => $favoriteRestaurants]);
        } else {
            return redirect('/login');
        }
    }
}
