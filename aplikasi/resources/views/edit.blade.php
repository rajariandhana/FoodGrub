{{-- @extends('layout')

@section('container')
<form action="/create_category" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" placeholder="category name">
    <button type="submit" class="button-create">Create Category</button>
    @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</form>

@foreach($categories as $category)
<div class="edit-category-header">
    <h3>{{ $category->nama }}</h3>
    <a href="/edit_category/{{$category->id}}">Edit</a>
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
    <script>
        document.getElementById('deleteForm').addEventListener('submit', function(event) {
            var confirmed = confirm("Are you sure you want to delete this category?");
            if (!confirmed) {
                event.preventDefault();
            }
        });
    </script>
@endforeach
@endsection --}}