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

    public function create_menu(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'harga'=>'required',
            'desc'=>'required',
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
            'harga.required'=>'harga tidak boleh kosong',
            'desc.required'=>'deskripsi tidak boleh kosong',
            
        ]);
        Menu::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'desc' => $request->desc,
        ]);
        return redirect('/menus');
    }

    public function update_menu(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
            'harga'=>'required',
            'desc'=>'required',
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
            'harga.required'=>'harga tidak boleh kosong',
            'desc.required'=>'deskripsi tidak boleh kosong',
        ]);
        $menu = Menu::findorfail($id);
        $new_data = [
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'desc'=>$request->desc
        ];
        $menu->update($new_data);
        return redirect('\menus');
    }

    // public function show($slug)
    // {
    //     return view('menus',)
    // }
}
