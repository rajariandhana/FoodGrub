@extends('layout')

@section('container')
    <div class="newordercontainer">
        <div class="neworder">
            <div class="menulist">
                @include('menulist', ['categories' => $categories])
            </div>
            <div class="cart">
                @include('cart')
            </div>
        </div>
    </div>
    <script src={{ url('js/cart.js') }} async></script>
@endsection
