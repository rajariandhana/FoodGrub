@extends('layout')
{{-- <h1>Menu Category: {{$category}}</h1> --}}
@section('container')
@foreach($categories as $category)
    <h2>{{ $category->nama }}</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category->menus as $menu)
                <tr>
                    <td>{{ $menu->nama }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td>{{ $menu->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach

@endsection