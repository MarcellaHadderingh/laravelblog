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
body{
margin:0;
padding:0;
}
.logo{
    height: 100px;
    width: 100px;
    } 
           
    .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            color:#99C4CC;
        }
        
            .social {
            -webkit-transform: scale(0.8);
            /* Browser Variations: */
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
            color:#27646E;

        }
        .txt{
            font-size: 23px; 
            font-weight: bold; 
            color:#27646E;
        }
        #blog{
            width:80%;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
         }
         .icon-bar a {
             display: block;
             text-align: center;
             padding: 16px;
             transition: all 0.3s ease;
             color: white;
            font-size: 20px;
        }
        .icon-bar a:hover {
  background-color: #99C4CC;
}
.linkedin {
  background: #007bb5;
  color: white;
}
.github{
    background-color: #000;
    color:white;
}
.mail{
    background-color: red;
    color: white;
}
.web{
    background-color: #27646E;
    color: white;
}
        
</style>
<body>
 <nav class="nav justify-content-center ">
    <a class="navbar-brand social" href="/"><a href="/"><img class="logo social" src="image/logo.PNG" alt="logo" ></a>
   <a class="nav-link social txt" href="/bootcamp">Bootcamp</a>
   <a class="nav-link social txt "  href="#">Hackaton</a>
   <a class="nav-link social txt "  href="/blog">Blog</a>
   <a class="nav-link social txt" href="#">Skills</a>
</nav>

<div class="icon-bar">
        <a href="https://www.linkedin.com/in/marcella-hadderingh-013115176/" class="linkedin"><i class="fab fa-linkedin fa-1x"></i></a>
        <a href="https://github.com/MarcellaHadderingh" class="github"><i class="fab fa-github fa-1x"></i></a> 
        <a href="mailto:marcellavanduyn@gmail.com" class="mail"><i class="fa fa-envelope fa-1x"></i></a> 
        <a href="http://marcellahadderingh.herokuapp.com" class="web"><i class="fab fa-medium-m fa-1x"></i></a>
    </div>

    @yield('content')
    
    
</body>
</html>