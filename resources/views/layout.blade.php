<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <title>Document</title>
    <title> @yield('title','Bootcamp')</title></title>

</head>
<body>

 <nav class="nav justify-content-center">
   <a class="nav-link active" href="#">Active link</a>
   <a class="nav-link disabled" href="#">Link</a>
   <a class="nav-link disabled" href="#">Disabled link</a>
 </nav>

    @yield('content')
    
    <div class="header">
            <img src="image/bootcamp.png" class="img-fluid" alt="Responsive image">
    </div>
</body>
</html>