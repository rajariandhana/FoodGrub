@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/orders.css') }}">
@endsection
@section('container')
{{-- 
    tambahin sum total price per filter
    --}}
    <div class="filter">
        <form action="/orders" method="GET" enctype="multipart/form-data" class="filter-date" id="form-filter">
            <div>
                <select onchange="FilterSelect()" name="filter_select" id="filter-select" class="form-select">
                    <option value="all">Filter...</option>
                    <option value="thisday">Today</option>
                    <option value="thismonth">This Month</option>
                    <option value="thisyear">This Year</option>
                    <option value="customdates">Choose dates</option>
                </select>
            </div>
            <div class="filter-date-between" id="custom-dates" style="display: none">
                <label for="date_start">Show orders between</label>
                <input type="date" name="date_start" value="{{ Request::get('date_start') ?? date('Y-m-d') }}">
                <label for="date_end">and</label>
                <input type="date" name="date_end" value="{{ Request::get('date_end') ?? date('Y-m-d') }}">
                <button type="submit" class="prime1" id="button-filter1">Show</button>
            </div>

        </form>
    </div>
    <div class="showing">
        {{$showing}}
    </div>
    <div class="statistic">
        <table>
            <thead>
                <thead>
                    <th>Number of Orders</th>
                    <th>Total Income </th>
                    <th>Discounts Given</th>
                </thead>
            </thead>
            <tbody>
                <tr>
                    <th>{{$orders_ctr}}</th>
                    <th>Rp {{ number_format($orders_sum_totalHarga,0,',','.')}}</th>
                    <th>Rp {{ number_format($orders_sum_potonganHarga,0,',','.')}}</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
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
                            {{-- <td class="orderWaktu">{{ $order->created_at->format('m') }}</td> --}}
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
    </div>
    {{-- <div>
        {{$orders->links()}}
    </div> --}}
    <script>
        function ClearFilter() {
            // document.getElementById("form-filter").reset();
            // document.getElementById("form-filter").submit();
            window.location.href = '/orders';
        }

        function FilterSelect() {
            var selectedValue = document.getElementById("filter-select").value;
            console.log(selectedValue);
            if (selectedValue == 'customdates') {
                document.getElementById('custom-dates').style.display = 'flex';
                // document.getElementById('button-filter1').style.display = 'block';

            } else {
                // document.getElementById('custom-dates').style.display = 'none';
                document.getElementById('button-filter1').click();
                // if(selectedValue == 'thisday' || selectedValue == 'thismonth' || selectedValue == 'thisyear')
                // {
                //     document.getElementById('form-filter').submit();
                // }
                // document.getElementById('form-filter').submit();
            }
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
