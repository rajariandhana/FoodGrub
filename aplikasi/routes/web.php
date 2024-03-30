<?php

use App\Models\Menu;
use App\Models\Kategori;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('halodunia');
});

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'Show']);

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/categories',function(){
    return view('categories',[
        'title'=>'Menu categories',
        'categories'=>Category::all()
        // 'daftarmenu'=>Category::tipe()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=>$category->nama,
        'menus'=>$category->menus,
        'category'=>$category->nama
    ]);
});
// Route::get('/menus', [MenuController::class, 'show']);

// Route::get('/menus', function(){
//     return view('menus',[
//         "menus"=>Menu::all()
//     ]);
// });

// Route::get('/something', [SomeController::class, 'someFunction']);

// Route::get($uri, $callback);
// Route::match(['get','post'],$uri, $callback);
// Route::any($uri, $callback);

// Route::view('/welcome','welcome');
// Route::view('/welcome','welcome',['name'=>'orang']);