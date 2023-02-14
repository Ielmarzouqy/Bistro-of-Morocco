<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bistro of morocco</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <body class="antialiased">
        <div class="d-flex">
            <div class="banner">
                @if (Route::has('login'))
                    <div class="nav d-flex ml-4 p-2 justify-content-center">
                        @auth
                            <a href="{{ route('food.dashboard') }}" class="btn d-flex me-4 border-2 text-white justify-content-center">Dashboard</a>
                        <a href="{{route('menu')}}"class="btn d-flex me-4 justify-content-center"> <button class="mbtn ">Our Menu</button>  </a>

                        @else
                            <a href="{{ route('login') }}" class="login btn d-flex me-4 justify-content-center">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="register btn d-flex me-4 justify-content-center">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class=" container d-flex"> 
                    <div>
                        <div class=" description d-flex justify-content-center align-self-center p-4">
                            <h1> <strong> GOOD <span>FOOD</span><br> GOOD MOOD</strong></h1>
                        </div>
                        <p class="text-center p-4">
                            Are you hangry? Don't wait! <br>
                            Let's start to order now
                        </p>
                    </div>
                    
                </div>
            </div>
            <div  class="right-banner">
                <div>
                    <img src="{{URL('images/Pancakes.jpg')}}" class="cover" alt="...">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>