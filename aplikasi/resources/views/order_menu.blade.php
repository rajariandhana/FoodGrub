

<table>
    <thead>
        <th>Nama</th>
        <th>Harga</th>
        <th>Qty</th>
    </thead>
    <tbody>
        @foreach ($order->menus as $menu)
            <tr class="menuRow">
                <td class="menuNama">{{ $menu->menu_nama }}</td>
                <td class="menuHarga">{{ $menu->menu_harga }}</td>
                <td class="menuQty">{{ $menu->menu_qty }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
