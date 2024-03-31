@extends('layout')

@section('container')
    <div class="neworder">
        <div class="menulist">
            @foreach ($categories as $category)
                <div class="edit-category-header">
                    <h3>{{ $category->nama }}</h3>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->menus as $menu)
                            <tr>
                                <td>{{ $menu->nama }}</td>
                                <td>{{ $menu->harga }}</td>
                                <td>Add</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
        <div class="cart">
            shhh
            @yield('cart')
        </div>
        {{-- <div class="cart">

        </div> --}}
    </div>
@endsection
