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

    public function create_discount(Request $request)
    {
        $request->validate([
            'minimumBeli'=>'required',
            'potonganHarga'=>'required',
            'diskon_mulai'=>'required',
            'diskon_selesai'=>'required',
        ],
        [
            'minimumBeli.required'=>'Minimum spending cannot be empty',
            'potonganHarga.required'=>'Discount cannot be empty',
            'diskon_mulai.required'=>'Starting date cannot be empty',
            'diskon_selesai.required'=>'Expired date cannot be empty',
        ]);
        Discount::create([
            'minumumBeli'=>$request->minimumBeli,
            'potonganHarga'=>$request->potonganHarga,
            'diskon_mulai'=>$request->diskonMulai,
            'diskon_selesai'=>$request->diskonSelesai,
        ]);
        return back();
    }


    public function delete_discount()
    {
        $discount = Discount::findorfail($id);
        $discount->delete();

        return back();
    }
}
