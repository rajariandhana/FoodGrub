@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/menulist.css') }}">
@endsection
@section('container')
    <form action="/create_category" method="POST" enctype="multipart/form-data" class="input-submit">
        @csrf
        <input type="text" name="nama" placeholder="Category Name">
        <button type="submit" class="green">Create Category</button>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>

    <table>
        <thead>
            {{-- <th class="menuNama">nama</th> --}}
            {{-- <th class="menuHarga">harga</th> --}}
            {{-- <th></th> --}}
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="categoryRow">
                    <td class="menuName">
                        {{ $category->nama }}
                        <button onclick="window.location.href = '/edit_category/{{ $category->id }}';"
                            class="edit orange">Edit</button>
                    </td>
                    <td class="menuHarga">Price</td>
                    <td class="menuDesc">Description</td>
                </tr>
                @foreach ($category->menus as $menu)
                    <tr class="">
                        <td class="menuNama">{{ $menu->nama }}</td>
                        <td class="menuHarga">Rp {{ $menu->harga }}k</td>
                        <td class="menuDesc">{{ $menu->desc }}</td>
                    </tr>
                @endforeach
                <tr class="row-dummy">
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($categories as $category)
<div class="edit-category-header">
    <h3>{{ $category->nama }}</h3>
    <a href="/edit_category/{{$category->id}}" class="button-update">Edit</a>
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
            @foreach ($category->menus as $menu)
                <tr>
                    <td>{{ $menu->nama }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td>{{ $menu->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        document.getElementById('deleteForm').addEventListener('submit', function(event) {
            var confirmed = confirm("Are you sure you want to delete this category?");
            if (!confirmed) {
                event.preventDefault();
            }
        });
    </script>
@endforeach --}}
@endsection
