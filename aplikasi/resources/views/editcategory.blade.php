@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/menulist.css') }}">
@endsection

@section('container')
    {{-- <h3>{{ $category->nama }}</h3> --}}
    <div class="update-category">
        <form action="/update_category/{{ $category->id }}" method="POST" enctype="multipart/form-data" class="input-submit">
            @csrf
            @method('put')
            <input class="menuNama" type="text" name="namaCategory" placeholder="New Category Name">
            <button type="submit" class="orange">Change Category Name</button>
            @error('namaCategory')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>

    </div>
    <script>
        function editFields(MenuId) {
            // Get the current display values
            var nama = document.getElementById('nama' + MenuId).innerText;
            var harga = document.getElementById('harga' + MenuId).innerText;
            var desc = document.getElementById('desc' + MenuId).innerText;
            var put = 'put';

            // Replace the text with input fields
            document.getElementById('tr' + MenuId).innerHTML = '<td><form action="/update_menu/' + MenuId +
                '" method="POST" enctype="multipart/form-data">@csrf @method('+put+')<td><input type="text" name="nama" value="' +
                nama + '"></td><td><input type="text" name="harga" value="' + harga +
                '"></td><td><input type="text" name="desc" value="' + desc +
                '"><input type="text" class="form-control" value="' + MenuId +
                '" name="category_id" style="display: none"></td><td><button type="submit" class="button-update">Save</button></td></form></td>';

            //document.getElementById('nama' + MenuId).innerHTML = '<input type="text" name="nama" value="' + nama + '">';
            //document.getElementById('harga' + MenuId).innerHTML = '<input type="text" name="harga" value="' + harga + '">';
            //document.getElementById('desc' + MenuId).innerHTML = '<input type="text" name="desc" value="' + desc + '"><input type="text" class="form-control" value="'+ MenuId +'" name="category_id" style="display: none">';
            //document.getElementById('editButton' + MenuId).innerHTML = '<button type="submit" class="button-update">Save</button>';
        }

        function edit(MenuId) {
            var nama = document.getElementById('nama' + MenuId).innerText;
            var harga = document.getElementById('harga' + MenuId).innerText;
            var desc = document.getElementById('desc' + MenuId).innerText;
            var inputName = document.getElementById('editNama');
            inputName.value = nama;
            var inputHarga = document.getElementById('editHarga');
            inputHarga.value = harga;
            var inputDesc = document.getElementById('editDesc');
            inputDesc.value = desc;
            var inputCatId = document.getElementById('editCatId');
            inputCatId.value = MenuId;
            var formElement = document.getElementById('editForm');
            formElement.action = '/update_menu/' + MenuId;
        }
    </script>
    <table>
        <thead>
            <tr>
                <th class="menuNama">{{$category->nama}}</th>
                <th class="menuHarga">Price</th>
                <th class="menuDesc">Description</th>
                <th class=""></th>
                <th class=""></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->menus as $menu)
                <tr id="tr{{ $menu->id }}">
                    <td class="menuNama" id="nama{{ $menu->id }}">{{ $menu->nama }}</td>
                    <td class="menuHarga" id="harga{{ $menu->id }}">{{ $menu->harga }}</td>
                    <td class="menuDesc" id="desc{{ $menu->id }}">{{ $menu->desc }}</td>
                    <td class="menuCRUD">
                        <form id="deleteForm" action="/delete_menu/{{ $menu->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="red"
                                onclick="return confirm('Are you sure you want to delete this menu?')">Delete Menu</button>
                        </form>
                    </td>
                    <td class="menuCRUD" id ="editButton{{ $menu->id }}"><button onclick="edit('{{ $menu->id }}')"
                            class="orange">Edit</button></td>
                </tr>
            @endforeach

            <tr>
                <form id="editForm" action="/update_menu/0" method="POST" enctype="multipart/form-data">@csrf
                    @method('+put+')
                    @csrf
                    @method('put')
                    <td class="menuNama">
                        <input class="input-create" id="editNama" type="text" name="nama">
                    </td>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <td class="menuHarga">
                        <input class="input-create" id="editHarga" type="number" name="harga">
                    </td>
                    @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <td class="menuDesc">
                        <input class="input-create" id="editDesc" type="text" name="desc">
                    </td>
                    @error('desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <td class="menuCRUD">
                        <button type="submit" class="green">Save</button>
                    </td>
                    <td>
                        <input id="editCatId" type="text" class="form-control" name="category_id" style="display: none">
                    </td>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </form>
            </tr>
            <tr>
                <form action="/create_menu" method="POST" enctype="multipart/form-data">
                    @csrf

                    <td class="menuNama">
                        <input class="input-create" type="text" class="form-control" name="namaMenu"
                            placeholder="Enter Name">
                        @error('namaMenu')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="menuHarga">
                        <input class="input-create" type="text" class="form-control" name="harga" placeholder="Price">
                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="menuDesc">
                        <input class="input-create" type="text" class="form-control" name="desc"
                            placeholder="Enter description">
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <input id="editCatId" type="text" class="form-control" value="{{ $category->id }}"
                            name="category_id" style="display: none">
                    </td>
                    <td class="menuCRUD"><button type="submit" class="green">Create Menu</button></td>
                    <td></td>
                </form>
            </tr>
            <!--<tr>
                                    <form action="/create_menu" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <td>
                                                <input type="text" class="form-control" name="nama" placeholder="Enter Name">
                                                @error('nama')
        <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
    @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="harga" placeholder="price">
                                                @error('price')
        <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
    @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="desc" placeholder="Enter description">
                                                @error('description')
        <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
    @enderror
                                                <input type="text" class="form-control" value="{{ $category->id }}" name="category_id" style="display: none">
                                                
                                            </td>
                                            <td><button type="submit" class="button-create">Create Menu</button></td>
                                        </form>
                                    </tr>-->
        </tbody>
    </table>
    <form id="deleteForm" action="/delete_category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit" class="red"
            onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
    </form>
@endsection
