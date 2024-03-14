<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reservation_date' => 'required|date|after_or_equal:tomorrow',
            'reservation_time' => 'required|date_format:H:i',
            'number_of_people' => 'required|digits_between:1,2'
        ];
    }

    public function messages()
    {
        return [
            'reservation_date.required' => '※予約日を選択してください',
            'reservation_date.after_or_equal' => '※明日以降の日付を選択してください',
            'reservation_time.required' => '※予約時間を選択してください',
            'reservation_time.date_format' => '※10分単位の時刻で予約してください',
            'reservation_time.required' => '※予約時間を選択してください',
            'number_of_people.digits_between.required' => '※人数は必ず入力してください',
            'number_of_people.digits_between' => '※一人以上で予約してください'
        ];
    }
}
