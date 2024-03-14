<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Restaurant;

class FavoriteController extends Controller
{
    public function store($restaurantId)
    {
        $user = \Auth::user();
        if (!$user->is_favorite($restaurantId)) {
            $user->favorite_restaurants()->attach($restaurantId);
        }
        return back();
    }

    public function destroy($restaurantId)
    {
        $user = \Auth::user();
        if ($user->is_favorite($restaurantId)) {
            $user->favorite_restaurants()->detach($restaurantId);
        }
        return back();
    }
}
