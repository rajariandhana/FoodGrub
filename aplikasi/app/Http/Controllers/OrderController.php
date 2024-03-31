<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class OrderController extends Controller
{
    public function index()
    {
        return view('neworder',[
            'namaHalaman'=>'New Order',
            'categories'=>Category::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }
}
