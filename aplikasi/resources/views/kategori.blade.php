{{-- @dd($kategori) --}}
@extends('layout')

@section('container')
@foreach ($semuakategori as $kategori_it)
    <h2>{{ $kategori_it->id }} : {{ $kategori_it->nama }}</h2>
    <p>{{$kategori_it->desc}}</p>
@endforeach
@endsection