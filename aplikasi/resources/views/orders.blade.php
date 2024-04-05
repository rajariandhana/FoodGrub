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
            <a href="/order/{{$order}}">
                <tr class="orderRow">
                    <td class="orderWaktu">Time: {{ $order->created_at }}</td>
                    <td class="orderHarga">Rp {{ $order->totalHarga }}k</td>
                    <td></td>
                </tr>
            </a>
            @endforeach
        </tbody>
    </table>
    @include('order_menu', ['order_menu' => $order])

    
@endsection
