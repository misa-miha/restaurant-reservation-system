@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
@endsection

@section('content')
<main>
    <div class="restaurant-detail__content">
        <div class="restaurant__content">
            <div class="restaurant__content-ttl">
                <a class="restaurant__content-ttl-button" href="/">
                    <
                </a>
                <h2 class="restaurant__content-ttl-text">
                    {{ $item->restaurant_name }}
                </h2>
            </div>
            <div class="restaurant__content-img-area">
                <img class="restaurant__content-img" src="{{ $item->image_path }}" alt="{{ $item->restaurant_name }}">
            </div>
            <div class="restaurant__content-tag">
                <p class="restaurant__content-tag-item">#{{ $item->prefecture->prefecture_name }}</p>
                <p class="restaurant__content-tag-item">#{{ $item->genre->genre_name }}</p>
            </div>
            <div class="restaurant__content-text">
                <p>{{ $item->introduction }}</p>
            </div>
        </div>
        <div class="reservation__content">
            <h3 class="reservation__content-ttl">
                予約
            </h3>
            <form class="reservation-form" action="/reservethanks" method="post">
                @csrf
                <div class="reservation-form__group">
                    <div class="reservation-form__select-box">
                        <input class="reservation-date" type="date" name="reservation_date">
                    </div>
                    <div class="reservation-form__select-box">
                        <input class="reservation-time" type="time" name="reservation_time" step="1800">
                    </div>
                    <div class="reservation-form__select-box">
                        <input class="reservation-number-of-people" type="number" name="number_of_people" step="1">
                    </div>
                </div>
                <div class="reservation-confirm">
                    <table class="reservation-confirm__table">
                        <tr class="reservation-confirm__table__row">
                            <th class="reservation-confirm__table__header">Shop</th>
                            <td class="reservation-confirm__table__item">{{ $item->restaurant_name }}</td>
                        </tr>
                        <tr class="reservation-confirm__table__row">
                            <th class="reservation-confirm__table__header">Date</th>
                            <td class="reservation-confirm__table__item">{{ $item->restaurant_name }}</td>
                        </tr>
                        <tr class="reservation-confirm__table__row">
                            <th class="reservation-confirm__table__header">Time</th>
                            <td class="reservation-confirm__table__item">{{ $item->restaurant_name }}</td>
                        </tr>
                        <tr class="reservation-confirm__table__row">
                            <th class="reservation-confirm__table__header">Number</th>
                            <td class="reservation-confirm__table__item">{{ $item->restaurant_name }}</td>
                        </tr>
                    </table>
                </div>
                <div class="reservation-form__button">
                    <button class="reservation-form__button-submit" type="submit">予約する</button>
                </div>
            </form>
        </div>
    </div>

</main>

@endsection