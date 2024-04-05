<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $namaHalaman }}</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    @yield('css')
    {{-- <link rel="stylesheet" href="{{url('css/neworder.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('css/menulist.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('css/cart.css')}}"> --}}
</head>

<body>
    <header>
        <nav>
            <div class="left">
                <a href="/" id="homeButton">Home</a>
                {{-- <h1>{{ $namaHalaman }}</h1> --}}
            </div>
            <div class="right">
                <a href="/menus">Menu</a>
                <a href="/orders">Order History</a>
                <a href="/neworder">New Order</a>
            </div>
        </nav>

        {{-- <li><a href="/categories" class="">categories</a></li> --}}
        {{-- <li><a href="/edit">edit</a></li> --}}
    </header>
    <div>
        @yield('container')
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

</body>

</html>
