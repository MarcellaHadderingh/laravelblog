<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
    crossorigin="anonymous">      
    <title>@yield('title')</title>
</head>
<style>

.logo{
    height: 100px;
    width: 100px;
    }
    #text{
        margin:40px;
    }            
    .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }
        
            .social {
            -webkit-transform: scale(0.8);
            /* Browser Variations: */
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
        }
        #blog{
            width:80%;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }
        
</style>
<body>
 <nav class="nav justify-content-center">
    <a class="navbar-brand" href="/"><a href="/"><img class="logo" src="image/logo.PNG" alt="logo" ></a>
   <a class="nav-link active" href="/bootcamp">Bootcamp</a>
   <a class="nav-link"  href="#">Hackaton</a>
   <a class="nav-link"  href="#">Blog</a>
   <a class="nav-link" href="#">Skills</a>
   <a class="nav-link" href="https://www.linkedin.com/in/marcella-hadderingh-013115176/"><i class="fab fa-linkedin fa-2x social"></i> </a>
   <a  class="nav-link" href="https://github.com/MarcellaHadderingh"><i class="fab fa-github-square fa-2x social"></i></a>
</nav>

    @yield('content')
    
    
</body>
</html>