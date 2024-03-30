    <!-- An unexamined life is not worth living. - Socrates -->
    {{-- @dd($menus) --}}
@extends('layout')

@section('container')
    @foreach ($menus as $menu)
        <div class="menu">
            <p>{{ $menu->nama }}</p>
            <p>Rp {{ $menu->harga }}</p>
        </div>
    @endforeach
@endsection