<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    // public function index()
    // {
    //     return view('menus',[
    //         "namaHalaman"=>'Menu',
    //         "menus" => Menu::all()->sortBy('category_id')
    //     ]);
    // }

    public function index()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            $category->menus = Menu::where('category_id', $category->id)->get();
        }

        return view('menus', [
            'namaHalaman' => 'Menu',
            'categories' => $categories // Directly pass compact('categories') here
        ]);
    }
    // public function show($slug)
    // {
    //     return view('menus',)
    // }
}
