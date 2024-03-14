<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $reserveData = $request->only(['restaurant_id','reservation_date','reservation_time','number_of_people']);
        $reserveData['user_id'] = auth()->user()->id;
        $reserveData['status'] = '予約中';
        Reservation::create($reserveData);

        return view('reservethanks');
    }

    public function destroy(Request $request)
    {
        Reservation::find($request->id)->delete();

        return redirect('/mypage')->with('success', '予約が削除されました');
    }

    public function update(ReservationRequest $request)
    {
        $reservation = $request->only(['restaurant_id','reservation_date','reservation_time','number_of_people']);
        $reservation['user_id'] = auth()->user()->id;

        Reservation::find($request->id)->update($reservation);

        return redirect('/mypage')->with('message', '予約を変更しました');
    }
}