<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index()
    {
        return view('discounts',[
            'namaHalaman'=>'Discount',
            'discounts'=>Discount::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }

    public static function GetPriceCut($price, $date)
    {
        // $res = Discount::select('potonganHarga')->where('minimumBeli', '=<', $price);
        $res = Discount::where('minimumBeli', '<=', $price)
        ->whereDate('diskon_mulai','<=',$date)
        ->whereDate('diskon_selesai','>=',$date)
        ->orderByDesc('minimumBeli')
        ->first();
        // dd($res);
        if($res) return $res->potonganHarga;
        return 0;
    }
}
