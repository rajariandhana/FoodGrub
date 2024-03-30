{{-- <div>
    <!-- An unexamined life is not worth living. - Socrates -->
    @foreach ($categories as $category)
        {{ @category->name }}
        @include('view.menu', ['category'=>{{ @category->name }}])
    @endforeach
</div> --}}

@extends('layout')
{{-- <h1>Menu Category: {{$category}}</h1> --}}
@section('container')
<table>
    <tr>
        {{-- <th>kategori</th> --}}
        <th>nama</th>
        <th>harga</th>
        <th>deskripsi</th>
    </tr>
    @foreach ($menus as $menu)
        <tr>
            {{-- <td>kategori: <a href="/categories/{{$menu->category->slug}}">{{$menu->category->nama}}</a></td> --}}
            <td>{{ $menu->nama }}</td>
            <td>Rp {{ $menu->harga }} K</td>
            <td>{{$menu->desc}}</td>
        </tr>
    @endforeach
</table>
    <a href="/categories">back to category</a>
    {{-- <a href="/categories">back to categories</a> --}}
@endsection