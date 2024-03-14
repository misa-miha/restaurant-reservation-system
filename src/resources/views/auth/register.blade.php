@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
    <main>
        <div class="user-registration__content">
            <div class="user-registration__heading">
                <h2>Registration</h2>
            </div>
            <form class="form" action="/register" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__input">
                        <label for="name">
                            <span class="form__icon">
                                <img class="form__icon--image" src="{{ asset('images/person.svg') }}" alt="Icon description">
                            </span>
                        </label>
                        <div class="form__input--textbox">
                            <input type="text"  class="form__input--text" id="name" name="name" placeholder="Username" value="{{ old('name') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__input">
                        <label for="email">
                            <span class="form__icon">
                                <img class="form__icon--image" src="{{ asset('images/mail.svg') }}" alt="Icon description">
                            </span>
                        </label>
                        <div class="form__input--textbox">
                            <input type="email" class="form__input--text" id="email" name="email" placeholder="Email" value="{{ old('email') }}" />
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
                            <input type="password" class="form__input--text" id="password" name="password" placeholder="Password" value="{{ old('password') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
@endsection