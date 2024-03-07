@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('search-content')

<form class="search-content" action="{{ url('/search') }}" method="get">
    @csrf
    <div class="search-content__item">
        <select class="area-select" name="prefecture_id">
            <option value="all">ALL area</option>
            @foreach ($prefectures as $prefecture)
            <option value="{{ $prefecture['id'] }}">{{ $prefecture['prefecture_name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="search-content__item">
        <select class="genre-select" name="genre_id">
            <option value="all">ALL genre</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre['id'] }}">{{ $genre['genre_name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="search-content__item">
        <input type="text" class="search-input" name="keyword" value="{{ old('keyword') }}" placeholder="Search...">
    </div>
    <div class="search-content__button">
        <button class="search-content__button-submit" type="submit">検索</button>
    </div>

</form>

@endsection

@section('content')
<main>
    <div class="card">
        @foreach($restaurants as $restaurant)
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
                    <div class="card__detail">
                        <a class="card__detail__text" href="/detail/{{ $restaurant->id }}">詳しく見る</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection