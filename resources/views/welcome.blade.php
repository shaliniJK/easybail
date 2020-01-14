<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container topBotomBordersOut">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">ACCUEIL</a>
            @else
            <a href="{{ route('login') }}">CONNEXION</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">INSCRIPTION</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <h2 class="title">Easy Bail</h2>
        </div>
    </div>
</body>

</html>