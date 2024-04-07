@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/orders.css') }}">
@endsection
@section('container')
    <div>
        <button onclick="window.location.href = '/orders';" class="green">Back</button>

    </div>
    <table>
        <thead>
            <th class="orderWaktu">Year</th>
            <th class="orderWaktu">Month</th>
            <th class="orderWaktu">Date</th>
            <th class="orderWaktu">Time</th>
            <th class="orderHarga">Total Price</th>
        </thead>
        <tbody>
            <tr>
                <td class="orderWaktu">{{ $order->created_at->format('Y') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('M') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('d') }}</td>
                <td class="orderWaktu">{{ $order->created_at->format('H:i:s') }}</td>
                <td class="">Rp {{ $order->totalHarga }}k</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr class="menuRow">
                    <td class="menuNama">{{ $menu->menu_nama }}</td>
                    <td class="menuHarga">{{ $menu->menu_harga }}</td>
                    <td class="menuQty">{{ $menu->menu_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
