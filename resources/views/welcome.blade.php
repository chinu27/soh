<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{SoH}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.deep_purple-purple.min.css" /> 
        <style>
        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
            <div class="container">
            <ul class = "navbar-nav ml-auto">
            @if (Route::has('login'))

                    @auth
                        <li><a class ="nav-link" href="{{ url('/home') }}">Home</a></li>
                        <li><a class ="nav-link" href="{{ url('/home') }}">About</a></li>
                        <li><a class ="nav-link" href="{{ url('/home') }}">FAQ</a></li>
                    @else
                        <li><a class ="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class ="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endauth
            @endif
            </ul>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Soldiers of Honour
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="//link">Gamer Community</a>
                    <a href="https://github.com/chinu27/soh">GitHub</a>
                    <a href="{{ url('/home') }}">Home</a>
                </div>
                <div class="content">
                    SoH is a free platform for Gamers to meet different Gamers all over the world and share their gmaing experiences with each other.
                    Form your clan/guild for your favourive game or join and existing one and enjoy gaming together with friends. 
                </div>
            </div>
        </div>
</html>
