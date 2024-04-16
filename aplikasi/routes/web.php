<?php

use App\Models\Menu;
use App\Models\Category;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
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
    return view('home',[
        'namaHalaman'=>'Home'
    ]);
});

Route::get('/menus', [MenuController::class, 'index']);

Route::get('/categories',[CategoryController::class,'index']);
// Route::get('/categories', CategoryController::class)->index();

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('category',[
//         'namaHalaman'=>"Category: $category->nama",
//         'menus'=>$category->menus,
//         'category'=>$category->nama
//     ]);
// });
Route::get('/categories/{category:slug}',function(Category $category){
    return app()->call([CategoryController::class, 'semuakat'],
    ['namaHalaman'=>"Category: $category->nama",
    'menus'=>$category->menus,
    'category'=>$category->nama]);
});

Route::get('/edit', [EditController::class, 'index']);
Route::get('/edit_category/{category_id}', [CategoryController::class, 'edit']);


// Route::get('/add_category',[EditController::class,'create']);
Route::post('/create_category',[CategoryController::class,'create_category']);
Route::put('/update_category/{category_id}',[CategoryController::class,'update_category']);
Route::delete('/delete_category/{category_id}',[CategoryController::class,'delete_category']);

Route::get('/neworder', [OrderController::class, 'NewOrder']);
Route::get('/orders', [OrderController::class, 'Orders']);
Route::get('/orders/{order_id}', [OrderController::class, 'ShowOrder']);
// Route::get('/orders/{order}', [OrderController::class, 'orders']);

Route::post('/addtocart/{menu_id}',[OrderController::class,'AddToCart']);
Route::post('/removefromcart/{menu_id}',[OrderController::class,'RemoveFromCart']);

Route::post('/create_order', [OrderController::class, 'CreateOrder']);

// Route::view('/welcome','welcome');
// Route::view('/welcome','welcome',['name'=>'orang']);
 
Route::post('/create_menu',[MenuController::class, 'create_menu']);
Route::put('/update_menu/{menu_id}',[MenuController::class, 'update_menu']);
Route::delete('/delete_menu/{menu_id}',[MenuController::class,'delete_menu']);

Route::get('/discount', [DiscountController::class, 'index']);


Route::get('/test', function () {
    return view('test',[
        'namaHalaman'=>'test'
    ]);
});

Route::post('/create_discount',[DiscountController::class,'create_discount']);
Route::delete('/delete_discount/{discount_id}',[DiscountController::class,'delete_discount']);
Route::put('/update_discount/{discount_id}',[DiscountController::class, 'update_discount']);