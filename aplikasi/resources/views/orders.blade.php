@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{url('css/orders.css')}}">
@endsection
@section('container')
    <table>
        <thead>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="orderRow">
                    <td class="orderWaktu">Time: {{ $order->created_at }}</td>
                    <td class="orderHarga">Rp {{ $order->totalHarga }}k</td>
                    <td></td>
                </tr>
                @foreach ($order->menus as $menu)
                    <tr class="menuRow">
                        <td class="menuNama">{{ $menu->menu_nama }}</td>
                        <td class="menuHarga">{{ $menu->menu_harga }}</td>
                        <td class="menuQty">{{ $menu->menu_qty }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    
@endsection
