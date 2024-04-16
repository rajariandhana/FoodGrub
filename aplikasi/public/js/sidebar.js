var namaHalaman = document.title;
console.log(namaHalaman);
if(namaHalaman != 'Home')
{
    // namaHalaman id
    var nav = document.getElementById(namaHalaman);
    if(nav == null)
    {
        document.getElementById('Menu').classList.add('nav-selected');
    }
    // nav.classList.add('nav-selected');
    nav.className = 'nav-selected';
}

