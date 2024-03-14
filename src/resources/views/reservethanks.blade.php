@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reservethanks.css') }}" />
@endsection

@section('content')

<main>
    <div class="reservethanks__content">
        <div class="reservethanks__text">
            <p class="reservethanks__text__message">ご予約ありがとうございます</p>
        </div>
        <div class="back__button">
            <a href="/" class="back__button-submit">
                戻る
            </a>
        </div>
    </div>
</main>

@endsection