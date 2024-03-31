<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

class EditController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            $category->menus = Menu::where('category_id', $category->id)->get();
        }

        return view('edit', [
            'namaHalaman' => 'Edit',
            'categories' => $categories // Directly pass compact('categories') here
        ]);
    }

    public function create_category(Request $request)
    {
        $request->validate([
            'nama'=>'required',
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
        ]);
        Category::create([
            'nama'=>$request->nama,
            'slug'=>$request->nama,
        ]);
        return redirect('/menus');
    }
    
    public function update_category(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
        ]);
        $category = Category::findorfail($id);
        $new_data = [
            'nama'=>$request->nama,
            'slug'=>$request->nama,
        ];
        $category->update($new_data);
        return redirect('/menus');
    }
    public function delete_category($id)
    {
        $category = Category::findorfail($id);
        $category->delete();
        return redirect('/menus');
    }
}
