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
    <script>
        function editFields(MenuId) {
            // Get the current display values
            var nama = document.getElementById('nama' + MenuId).innerText;
            var harga = document.getElementById('harga' + MenuId).innerText;
            var desc = document.getElementById('desc' + MenuId).innerText;
            var put = 'put';

            // Replace the text with input fields
            document.getElementById('tr' + MenuId).innerHTML = '<td><form action="/update_menu/'+ MenuId +'" method="POST" enctype="multipart/form-data">@csrf @method('+put+')<td><input type="text" name="nama" value="' + nama + '"></td><td><input type="text" name="harga" value="' + harga + '"></td><td><input type="text" name="desc" value="' + desc + '"><input type="text" class="form-control" value="'+ MenuId +'" name="category_id" style="display: none"></td><td><button type="submit" class="button-update">Save</button></td></form></td>';
            
            //document.getElementById('nama' + MenuId).innerHTML = '<input type="text" name="nama" value="' + nama + '">';
            //document.getElementById('harga' + MenuId).innerHTML = '<input type="text" name="harga" value="' + harga + '">';
            //document.getElementById('desc' + MenuId).innerHTML = '<input type="text" name="desc" value="' + desc + '"><input type="text" class="form-control" value="'+ MenuId +'" name="category_id" style="display: none">';
            //document.getElementById('editButton' + MenuId).innerHTML = '<button type="submit" class="button-update">Save</button>';
        }

        function edit(MenuId){
            var nama = document.getElementById('nama' + MenuId).innerText;
            var harga = document.getElementById('harga' + MenuId).innerText;
            var desc = document.getElementById('desc' + MenuId).innerText;
            var inputName = document.getElementById('editNama');
            inputName.value = nama;
            var inputHarga = document.getElementById('editHarga');
            inputHarga.value = harga;
            var inputDesc = document.getElementById('editDesc');
            inputDesc.value = desc;
            var inputCatId= document.getElementById('editCatId');
            inputCatId.value = MenuId;
            var formElement = document.getElementById('editForm');
            formElement.action = '/update_menu/'+MenuId;
        }
    </script>
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
                <tr id="tr{{ $menu->id }}">
                    <td id="nama{{ $menu->id }}">{{ $menu->nama }}</td>
                    <td id="harga{{ $menu->id }}">{{ $menu->harga }}</td>
                    <td id="desc{{ $menu->id }}">{{ $menu->desc }}</td>
                    <td>
                        <form id="deleteForm" action="/delete_menu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="button-delete"
                            onclick="return confirm('Are you sure you want to delete this menu?')">Delete Menu</button>
                        </form>
                    </td>
                    <td id ="editButton{{ $menu->id }}"><button onclick="edit('{{ $menu->id }}')" class="button-delete">Edit</button></td>
                </tr>
            @endforeach
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
                        <input id="editCatId" type="text" class="form-control" value="{{$category->id}}" name="category_id" style="display: none">
                    </td>
                    <td><button type="submit" class="button-create">Creat Edit Menu</button></td>
                </form>
                <form id="editForm" action="/update_menu/" method="POST" enctype="multipart/form-data">@csrf @method('+put+')
                    @csrf
                    @method('put')
                    <input id="editNama" type="text" name="nama">
                    <input id="editHarga" type="text" name="harga">
                    <input id="editDesc" type="text" name="desc"><input id="editCatId" type="text" class="form-control" name="category_id" style="display: none">
                    <button type="submit" class="button-update">Save</button>
                </form>
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
                        <input type="text" class="form-control" value="{{$category->id}}" name="category_id" style="display: none">
                        
                    </td>
                    <td><button type="submit" class="button-create">Create Menu</button></td>
                </form>
            </tr>-->
        </tbody>
    </table>
@endsection