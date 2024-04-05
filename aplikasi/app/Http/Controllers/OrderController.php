<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\order_menu;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function neworder()
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

    public function Orders()
    {
        // $orders = Order::with('orderMenus.menu')->get();
        $orders = Order::all();
        foreach($orders as $order)
        {
            $order->menus = order_menu::where('order_id',$order->id)->get();
            // $category->menus = Menu::where('category_id', $category->id)->get();

        }

        return view('orders', [
            'namaHalaman' => 'Order History',
            'orders' => $orders
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
    public function CreateOrder(Request $request)
    {
        // $str = "[1_2_3][4_5_6][7_8_9]";
        $str = $request->myOrder;
        // dd($str);
        if($str == null) return redirect('/neworder');
        $pattern = '/\[(.*?)\]/';
        preg_match_all($pattern, $str, $matches);
        $result = [];
        $price = 0;
        foreach ($matches[1] as $match) {
            $numbers = explode('_', $match);
            $price += intval($numbers[2] * $numbers[3]);
            $result[] = [
                intval($numbers[0]),
                strval($numbers[1]),
                intval($numbers[2]),
                intval($numbers[3])
            ];
        }
        // dd($result);
        $newOrderID = $this->GetNewOrderID($price);
        $this->StoreData($result, $newOrderID);
        return redirect('/orders');
        // dd($result);
    }
    public function GetNewOrderID($price)
    {
        $order = new Order();
        $order->totalHarga = $price;
        $order->save();
        return $order->id;
    }
    public function StoreData($data, $orderID)
    {
        foreach ($data as $menuItem) {
            $orderMenu = new order_menu();
    
            $orderMenu->order_id = $orderID;
            $orderMenu->menu_id = $menuItem[0];
            $orderMenu->menu_nama = (string)$menuItem[1];
            $orderMenu->menu_harga = $menuItem[2];
            $orderMenu->menu_qty = $menuItem[3];
            // dd($orderMenu);
            $orderMenu->save();
        }

        
    }
}
