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
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images2.alphacoders.com/570/570396.jpg') no-repeat center center fixed;
                background-size: cover;
                
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 300;
                margin: 0 0 20px 0;
                padding: 0;
                height: 100vh;
            }
            
            h1 {
            margin: 30px 0 10px 0;
            font-weight: 700;
            line-height: 48px;
            text-transform: uppercase;
            color: #fff;
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
                font-size: 72px;
                margin: 30px 0 10px 0;
                text-transform: uppercase;
                font-weight: 700;
                color: #fff;

                
            }
            
            p {
            padding-top: 30px;
            margin-bottom: 30px;
            padding-bottom: 30px;
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
        <nav class = "navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">SoH</a>
            </div>
            <ul class = "navbar-nav navbar-right">
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
           <section id ="zero">
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
                    <p>SoH is a free platform for Gamers to meet different Gamers all over the world and share their gmaing experiences with each other.
                    Form your clan/guild for your favourive game or join and existing one and enjoy gaming together with friends. 
                    </p>
                </div>
            </div>
            </section>
            </section id ="one">
            <div class="flex-center position-ref full-height">
            <div class = "content">

            <!-- data to be filled -->


            </div>
            </div>
            </section>

</html>
