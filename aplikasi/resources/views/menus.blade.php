@extends('layout')

@section('container')
<h1>Menu</h1>
<table>
    <tr>
        <th>kategori</th>
        <th>nama</th>
        <th>harga</th>
        <th>deskripsi</th>
    </tr>
    @foreach ($menus as $menu)
        {{-- <div class="menu"> --}}
        <tr>
            <td>kategori: <a href="/categories/{{$menu->category->slug}}">{{$menu->category->nama}}</a></td>
            <td>{{ $menu->nama }}</td>
            <td>Rp {{ $menu->harga }} K</td>
            <td>{{$menu->desc}}</td>
        </tr>
        {{-- </div> --}}
    @endforeach
</table>
@endsection