@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/orders.css') }}">
    <link rel="stylesheet" href="{{ url('css/menulist.css') }}">
@endsection
@section('container')
    {{-- @dd($menus) --}}
    <div>
        <button onclick="window.location.href = '/orders';" class="back">Back</button>

    </div>
    <table>
        <thead>
            <th class="orderWaktu">Year</th>
            <th class="orderWaktu">Month</th>
            <th class="orderWaktu">Date</th>
            <th class="orderWaktu">Time</th>
            <th class="orderHarga">Cart Price</th>
            <th class="orderHarga">Price Cut</th>
            <th class="orderHarga">Total Price</th>
        </thead>
        <tbody>
            <tr>
                <td class="orderWaktu">{{ $order->created_at->format('Y') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('F') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('d') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('H:i:s') }}</td>
                <td class="">Rp {{ $order->keranjangHarga }}k</td>
                <td class="">Rp {{ $order->potonganHarga }}k</td>
                <td class="">Rp {{ $order->totalHarga }}k</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <th class="menuNama">Name</th>
            <th class="menuHarga">Price</th>
            <th class="menuQty">Qty</th>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td class="menuNama">{{ $menu->menu_nama }}</td>
                    <td class="menuHarga">{{ $menu->menu_harga }}k</td>
                    <td class="menuQty">{{ $menu->menu_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
