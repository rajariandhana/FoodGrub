@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{url('css/orders.css')}}">
@endsection
@section('container')
    <table>
        <thead>
            <th class="orderWaktu">Year</th>
            <th class="orderWaktu">Month</th>
            <th class="orderWaktu">Date</th>
            <th class="orderWaktu">Time</th>
            <th class="orderHarga">Total Price</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <a href="/order/{{$order}}">
                <tr class="">
                    <td class="orderWaktu">{{ $order->created_at->format('Y') }}</td>
                    <td class="orderWaktu">{{ $order->created_at->format('M') }}</td>
                    <td class="orderWaktu">{{ $order->created_at->format('d') }}</td>
                    <td class="orderWaktu">{{ $order->created_at->format('H:i:s') }}</td>
                    <td class="">Rp {{ $order->totalHarga }}k</td>
                    <td class="button-showOrder">
                        <button onclick="window.location.href = '/orders/{{ $order->id }}';"
                            class="prime1">Show Detail</button>
                    </td>
                </tr>
            </a>
            @endforeach
        </tbody>
    </table>
    {{-- @include('order_menu', ['order_menu' => $order]) --}}

    
@endsection
