@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ url('css/discounts.css') }}">
@endsection
@section('container')
    

    <table>
        <thead>
            <th class="diskonMinimum">Minimum Spending</th>
            <th class="diskonPotongan">Price Cut</th>
            <th class="diskonTanggal">Start Date</th>
            <th class="diskonTanggal">End Date</th>
            <th class="diskonCRUD"></th>
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td class="diskonMinimum">{{$discount->minimumBeli}}</td>
                    <td class="diskonPotongan">{{$discount->potonganHarga}}</td>
                    <td class="diskonTanggal">{{$discount->diskon_mulai}}</td>
                    <td class="diskonTanggal">{{$discount->diskon_selesai}}</td>
                    {{-- <td>
                        <button onclick="window.location.href = '/edit_discount/{{ $discount->id }}';"
                            class="edit orange">Edit</button>
                    </td> --}}
                    <td class="diskonCRUD">
                        <button onclick="window.location.href = '/delete_discount/{{ $discount->id }}';"
                            class="red">Delete</button>
                    </td>
                </tr>
            @endforeach
            <form action="/create_discount" method="POST" enctype="multipart/form-data">
                @csrf
                <td class="diskonMinimum">
                    <input type="number" class="form-control" name="minimumBeli" placeholder="Minimum spending">
                </td>
                <td class="diskonPotongan">
                    <input type="number" class="form-control" name="potonganHarga" placeholder="Price Cut">
                </td>
                <td class="diskonTanggal">
                    <input type="date" class="form-control" name="diskon_mulai" placeholder="Date Start">
                </td>
                <td class="diskonTanggal">
                    <input type="date" class="form-control" name="diskon_selesai" placeholder="Date End">
                </td>
                <td class="diskonCRUD"><button type="submit" class="green">Create</button></td>
            </form>
        </tbody>
    </table>
   
@endsection
