@extends('layout')

@section('container')
<form action="/create_category" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" placeholder="category name">
    <button type="submit">Create Category</button>
    @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</form>

@foreach($categories as $category)
    <h3>{{ $category->nama }}</h3>
    <form action="/update_category/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="text" name="nama" placeholder="category name">
        <button type="submit">Update Category</button>
        @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </form>
    <form action="/delete_category/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit">Delete Category</button>
    </form>
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