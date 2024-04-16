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
                    <td id="minBeli{{ $discount->id }}">{{$discount->minimumBeli}}</td>
                    <td id="disc{{ $discount->id }}">{{$discount->potonganHarga}}</td>
                    <td id="dm{{ $discount->id }}">{{$discount->diskon_mulai}}</td>
                    <td id="ds{{ $discount->id }}">{{$discount->diskon_selesai}}</td>
                    {{-- <td>
                        <button onclick="window.location.href = '/edit_discount/{{ $discount->id }}';"
                            class="edit orange">Edit</button>
                    </td> --}}
                    <script>
                        function edit(DiscId) {
                            var minBeli = document.getElementById('minBeli' + DiscId).innerText;
                            var disc = document.getElementById('disc' + DiscId).innerText;
                            var dm  = document.getElementById('dm' + DiscId).innerText;
                            var ds = document.getElementById('ds'+DiscId).innerText;
                            var inputMb = document.getElementById('editMb');
                            inputMb.value = minBeli;
                            var inputDisc = document.getElementById('editDisc');
                            inputDisc.value = disc;
                            var inputDm = document.getElementById('editDm');
                            inputDm.value = dm;
                            var inputDs = document.getElementById('editDs');
                            inputDs.value = ds;
                            var inputDId = document.getElementById('editDiscId');
                            inputDId.value = DiscId;
                            var formElement = document.getElementById('editForm2');
                            document.FormEdit.action = '/update_discount/' + DiscId;
                        }
                    </script>
                    <td>
                        <form id="deleteForm" action="/delete_discount/{{ $discount->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="red">Delete</button>
                        </form>
                        <button onclick="edit('{{ $discount->id }}')" class="edit orange">Edit</button>
                    </td>
                </tr>
            @endforeach
            <tr>
                <form  action="/create_discount" method="POST" enctype="multipart/form-data">
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
            </tr>
            <tr>
                <form  action="/update_discount/{{ $discount->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <td>
                        <input type="number" id="editMb" class="form-control" name="minimumBeli" placeholder="Minimum spending">
                    </td>
                    <td>
                        <input type="number" id="editDisc" class="form-control" name="potonganHarga" placeholder="Price Cut">
                    </td>
                    <td>
                        <input type="date" id="editDm" class="form-control" name="diskon_mulai" placeholder="Date Start">
                    </td>
                    <td>
                        <input type="date" id="editDs" class="form-control" name="diskon_selesai" placeholder="Date End">
                    </td>
                    <td class="discountCRUD"><button type="submit" class="green">Edit Discount</button></td>
                </form>
            </tr>
        </tbody>
    </table>
   
@endsection
