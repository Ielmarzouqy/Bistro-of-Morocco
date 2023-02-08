<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bistro of morocco</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="antialiased">

        <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div>
                <div class="bg">
                  Home page
                  <div class="bg-img">
            <img src="{{URL('images/Pancakes.jpg')}}" alt="">
        </div>
                </div>
                <div >
                    <div >
                    </div>
                </div>
                <div >
                </div>
            </div>
        </div>
    </body>
</html>