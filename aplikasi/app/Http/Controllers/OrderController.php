<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        // Session::flush();
        // Session::forget('cart');
        // $cart = Session::get('cart', []); // Get cart from session, default to empty array if not exists
        // Session::put('cart',[]);
        // session_start();
        return view('neworder',[
            'namaHalaman'=>'New Order',
            'categories'=>Category::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }

    public function AddToCart($id)
    {
        $key = 'menu_'.$id;
        // if(Session::has($key))
        // {
        //     $val = Session::get($key);
        //     $val++;
        //     Session::put($key,$val);
        // }
        // else
        // {
        //     Session::put($key,1);
        // }
        // return redirect()->back()->with('success', 'Product added to cart successfully!');

        $cart = Session::get('cart', []); // Get cart from session, default to empty array if not exists
        if (isset($cart[$key])) {
            $cart[$key]++; // Increment quantity if product exists
        } else {
            $cart[$key] = 1; // Set quantity to 1 if product doesn't exist
        }
        Session::put('cart', $cart); // Update cart in session
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function RemoveFromCart($id)
    {
        $key = 'menu_'.$id;
        // if(Session::has($key))
        // {
        //     $val = Session::get($key);
        //     $val--;
        //     if($val<=0) Session::forget($key);
        //     }
        //     else
        //     {
        //         Session::put($key,$val);
        //     }
        // }
        // return redirect()->back()->with('success', 'Product removed from cart successfully!');
        $cart = Session::get('cart', []);
        if (isset($cart[$key])) {
            $cart[$key]--;
            if ($cart[$key] <= 0) {
                unset($cart[$key]); // Remove product from cart if quantity becomes zero or less
            }
            Session::put('cart', $cart); // Update cart in session
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }
        return redirect()->back()->with('error', 'Product not found in cart!');
    }

    public function UpdateCart()
    {
        dd(
            Session::all()
        );
    }
}
