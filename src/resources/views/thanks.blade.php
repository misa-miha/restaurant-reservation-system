@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')

<main>
    <div class="thanks__content">
        <div class="thanks__text">
            <p class="thanks__text__message">会員登録ありがとうございます</p>
        </div>
        <div class="login__button">
            <a href="/" class="login__button-submit">
                ログインする
            </a>
        </div>
    </div>
</main>

@endsection