<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url('css/neworder.css')}}">
    <link rel="stylesheet" href="{{url('css/menulist.css')}}">
    <link rel="stylesheet" href="{{url('css/cart.css')}}">
</head>

<body>
    <header>
        <a href="/" id="homeButton">/home</a>
        <h1>{{ $namaHalaman }}</h1>
        {{-- <li><a href="/categories" class="">categories</a></li> --}}
        <li><a href="/menus">menus</a></li>
        {{-- <li><a href="/edit">edit</a></li> --}}
        <li><a href="/neworder">New Order</a></li>

    </header>
    <div>
        @yield('container')
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
