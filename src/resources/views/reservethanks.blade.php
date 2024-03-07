@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reservethanks.css') }}" />
@endsection

@section('content')

<main>
    <div class="reservethanks__content">
        <div class="reservethanks__heading">
            <h2>ご予約ありがとうございます</h2>
        </div>
        <div class="back__button">
            <a href="/" class="back__button-submit">
                戻る
            </a>
        </div>
    </div>
</main>

@endsection