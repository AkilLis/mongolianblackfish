<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mongolian Black Fish</title>
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="container" style="position: relative;">
                <lake-list>
                </lake-list>
                <div class="row" style="height: 730px; background-size: cover; background-position: center; background-image:url('/images/cover.jpg')">
                </div>
                <div class="row" style="height: 1260px; background: #aecaec">
                </div>
                <div class="row" style="height: 1000px; background-size: cover; background-position: center; background-image:url('/images/taimen.jpeg')">
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>
