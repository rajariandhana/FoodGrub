@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/orders.css') }}">
@endsection
@section('container')
    <form action="/orders" method="GET" enctype="multipart/form-data" class="filter-date" id="form-filter">
        <div class="filter-date-between">
            <label for="date_start">Show orders between</label>
            <input type="date" name="date_start" value="{{ Request::get('date_start') ?? date('Y-m-d') }}">
            <label for="date_end">and</label>
            <input type="date" name="date_end" value="{{ Request::get('date_end') ?? date('Y-m-d') }}">
            <button type="submit" class="prime1">Show</button>
        </div>
    </form>
    <form action="/orders" method="GET" enctype="multipart/form-data" class="filter-date" id="form-filter">
        <div class="filter-date-template">
            <label for="date_start">Show orders of</label>
            <select name="template" id="">
                <option value="thisday">Choose...</option>
                <option value="thisday">Today</option>
                <option value="thismonth">This Month</option>
                <option value="thisyear">This Year</option>
            </select>
            <button type="submit" class="prime1">Show</button>
            {{-- <button type="reset" onclick="ClearFilter()">Clear Filter</button> --}}
        </div>
    </form>

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
            {{-- @dd($orders) --}}
            @foreach ($orders as $order)
                <a href="/order/{{ $order }}">
                    <tr class="">
                        <td class="orderWaktu">{{ $order->created_at->format('Y') }}</td>
                        <td class="orderWaktu">{{ $order->created_at->format('F') }}</td>
                        <td class="orderWaktu">{{ $order->created_at->format('d') }}</td>
                        <td class="orderWaktu">{{ $order->created_at->format('H:i:s') }}</td>
                        <td class="">Rp {{ $order->totalHarga }}k</td>
                        <td class="button-showOrder">
                            <button onclick="window.location.href = '/orders/{{ $order->id }}';" class="prime1">Show
                                Detail</button>
                        </td>
                    </tr>
                </a>
            @endforeach
        </tbody>
    </table>
    <script>
        function ClearFilter() {
            // document.getElementById("form-filter").reset();
            // document.getElementById("form-filter").submit();
            window.location.href = '/orders';
        }
    </script>
    {{-- <script>
        // Fill date inputs with current date if not provided
        if (!document.getElementById('date_start').value) {
            document.getElementById('date_start').valueAsDate = new Date();
        }
        if (!document.getElementById('date_end').value) {
            document.getElementById('date_end').valueAsDate = new Date();
        }
    
        function clearFilter() {
            document.getElementById('form-filter').reset();
        }
    </script> --}}
@endsection
