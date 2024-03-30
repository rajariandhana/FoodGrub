{{-- @dd($kategori) --}}
@extends('layout')

@section('container')
    <h2>{{ $kategori_it->id }} : {{ $kategori_it->nama }}</h2>
    <p>{{$kategori_it->desc}}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam ut ducimus tempora natus assumenda quam dolorem iure ab a quod, ex eveniet at esse, impedit earum, repellendus neque odit.</p>
    <a href="/kategori">balik ke semua kategori</a>
@endsection