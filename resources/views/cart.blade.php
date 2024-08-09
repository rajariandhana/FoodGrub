{{-- <h1>Shopping Cart</h1> --}}
<div class="cartHeader">
    <div class="cartTotal">
        Total: Rp 0
    </div>
    <div class="cartSubmit" id="carte">
        <form action="/create_order" method="POST" enctype="multipart/form-data"
            class="input-submit" id="orderForm">
            @csrf
            <button class="green" id="button-createOrder"
            onclick="SumOrder()"
            >Create Order</button>
            <input type="text" name="myOrder" id="orderInput" value="">
        </form>
        <button onclick="EmptyCart()" class="red">Empty Cart</button>
    </div>
    {{-- <input type="text" id="myInput"> --}}
    {{-- <button onclick="appendToInput()">Append to Input</button> --}}
</div>

<table class="cartTable" id="cartTable">
    <thead>
        <tr>
            {{-- <th class="cartID">ID</th> --}}
            <th class="cartNama">Name</th>
            <th class="cartHarga">Price</th>
            <th class="cartQty">Qty</th>
            <th class="changeValueCell"></th>
            <th class="changeValueCell"></th>
        </tr>
    </thead>
    <tbody>
        {{-- <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>         --}}
    </tbody>
</table>
