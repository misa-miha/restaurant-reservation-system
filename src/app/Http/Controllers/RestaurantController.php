<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Prefecture;
use App\Models\Genre;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $prefectures = Prefecture::all();
        $genres = Genre::all();
        return view('index', compact('restaurants','genres','prefectures'));
    }

    public function search(Request $request)
    {
        $restaurants = Restaurant::with('prefecture','genre')->PrefectureSearch($request->prefecture_id)->GenreSearch($request->genre_id)->KeywordSearch($request->keyword)->get();
        $prefectures = Prefecture::all();
        $genres = Genre::all();

        return view('index', compact('restaurants','genres','prefectures'));
    }

    public function detail(Restaurant $restaurant)
    {
        $data = [
            'item'=>$restaurant,
        ];
        return view('detail', $data);
    }
}
