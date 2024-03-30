<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori',[
            "semuakategori"=>Kategori::all()
        ]);
    }

    // public function Show($id)
    // {
    //     return view('sebuahkategori',[
    //         "kategori_it"=>Kategori::find($id)
    //     ]);
    // }
    public function Show($kategori)
    {
        return view('sebuahkategori',[
            "kategori_it"=>Kategori::find($kategori)
        ]);
    }
}
