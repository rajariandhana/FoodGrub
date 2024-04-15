<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\order_menu;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use Illuminate\View\View;

class OrderController extends Controller
{
    public function NewOrder()
    {
        return view('neworder', [
            'namaHalaman' => 'New Order',
            'categories' => Category::all(),
            // 'daftarmenu'=>Category::tipe()
        ]);
    }

    public function Orders(Request $request)
    {
        $orders = Order::orderByDesc('created_at');

        $startDate = "";
        $endDate = "";
        if ($request->has('filter_select'))
        {
            switch ($request->filter_select)
            {
                case 'thisday':
                    $startDate = Carbon::today()->toDateString();
                    $endDate = Carbon::today()->toDateString();
                    break;
                case 'thismonth':
                    $startDate = Carbon::now()->startOfMonth()->toDateString();
                    $endDate = Carbon::now()->endOfMonth()->toDateString();
                    break;
                case 'thisyear':
                    $startDate = Carbon::now()->startOfYear()->toDateString();
                    $endDate = Carbon::now()->endOfYear()->toDateString();
                    break;
                case 'customdates':
                    if($request->has('date_start') && $request->has('date_end'))
                    {
                        $startDate = $request->date_start;
                        $endDate = $request->date_end;
                    }
                    break;
                default:
                    break;
            }
        }
        if($startDate!="" && $endDate!="")
        {
            $orders->whereDate('created_at', '>=', $startDate)
                ->whereDate('created_at', '<=', $endDate);
        }
        
        $orders = $orders->get();
        // $orders = $orders->paginate(10);
        $orders_ctr = $orders->count();
        $orders_sum_totalHarga = $orders->sum('totalHarga');
        $orders_sum_totalHarga *= 1000;

        return view('orders', [
            'namaHalaman' => 'Order History',
            'orders' => $orders,
            'orders_ctr' => $orders_ctr,
            'orders_sum_totalHarga' => $orders_sum_totalHarga,
        ]);
    }

    public function ShowOrder(Request $request)
    {
        // $order->menus = order_menu::where('order_id',$request->order_id)->get();
        // $order_id = $request->order_id;
        // $orders = Order::with('orderMenus.menu')->get();
        $order = Order::findOrFail($request->order_id);
        $menus = $order->orderMenus()->with('menu')->get();
        return view('order_menu', [
            'namaHalaman' => 'Order',
            'order' => $order,
            'menus' => $menus,
            // 'daftarmenu'=>Category::tipe()
        ]);
    }

    public function CreateOrder(Request $request)
    {
        // $str = "[1_2_3][4_5_6][7_8_9]";
        $str = $request->myOrder;
        // dd($str);
        if ($str == null) {
            return redirect('/neworder');
        }
        $pattern = '/\[(.*?)\]/';
        preg_match_all($pattern, $str, $matches);
        $result = [];
        $price = 0;
        foreach ($matches[1] as $match) {
            $numbers = explode('_', $match);
            $price += intval($numbers[2] * $numbers[3]);
            $result[] = [intval($numbers[0]), strval($numbers[1]), intval($numbers[2]), intval($numbers[3])];
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
            $orderMenu->menu_nama = (string) $menuItem[1];
            $orderMenu->menu_harga = $menuItem[2];
            $orderMenu->menu_qty = $menuItem[3];
            // dd($orderMenu);
            $orderMenu->save();
        }
    }
}
