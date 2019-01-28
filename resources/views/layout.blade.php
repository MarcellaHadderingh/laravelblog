<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
    crossorigin="anonymous">    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<style>

</style>
<body>
 <nav class="nav justify-content-center ">
    <a class="navbar-brand social" href="/"><a href="/"><img class="logo social" src="image/logo.PNG" alt="logo" ></a>
   <a class="nav-link social txt" href="/bootcamp">Bootcamp</a>
   <a class="nav-link social txt "  href="#">Hackaton</a>
   <a class="nav-link social txt "  href="/blog">Blog</a>
   <a class="nav-link social txt" href="#">Skills</a>
        @if (Route::has('login'))
                @auth
                    <a class="nav-link social txt1" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="nav-link social txt1"  href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a class="nav-link social txt1" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>
    
<div class="icon-bar">
        <a href="https://www.linkedin.com/in/marcella-hadderingh-013115176/"  target="_blank" class="linkedin"><i class="fab fa-linkedin fa-1x"></i></a>
        <a href="https://github.com/MarcellaHadderingh" target="_blank" class="github"><i class="fab fa-github fa-1x"></i></a> 
        <a href="mailto:marcellavanduyn@gmail.com" target="_blank" class="mail"><i class="fa fa-envelope fa-1x"></i></a> 
        <a href="http://marcellahadderingh.herokuapp.com" target="_blank" class="web"><i class="fab fa-medium-m fa-1x"></i></a>
    </div>

    @yield('content')
    
    
</body>
</html>