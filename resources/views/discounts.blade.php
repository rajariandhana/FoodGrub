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
            {{-- <th class="diskonCRUD"></th> --}}
            <th></th>
            {{-- <th class="diskonCRUD"></th> --}}
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td class="diskonMinimum" id="minBeli{{ $discount->id }}">Rp {{$discount->minimumBeli}}k</td>
                    <td class="diskonPotongan" id="disc{{ $discount->id }}">Rp {{$discount->potonganHarga}}k</td>
                    <td class="diskonTanggal" id="dm{{ $discount->id }}">{{$discount->diskon_mulai}}</td>
                    <td class="diskonTanggal" id="ds{{ $discount->id }}">{{$discount->diskon_selesai}}</td>
                    {{-- <td>
                        <button onclick="window.location.href = '/edit_discount/{{ $discount->id }}';"
                            class="edit orange">Edit</button>
                    </td> --}}
                    <script>
                        function edit(DiscId) {
                            document.getElementById('rowEditDiskon').style.visibility = 'visible';
                            var minBeli = document.getElementById('minBeli' + DiscId).innerText;
                            var disc = document.getElementById('disc' + DiscId).innerText;
                            var dm  = document.getElementById('dm' + DiscId).innerText;
                            var ds = document.getElementById('ds'+DiscId).innerText;
                            var regex = /Rp (\d+)k/;

                            var inputMb = document.getElementById('editMb');
                            var minBeliMatch = minBeli.match(regex);
                            var minBeliValue = minBeliMatch ? parseInt(minBeliMatch[1]) : null;
                            inputMb.value = minBeliValue;
                            var inputDisc = document.getElementById('editDisc');
                            var discMatch = disc.match(regex);
                            var discValue = discMatch ? parseInt(discMatch[1]) : null;
                            inputDisc.value = discValue;
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
                    <td class="diskonCRUD">
                        <form id="deleteForm" action="/delete_discount/{{ $discount->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="red">Delete</button>
                        </form>
                        <button onclick="edit('{{ $discount->id }}')" class="orange">Edit</button>
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
                        <input type="number" class="form-control" name="potonganHarga" placeholder="Price cut">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="diskon_mulai" placeholder="Date Start">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="diskon_selesai" placeholder="Date End">
                    </td>
                    <td class="diskonCRUD"><button type="submit" class="green">Create Discount</button></td>
                </form>
            </tr>
            <tr id="rowEditDiskon">
                <form  action="/update_discount/{{ $discount->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <td>
                        <input type="number" id="editMb" class="form-control" name="minimumBeli" placeholder="New minimum spending">
                    </td>
                    <td>
                        <input type="number" id="editDisc" class="form-control" name="potonganHarga" placeholder="new price cut">
                    </td>
                    <td>
                        <input type="date" id="editDm" class="form-control" name="diskon_mulai" placeholder="Date Start">
                    </td>
                    <td>
                        <input type="date" id="editDs" class="form-control" name="diskon_selesai" placeholder="Date End">
                    </td>
                    <td class="diskonCRUD"><button type="submit" class="green">Save</button></td>
                </form>
            </tr>
{{--
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
--}}
        </tbody>
    </table>
   
@endsection
