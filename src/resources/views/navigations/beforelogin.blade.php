<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/beforelogin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>

<main>
    <div class="nav-content">
        <div class="nav__btn">
            <button class="nav__close-btn" onclick="goBack()">×</button>
        </div>
        <div class="nav">
            <nav class="nav__group">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__link" href="/">Home</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/register">Registration</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/login">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</main>