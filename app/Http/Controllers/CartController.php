<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class CartController extends Controller
{
    public function index()
    {
        return view('neworder',[
            'namaHalaman'=>'New Order',
            'categories'=>Category::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }
    public function AddToCart($id)
    {
        $menu = Menu::findOrFail($id);
    }
}
