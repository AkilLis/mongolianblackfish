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

            <div id="scene" style="position: relative;">
                <lake-list>
                </lake-list>
                <div data-depth="1.00" class="row cover-image" style="background-image:url('/images/cover.jpg')">
                </div>
                <trip-list>
                </trip-list>
                <div class="taimen-cover-image" style="background-image:url('/images/taimen.jpeg')">
                    <div class="container row" style="margin-left: auto; margin-right: auto;">
                        <div class="col-md-4" style="padding-left: 80px; padding-top: 80px; ">
                            <h1 style="color: #fff !important; font-weight: bold; word-wrap: break-word; width: 150px;">
                                WHAT IS TAIMEN FISH?
                            </h1>
                        </div>
                        <div class="col-md-8" style="padding-top: 40px; padding-right: 40px; ">
                            <div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; padding: 40px; ">
                                <p style="color: #fff; font-size: 18px;">
                                    Taimen are perhaps the world’s most incredible dry fly experience.  Every taimen you encounter – whether you miss it or land it – will create a lasting memory.

    Taimen are the ultimate mega-trout. They are the largest member of the salmonid family. Mongolian taimen can live for nearly fifty years and reach sixty inches (1.5 meter) in length. Taimen caught on the fly generally measure between 30 – 40 inches (.75 – 1 meter).  Anything over 40 inches (1m) is considered trophy class.  We catch and very carefully release several fish every season that measure over 50 inches (1.25 cm).

    Mongolian taimen do not run out to the ocean or even lakes.   These behemoths spend their entire life cycle in relatively small rivers.  Taimen will migrate great distances to access spawning, feeding, and winter habitats.  An adult taimen may use 60 miles (100km) of river each year, making conservation of vast stretches of water vitally important.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 500px;">
                </div>
                <footer>
                    123
                </footer>

            </div>
        </div>

        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>
