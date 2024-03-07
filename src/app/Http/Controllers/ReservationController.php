<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $reserveData = $request->only(['reservation_date','reservation_time','number_of_people']);
        $reserveData['status'] = '予約中';
        Reserve::create($reserveData);

        return view('reservethanks');
    }
}
