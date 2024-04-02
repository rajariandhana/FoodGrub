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
}
