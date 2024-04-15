<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index()
    {
        return view('discounts',[
            'namaHalaman'=>'discounts',
            'discounts'=>Discount::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }
}
