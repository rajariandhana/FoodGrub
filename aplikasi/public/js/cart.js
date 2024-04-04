if(document.readyState == 'loading')
{
    document.addEventListener('DOMContentLoaded',ready);
}
else
{
    console.log("ready");
}

/*
    ['menu_id',nama,harga,qty]
*/
var carttotal = document.querySelector('.cartTotal');
var carttable = document.querySelector('.cartTable');
var cartbody = carttable.querySelector('tbody');

function PlusToCart(data)
{
    
    // console.log(data);
    for(var i=0; i<cartbody.rows.length; i++)
    {
        var row = cartbody.rows[i];
        // console.log(row.cells[0].textContent+" "+data[0]);
        if(row.cells[0].textContent == data[0])
        {
            var qty = parseInt(row.cells[3].textContent, 10);
            row.cells[3].textContent = qty+1;
            UpdateTotal();
            return;
        }
    }
    NewRow(data);
    UpdateTotal();
}

function NewRow(data)
{
    var col0 = document.createElement('td');
    var col1 = document.createElement('td');
    var col2 = document.createElement('td');
    var col3 = document.createElement('td');
    var col4 = document.createElement('td');
    var col5 = document.createElement('td');
    var plusButton = document.createElement('button');
    var minusButton = document.createElement('button');
    col0.className = 'cartID';
    col1.className = 'cartName';
    col2.className = 'cartHarga';
    col3.className = 'cartQty';
    col4.className = 'changeValueCell';
    col5.className = 'changeValueCell';
    // plusButton.className = 'plusButton';
    plusButton.classList.add('green','button-changeValue');
    // minusButton.className = 'minusButton';
    minusButton.classList.add('red','button-changeValue');
    col0.textContent = data[0];
    col1.textContent = data[1];
    col2.textContent = data[2];
    col3.textContent = 1;
    col4.appendChild(plusButton);
    col5.appendChild(minusButton);
    plusButton.textContent = '+'
    minusButton.textContent = '-';
    plusButton.onclick = function()
    {
        PlusToCart(data);
    };
    minusButton.onclick = function()
    {
        MinusFromCart(data);
    };
    var newRow = document.createElement('tr');
    newRow.append(col0,col1,col2,col3,col4,col5);
    cartbody.appendChild(newRow);
}


function MinusFromCart(data)
{
    console.log("minusing");
    for(var i=0; i<cartbody.rows.length; i++)
    {
        var row = cartbody.rows[i];
        if(row.cells[0].textContent == data[0])
        {
            // console.log("tes");
            var qty = parseInt(row.cells[3].textContent, 10);
            if(qty==1) cartbody.deleteRow(i);
            else row.cells[3].textContent = --qty;
            UpdateTotal();
            return;
        }
    }
    UpdateTotal();
}

function EmptyCart()
{
    while(cartbody.firstChild) cartbody.removeChild(cartbody.firstChild);
    carttotal.textContent = 'Total: Rp 0';
}

function UpdateTotal()
{
    total = 0;
    for(var i=0; i<cartbody.rows.length; i++)
    {
        var row = cartbody.rows[i];
        var harga = parseInt(row.cells[2].textContent, 10);
        var qty = parseInt(row.cells[3].textContent, 10);
        total += harga*qty;
    }
    carttotal.textContent = 'Total: Rp '+total+'k';
}


function appendToInput() {
    var appendedValue = " Additional Value"; // Value to be appended
    var currentInputValue = document.getElementById("myInput").value; // Get current value
    document.getElementById("myInput").value = currentInputValue + appendedValue; // Append the new value
}
sessionStorage.setItem("userData","a");

function SumOrder()
{
    // console.log(cartbody.rows.length)
    // if(cartbody.rows.length == 0) return;
    var value="";
    for(var i=0; i<cartbody.rows.length; i++)
    {
        var row = cartbody.rows[i];
        var id = row.cells[0].textContent;
        var nama = row.cells[1].textContent;
        var harga = parseInt(row.cells[2].textContent, 10);
        var qty = parseInt(row.cells[3].textContent, 10);
        var curVal="["+id+"_"+nama+"_"+harga+"_"+qty+"]";
        // total += harga*qty;
        value+=curVal;
    }
    var orderInput = document.getElementById("orderInput");
    orderInput.value = value;
    document.getElementById("orderForm").submit();
}
/*
Order
ID
totalPrice

Order_Menu
ID
Order.ID
Menu.ID
qty

Menu
ID
name
price
*/