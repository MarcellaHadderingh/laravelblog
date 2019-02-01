<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
   
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<style>
</style>

<body>
            <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="container">
                            <a class="navbar-brand social" href="/home"><img class="logo social" src="image/logo.PNG" alt="logo"></a>
                            <a class="nav-link social txt" href="/bootcamp">Bootcamp</a>
                            <a class="nav-link social txt " href="#">Hackaton</a>
                            <a class="nav-link social txt " href="/blog">Blog</a>
                            <a class="nav-link social txt" href="#">Skills</a>
                        </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
            
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item ">
                                            <a class="nav-link  " href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link  " href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="postition:relative; padding-left:50px;">
                                                <img src="/uploads/avatar/{{Auth::user() -> avatar }}" style="width:50px; height:50px; position:absolute; top:0px; left:0px; border-radius:50%;">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fas fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                                        {{ __('Logout') }}
                                                    </a>
                        
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>



    <div class="icon-bar">
        <a href="https://www.linkedin.com/in/marcella-hadderingh-013115176/" target="_blank" class="linkedin"><i class="fab fa-linkedin fa-1x"></i></a>
        <a href="https://github.com/MarcellaHadderingh" target="_blank" class="github"><i class="fab fa-github fa-1x"></i></a>
        <a href="mailto:marcellavanduyn@gmail.com" target="_blank" class="mail"><i class="fa fa-envelope fa-1x"></i></a>
        <a href="http://marcellahadderingh.herokuapp.com" target="_blank" class="web"><i class="fab fa-medium-m fa-1x"></i></a>
    </div>
<main>
        @yield('content')
</main>
  


</body>

</html>