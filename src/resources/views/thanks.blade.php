@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')

<main>
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>会員登録ありがとうございます</h2>
        </div>
        <div class="login__button">
            <a href="/login" class="login__button-submit">
                ログインする
            </a>
        </div>
    </div>
</main>

@endsection