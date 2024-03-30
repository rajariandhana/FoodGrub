<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories',[
            'namaHalaman'=>'categories',
            'categories'=>Category::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }
    public static function semuakat($namaHalaman,$menus, $category)
    {
        return view('category',[
            'namaHalaman'=>$namaHalaman,
            'menus'=>$menus,
            'category'=>$category
        ]);
    }
}
