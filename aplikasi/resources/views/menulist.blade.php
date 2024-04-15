<table>
    <thead>
        {{-- <th class="menuNama">nama</th> --}}
        {{-- <th class="menuHarga">harga</th> --}}
        {{-- <th></th> --}}
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr class="categoryRow">
                <td class="menuNama">{{$category->nama}}</td>
                <td class="menuHarga">Price</td>
                <td></td>
            </tr>
            @foreach ($category->menus as $menu)
                <tr class="">
                    <td class="menuNama">{{ $menu->nama }}</td>
                    <td class="menuHarga">{{ $menu->harga }}</td>
                    <td class="addToCartCell">
                        <button onclick="PlusToCart([{{$menu->id}},'{{$menu->nama}}',{{$menu->harga}}])"
                            class="button-addToCart green"
                            >Add</button>
                    </td>
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


{{-- <td>
    <form action="/addtocart/{{$menu->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="button-create">Add</button>
    </form>
</td> --}}