@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/discount.css') }}">
@endsection
@section('container')
    

    <table>
        <thead>
            <th>Minimum Spending</th>
            <th>Price Cut</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td>{{$discount->minimumBeli}}</td>
                    <td>{{$discount->potonganHarga}}</td>
                    <td>{{$discount->diskon_mulai}}</td>
                    <td>{{$discount->diskon_selesai}}</td>
                    {{-- <td>
                        <button onclick="window.location.href = '/edit_discount/{{ $discount->id }}';"
                            class="edit orange">Edit</button>
                    </td> --}}
                    <td>
                        <button onclick="window.location.href = '/delete_discount/{{ $discount->id }}';"
                            class="red">Delete</button>
                    </td>
                </tr>
            @endforeach
            <form action="/create_discount" method="POST" enctype="multipart/form-data">
                @csrf
                <td>
                    <input type="number" class="form-control" name="minimumBeli" placeholder="Minimum spending">
                </td>
                <td>
                    <input type="number" class="form-control" name="potonganHarga" placeholder="Price Cut">
                </td>
                <td>
                    <input type="date" class="form-control" name="diskon_mulai" placeholder="Date Start">
                </td>
                <td>
                    <input type="date" class="form-control" name="diskon_selesai" placeholder="Date End">
                </td>
                <td class="discountCRUD"><button type="submit" class="green">Create Discount</button></td>
            </form>
        </tbody>
    </table>
   
@endsection
