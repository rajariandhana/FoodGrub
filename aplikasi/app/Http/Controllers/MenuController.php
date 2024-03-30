<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return view('menus',[
            "menus" => Menu::all()
        ]);
    }
    // public function show($slug)
    // {
    //     return view('menus',)
    // }
}
