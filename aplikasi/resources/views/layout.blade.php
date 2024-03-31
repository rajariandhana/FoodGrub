<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>

<body>
    <header>
        <a href="/" id="homeButton">/home</a>
        <h1>{{ $namaHalaman }}</h1>
        <li><a href="/categories" class="">categories</a></li>
        <li><a href="/menus">menus</a></li>
        <li><a href="/edit">edit</a></li>
    </header>
    <div>
        @yield('container')
    </div>
</body>

</html>
