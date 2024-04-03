@extends('layout')

@section('container')
    {{-- <h3>{{ $category->nama }}</h3> --}}
    <div class="update-category">
        <form action="/update_category/{{$category->id}}" method="POST" enctype="multipart/form-data"
            class="input-submit">
            @csrf
            @method('put')
            <input type="text" name="nama" placeholder="category name">
            <button type="submit" class="orange">Update Category</button>
            @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </form>
        
    </div>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($category->menus as $menu)
                <tr>
                    <td class="menuNama">{{ $menu->nama }}</td>
                    <td class="menuHarga">{{ $menu->harga }}</td>
                    <td class="menuDesc">{{ $menu->desc }}</td>
                    <td>
                        <button onclick="window.location.href = '/edit_menu/{{$menu->id}}';"
                            class="edit orange">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form id="deleteForm" action="/delete_category/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit" class="red"
        onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
    </form>
@endsection