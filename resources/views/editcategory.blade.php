@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/menulist.css') }}">
@endsection

@section('container')
    {{-- <h3>{{ $category->nama }}</h3> --}}
    <div>
        <button onclick="window.location.href = '/menus';" class="back">Back</button>

    </div>
    <div class="update-category">
        <form action="/update_category/{{ $category->id }}" method="POST" enctype="multipart/form-data" class="input-submit">
            @csrf
            @method('put')
            <input class="menuNama" type="text" name="namaCategory" placeholder="New category name">
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
            document.getElementById('rowEditMenu').style.visibility = 'visible';
            var nama = document.getElementById('nama' + MenuId).innerText;
            var harga = document.getElementById('harga' + MenuId).innerText;
            var desc = document.getElementById('desc' + MenuId).innerText;
            // console.log(nama+" "+harga+" "+desc);
            var inputName = document.getElementById('editNama');
            inputName.value = nama;
            var inputHarga = document.getElementById('editHarga');
            var regex = /Rp (\d+)k/;
            var match = harga.match(regex);
            var hargaValue = match ? parseInt(match[1]) : null;
            inputHarga.value = hargaValue;
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
                <th class="menuNama">{{ $category->nama }}</th>
                <th class="menuHarga">Price</th>
                <th class="menuDesc">Description</th>
                <th class=""></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->menus as $menu)
                <tr id="tr{{ $menu->id }}">
                    <td class="menuNama" id="nama{{ $menu->id }}">{{ $menu->nama }}</td>
                    <td class="menuHarga" id="harga{{ $menu->id }}">Rp {{ $menu->harga }}k</td>
                    <td class="menuDesc" id="desc{{ $menu->id }}">{{ $menu->desc }}</td>
                    <td class="menuCRUD">
                        <form id="deleteForm" action="/delete_menu/{{ $menu->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="red"
                                onclick="return confirm('Are you sure you want to delete this menu?')">Delete Menu</button>
                        </form>
                        <button onclick="edit('{{ $menu->id }}')" class="orange">Edit</button></td>
                </tr>
            @endforeach

            <tr>
                <form action="/create_menu" method="POST" enctype="multipart/form-data">
                    @csrf

                    <td class="menuNama">
                        <input class="input-create" type="text" class="form-control" name="nama"
                            placeholder="New menu name">
                    </td>
                    <td class="menuHarga">
                        <input class="input-create" type="text" class="form-control" name="harga" placeholder="New price">
                    </td>
                    <td class="menuDesc">
                        <input class="input-create" type="text" class="form-control" name="desc"
                            placeholder="New description">
                        <input id="editCatId" type="text" class="form-control" value="{{ $category->id }}"
                            name="category_id" style="display: none">
                    </td>
                    <td class="menuCRUD"><button type="submit" class="green">Create Menu</button></td>
                </form>
            </tr>
            <tr id="rowEditMenu">
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
                        <input id="editCatId" type="text" class="form-control" name="category_id" style="display: none">
                    </td>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </form>
            </tr>
        </tbody>
    </table>
    <form id="deleteForm" action="/delete_category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit" class="red"
            onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
    </form>
@endsection