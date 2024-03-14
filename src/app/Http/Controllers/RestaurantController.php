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
        $query = Restaurant::with('prefecture', 'genre');

        if ($request->filled('prefecture_id')) {
            $query->PrefectureSearch($request->prefecture_id);
        }

        if ($request->filled('genre_id')) {
            $query->GenreSearch($request->genre_id);
        }

        if ($request->filled('keyword')) {
            $query->KeywordSearch($request->keyword);
        }

        if (!$request->filled('prefecture_id') && !$request->filled('genre_id') && !$request->filled('keyword')) {
            $restaurants = Restaurant::with('prefecture', 'genre')->get();
        } else {
            $restaurants = $query->get();
        }

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
