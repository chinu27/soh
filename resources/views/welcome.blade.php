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
       
    </head>
    <body>
        <nav class = "navbar navbar-expand-md navbar-dark bg-dark fixed-top">
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
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="text-light">Soldiers Of Honours.</h1>
                    <p class="text-light">A Forum for Gamers and Gameservers</p>
                    <button class="btn btn-primary">Login</button>

                </div>
                <div class= "col-12 text-center bg-light">
                    <p class = "text-dark ">Hi and Welcome to SoH soldier. Good luck for all the battles ahead and remember to make lots of Connections</p>
                </div>
                </div>
            </div>
        </header>
        <div class = "container">
            <div class= "row">
                <div class = "col-md-12 text-center bg-light">
                <p> damn this is cool stuff</p>
                </div>
                
            </div>
        
        </div>
    


       
    </body>
</html>
