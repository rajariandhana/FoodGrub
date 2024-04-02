if(document.readyState == 'loading')
{
    document.addEventListener('DOMContentLoaded',ready);
}
else
{
    console.log("ashiap");
}

/*
    ['menu_id',nama,harga,qty]
*/
var carttotal = document.querySelector('.carttotal');
var carttable = document.querySelector('.carttable');
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
    col2.className = 'cartHarga';
    col3.className = 'cartQty';
    // plusButton.className = 'plusButton';
    plusButton.classList.add('pos');
    // minusButton.className = 'minusButton';
    minusButton.classList.add('neg');
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
    carttotal.textContent = 'Total: 0';
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
    carttotal.textContent = 'Total: '+total;
}