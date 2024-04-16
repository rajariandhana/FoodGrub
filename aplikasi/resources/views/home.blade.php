@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
@endsection
@section('container')
    <div class="content">
        <div class="hero">
            <h1>Welcome to <span>FoodGrub</span></h1>
            <p>The best POS application ever (maybe)</p>
        </div>
        <div class="description">
            <p><span>FoodGrub</span> is designed to streamline your business operations and enhance your customer
                service experience.
                With our intuitive interface and robust features, managing menus, transactions, and discounts has never
                been easier.
            </p>
            <p>You can help <span>FoodGrub</span> by supporting our sleep deprived developers
            </p>
            <ul>
                <li>
                    <a href="https://github.com/rajariandhana">github.com/rajariandhana</a>
                </li>
                <li>
                    <a href="https://github.com/PutraAdam08">github.com/PutraAdam08</a>
                </li>
            </ul>

        </div>
    </div>
@endsection
