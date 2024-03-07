<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>

<body>
    <div class="contents">
        <header class="header">
            <div class="header__inner">
                <span class="header__nav">
                    <a href="{{ Auth::check() ? '/afterlogin' : '/beforelogin' }}">
                        <img class="nav__icon" src="{{ asset('images/menu.svg') }}" alt="Icon description">
                    </a>
                </span>
                <a class="header-logo" href="/">
                    Rese
                </a>
                @yield('search-content')
            </div>
        </header>

        @yield('content')
    </div>
</body>