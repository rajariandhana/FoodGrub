@extends('layout')

@section('container')
    <h3>{{ $category->nama }}</h3>
    <div class="edit-category-header">
        <form action="/update_category/{{$category->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="nama" placeholder="category name">
            <button type="submit" class="button-update">Update Category</button>
            @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </form>
        <form id="deleteForm" action="/delete_category/{{$category->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <button type="submit" class="button-delete"
            onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
        </form>
    </div>
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
@endsection