@extends('layout')

@section('container')
{{-- <table>
    <tr>
        <th>kategori</th>
        <th>nama</th>
        <th>harga</th>
        <th>deskripsi</th>
    </tr> --}}
    @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{$category->slug}}">{{$category->nama}}</a></h2>
        </li>
    </ul>
    @endforeach
{{-- </table> --}}
@endsection