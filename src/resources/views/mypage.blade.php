@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
@endsection

@section('content')

<main>
    <div class="mypage__title">
        <p class="mypage__title--text">{{ $userName }}さん</p>
    </div>
    <div class="mypage__content">
        <div class="reservation__content">
            <h2 class="reservation__content--title">予約状況</h2>
            @if(session('success'))
            <div class="alert--success">
                {{ session('success') }}
            </div>
            @endif
            @foreach ($reservations as $reservation)
            <div class="reservation__content__box">
                <div class="reservation__content__box--top">
                    <label for="clock">
                        <span class="reservation__icon--left">
                            <img class="reservation__icon--left__image" src="{{ asset('images/clock.svg') }}" alt="Icon description">
                        </span>
                    </label>
                    <p class="reservation__content__box--top--title">予約{{ $loop->index + 1 }}</p>
                    <form class="delete-form" action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $reservation['id'] }}">
                        <button class="reservation__delete" type="submit">
                            <span class="reservation__icon--right">
                                <img class="reservation__icon--right__image" src="{{ asset('images/close.svg') }}" alt="Icon description">
                            </span>
                        </button>
                    </form>
                </div>
                <div class="reservation-confirm">
                    <form class="update-form" action="{{ route('reservations.update', $reservation->id) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <table class="reservation-confirm__table">
                            <tr class="reservation-confirm__table__row">
                                <th class="reservation-confirm__table__header">Shop</th>
                                <td class="reservation-confirm__table__item">{{ $reservation->restaurant->restaurant_name }}</td>
                            </tr>
                            <tr class="reservation-confirm__table__row">
                                <th class="reservation-confirm__table__header">Date</th>
                                <td class="reservation-confirm__table__item">
                                    <input class="reservation-confirm__table__item-input" type="date" name="reservation_date" value="{{ $reservation['reservation_date'] }}">
                                    <input type="hidden" name="id" value="{{ $reservation['id'] }}">
                                </td>
                            </tr>
                            <tr class="reservation-confirm__table__row">
                                <th class="reservation-confirm__table__header">Time</th>
                                <td class="reservation-confirm__table__item">
                                    <input class="reservation-confirm__table__item-input" type="time" name="reservation_time" value="{{ \Carbon\Carbon::parse($reservation->reservation_time)->format('H:i') }}" step="600">
                                    <input type="hidden" name="id" value="{{ $reservation['id'] }}">
                                </td>
                            </tr>
                            <tr class="reservation-confirm__table__row">
                                <th class="reservation-confirm__table__header">Number</th>
                                <td class="reservation-confirm__table__item">
                                    <input class="reservation-confirm__table__item-input" type="number" name="number_of_people" value="{{ $reservation['number_of_people'] }}" step="1">人
                                    <input type="hidden" name="id" value="{{ $reservation['id'] }}">
                                </td>
                            </tr>
                        </table>
                        <div class="form__error" >
                            @error('reservation_date')
                            {{ $message }}
                            @enderror
                            @error('reservation_time')
                            {{ $message }}
                            @enderror
                            @error('number_of_people')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">変更</button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="favorite__content">
            <h2 class="favorite__content--title">お気に入り店舗</h2>
            <div class="card">
                @foreach($favoriteRestaurants as $restaurant)
                <div class="card__item">
                    <div class="card__img-area">
                        <img class="card__img" src="{{ $restaurant->image_path }}" alt="{{ $restaurant->restaurant_name }}">
                    </div>
                    <div class="card__content">
                        <h2 class="card__content__ttl">{{ $restaurant->restaurant_name }}</h2>
                        <div class="card__content-tag">
                            <p class="card__content-tag-item">#{{ $restaurant->prefecture->prefecture_name }}</p>
                            <p class="card__content-tag-last-item">#{{ $restaurant->genre->genre_name }}</p>
                        </div>
                        <div class="card__bottom">
                            <div class="card__detail">
                                <a class="card__detail__text" href="/detail/{{ $restaurant->id }}">詳しく見る</a>
                            </div>
                            <div class="favorite-section">
                                @if (!Auth::user()->is_favorite($restaurant->id))
                                <form class="favorite-form" action="{{ route('favorite', $restaurant) }}" method="post">
                                    @csrf
                                    <button type="submit" class="favorite-button" onclick="toggleFavorite({{ $restaurant->id }})">
                                        <img class="favorite-button__img" src="{{ asset('images/heart.svg') }}" alt="favorite">
                                    </button>
                                </form>
                                @else
                                <form class="unfavorite-form" action="{{ route('unfavorite', $restaurant) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="favorite-button favorite" onclick="toggleFavorite({{ $restaurant->id }})">
                                        <img class="favorite-button__img" src="{{ asset('images/red-heart.svg') }}" alt="unfavorite">
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection
