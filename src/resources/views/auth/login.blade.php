@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
    <main>
        <div class="login__content">
            <div class="login__heading">
                <h2>Login</h2>
            </div>
            <form class="form" action="/login" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__input">
                        <label for="email">
                            <span class="form__icon">
                                <img class="form__icon--image" src="{{ asset('images/mail.svg') }}" alt="Icon description">
                            </span>
                        </label>
                        <div class="form__input--textbox">
                            <input type="email" id="email" class="form__input--text" name="email" placeholder="Email" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__input">
                        <label for="password">
                            <span class="form__icon">
                                <img class="form__icon--image" src="{{ asset('images/password.svg') }}" alt="Icon description">
                            </span>
                        </label>
                        <div class="form__input--textbox">
                            <input type="password" id="password" class="form__input--text" name="password" placeholder="password" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>
@endsection