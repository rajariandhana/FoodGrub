var namaHalaman = document.title;
if(namaHalaman == 'Home') return;

// namaHalaman id
var namaHalamanID = document.getElementById(namaHalaman);
if(namaHalamanID == null)
{
    document.getElementById('Menu').classList.add('nav-selected');
}
namaHalamanID.classList.add('nav-selected');