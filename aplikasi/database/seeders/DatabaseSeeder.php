<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // \App\Models\Category::create([
        //     'nama'=>'TempCategory',
        //     'slug'=>'temp-category',
        // ]);
        // \App\Models\Category::create([
        //     'nama'=>'Nasi',
        //     'slug'=>'nasi',
        // ]);
        // \App\Models\Category::create([
        //     'nama'=>'Mie',
        //     'slug'=>'mie',
        // ]);
        
        // \App\Models\Menu::create([
        //     'category_id'=>2,
        //     'nama'=>'nasi goreng seafood',
        //     'harga'=>20,
        //     'desc'=>'dengan cumi dan udang',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>2,
        //     'nama'=>'egg fried rice',
        //     'harga'=>13,
        //     'desc'=>'uncle roger approved',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>3,
        //     'nama'=>'mie ayam bakso',
        //     'harga'=>17,
        //     'desc'=>'pake ayam sama bakso',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>1,
        //     'nama'=>'sate babi',
        //     'harga'=>30,
        //     'desc'=>'100% haram',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>1,
        //     'nama'=>'ketoprak rahasia',
        //     'harga'=>12,
        //     'desc'=>'tidak dikasih tahu',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>2,
        //     'nama'=>'nasi kuning',
        //     'harga'=>23,
        //     'desc'=>'nasi berwarna kuning',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>2,
        //     'nama'=>'nasi merah',
        //     'harga'=>23,
        //     'desc'=>'nasi berwarna merah',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>3,
        //     'nama'=>'mie ayam pangsit',
        //     'harga'=>15,
        //     'desc'=>'resep rahasia maz izat',
        // ]);
        // \App\Models\Menu::create([
        //     'category_id'=>3,
        //     'nama'=>'mie ayam komplit',
        //     'harga'=>99,
        //     'desc'=>'resep rahasia maz izat',
        // ]);

        // \App\Models\Menu::create([
        //     'category_id'=>2,
        //     'nama'=>'nasi hainan',
        //     'harga'=>22,
        //     'desc'=>'+10 china points',
        // ]);

        // \App\Models\Menu::create([
        //     'category_id'=>3,
        //     'nama'=>'mie goreng',
        //     'harga'=>22,
        //     'desc'=>'desk',
        // ]);

        // \App\Models\Menu::create([
        //     'category_id'=>3,
        //     'nama'=>'bakmie',
        //     'harga'=>13,
        //     'desc'=>'desk',
        // ]);


        // CREATE CATEGORY
        \App\Models\Category::create([
            'nama'=>'Menu Paket',
            'slug'=>'menu-paket',
        ]);
        \App\Models\Category::create([
            'nama'=>'Combo Deals',
            'slug'=>'combo-deals',
        ]);
        \App\Models\Category::create([
            'nama'=>'Mie',
            'slug'=>'mie',
        ]);
        \App\Models\Category::create([
            'nama'=>'Dimsum',
            'slug'=>'dimsum',
        ]);

        \App\Models\Category::create([
            'nama'=>'Es Buah',
            'slug'=>'es buah',
        ]);\App\Models\Category::create([
            'nama'=>'Beverages',
            'slug'=>'beverages',
        ]);

    
        // CREATE MENU
        // MENU 1
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'Paket Gacoan A',
            'harga'=>40,
            'desc'=>'Mie Gacoan lv 1 + Udang Keju + Es Petak Umpet',
        ]);
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'Paket Gacoan B',
            'harga'=>40,
            'desc'=>'Mie Gacoan lv 1 + Siomay + Es Petak Umpet',
        ]);
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'Paket Hompimpa A',
            'harga'=>40,
            'desc'=>'Mie Hompimpa lv 1 + Udang Keju + Es Petak Umpet',
        ]);
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'Paket Hompimpa B',
            'harga'=>40,
            'desc'=>'Mie Hompimpa lv 1 + Siomay + Es Petak Umpet',
        ]);


        // MENU 2
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'Combo Deals Gacoan A',
            'harga'=>79,
            'desc'=>'2 Mie Gacoan lv 1, Udang Keju, Udang rambutan, Es Gobak Sodor, Es Thai tea',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'Combo Deals Gacoan B',
            'harga'=>79,
            'desc'=>'2 Mie Gacoan lv 1, Udang Keju,Siomay, Es Petak Umpet, Es Milo',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'Combo Deals Hompimpa A',
            'harga'=>79,
            'desc'=>'2 Mie Hompimpa lv 1, Udang Keju, Udang Rambutan, Es Gobak Sodor, Es Thai Tea',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'Combo Deals Hompimpa B',
            'harga'=>79,
            'desc'=>'2 Mie Hompimpa lv 1, Udang Keju, Siomay, Es Petak Umpet, Es Milo',
        ]);


        // MENU 3
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'Mie Suit',
            'harga'=>14,
            'desc'=>'Gurih tidak pedas',
        ]);
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'Mie Hompimpa lv 1',
            'harga'=>14,
            'desc'=>'Gurih pedas',
        ]);
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'Mie Gacoan lv 1',
            'harga'=>14,
            'desc'=>'Manis pedas',
        ]);


        // MENU 4
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Udang Rambutan',
            'harga'=>13,
            'desc'=>'isi 3 pcs',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Udang Keju',
            'harga'=>13,
            'desc'=>'isi 3 pcs',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Lumpia Udang',
            'harga'=>13,
            'desc'=>'isi 3 pcs',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Pangsit Goreng',
            'harga'=>14,
            'desc'=>'isi 3 pcs',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Siomay',
            'harga'=>13,
            'desc'=>'isi 3 pcs',
        ]);

        
        // MENU 5
        \App\Models\Menu::create([
            'category_id'=>5,
            'nama'=>'Es Gobak Sodor',
            'harga'=>13,
            'desc'=>'Es manis isi buah, jelly, dan cincao',
        ]);
        \App\Models\Menu::create([
            'category_id'=>5,
            'nama'=>'Es Teklek',
            'harga'=>9,
            'desc'=>'Es manis isi buah, jelly, dan cincao',
        ]);
        \App\Models\Menu::create([
            'category_id'=>5,
            'nama'=>'Es Sluku Bathok',
            'harga'=>9,
            'desc'=>'Es susu moca',
        ]);
        \App\Models\Menu::create([
            'category_id'=>5,
            'nama'=>'Es Petak Umpet',
            'harga'=>13,
            'desc'=>'Es rasa tropical segar',
        ]);


        // MENU 6
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Teh',
            'harga'=>6,
            'desc'=>'minuman',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Orange',
            'harga'=>7,
            'desc'=>'minuman',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Lemon Tea',
            'harga'=>9,
            'desc'=>'minuman',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Air Mineral',
            'harga'=>6,
            'desc'=>'minuman',
        ]);

        // CREATE DISCOUNT
        \App\Models\Discount::create([
            'minimumBeli'=>100,
            'potonganHarga'=>20,
            'diskon_mulai'=>'2024-04-01',
            'diskon_selesai'=>'2024-04-30',
        ]);
        \App\Models\Discount::create([
            'minimumBeli'=>120,
            'potonganHarga'=>30,
            'diskon_mulai'=>'2024-04-01',
            'diskon_selesai'=>'2024-04-30',
        ]);
        \App\Models\Discount::create([
            'minimumBeli'=>150,
            'potonganHarga'=>25,
            'diskon_mulai'=>'2024-04-01',
            'diskon_selesai'=>'2024-04-30',
        ]);
        \App\Models\Discount::create([
            'minimumBeli'=>200,
            'potonganHarga'=>50,
            'diskon_mulai'=>'2024-01-01',
            'diskon_selesai'=>'2024-01-31',
        ]);


        // CREATE ORDER
        for ($i = 1; $i <= 50; $i++) {
            // Generate random date between 2022-01-01 and 2024-12-31
            // $randomDate = Carbon::createFromTimestamp(rand(1640995200, 1704105600))->toDateTimeString();
            // 2024 only
            // $randomDate = Carbon::createFromTimestamp(rand(1672531200, 1704067199))->toDateTimeString();
            // Generate random date between January 1, 2024, and December 31, 2024
            $randomDate = Carbon::createFromTimestamp(mt_rand(Carbon::create(2023, 1, 1)->timestamp, Carbon::create(2024, 12, 31)->timestamp))->toDateTimeString();

            // Create order with random data
            $order = \App\Models\Order::create([
                "id" => $i,
                "keranjangHarga" => 0,
                "potonganHarga" => 0,
                "totalHarga" => 0,
                "created_at" => $randomDate,
                "updated_at" => $randomDate,
            ]);

            // Determine the number of menu items for this order
            $numItems = rand(1, 5);
            $keranjangHarga = 0;
            // Loop to create order menu items
            for ($j = 1; $j <= $numItems; $j++) {
                // Randomly select a menu
                $menu = \App\Models\Menu::inRandomOrder()->first();

                // Create order menu item
                \App\Models\order_menu::create([
                    "order_id" => $order->id,
                    "menu_id" => $menu->id,
                    "menu_nama" => $menu->nama,
                    "menu_harga" => $menu->harga,
                    "menu_qty" => $numItems,
                    "created_at" => $randomDate,
                    "updated_at" => $randomDate,
                ]);
                $keranjangHarga += $menu->harga;

            }

            $potonganHarga = 0;
            $res = Discount::where('minimumBeli', '<=', $keranjangHarga)
            ->whereDate('diskon_mulai','<=',$randomDate)
            ->whereDate('diskon_selesai','>=',$randomDate)
            ->orderByDesc('minimumBeli')
            ->first();
            if($res) $potonganHarga = $res->potonganHarga;
            // $potonganHarga = DiscountController::GetPriceCut($keranjangHarga, $randomDate);
            $totalHarga = $keranjangHarga - $potonganHarga;
            $order->update(['keranjangHarga' => $keranjangHarga]);
            $order->update(['potonganHarga' => $potonganHarga]);
            $order->update(['totalHarga' => $totalHarga]);
        }
        // CREATE ORDER
        // \App\Models\Order::create([
        //     "id" => 1,
        //     "totalHarga" => 160,
        //     "created_at" => "2024-04-04 19:59:55",
        //     "updated_at" => "2024-04-04 19:59:55",
        // ]);
        // \App\Models\Order::create([
        //     "id" => 2,
        //     "totalHarga" => 237,
        //     "created_at" => "2024-04-04 20:00:04",
        //     "updated_at" => "2024-04-04 20:00:04",
        // ]);
        // \App\Models\Order::create([
        //     "id" => 3,
        //     "totalHarga" => 69,
        //     "created_at" => "2024-03-04 20:00:04",
        //     "updated_at" => "2024-03-04 20:00:04",
        // ]);
        // \App\Models\Order::create([
        //     "id" => 4,
        //     "totalHarga" => 420,
        //     "created_at" => "2024-03-04 20:00:04",
        //     "updated_at" => "2024-03-04 20:00:04",
        // ]);


        // ORDER 1
        // \App\Models\order_menu::Create([
        //     "id" => 1,
        //     "order_id" => 1,
        //     "menu_id" => 1,
        //     "menu_nama" => "Paket Gacoan A",
        //     "menu_harga" => 40,
        //     "menu_qty" => 1,
        //     "created_at" => "2024-04-04 19:59:55",
        //     "updated_at" => "2024-04-04 19:59:55",
        // ]);
        // \App\Models\order_menu::Create([
        //     "id" => 2,
        //     "order_id" => 1,
        //     "menu_id" => 2,
        //     "menu_nama" => "Paket Gacoan B",
        //     "menu_harga" => 40,
        //     "menu_qty" => 1,
        //     "created_at" => "2024-04-04 19:59:55",
        //     "updated_at" => "2024-04-04 19:59:55",
        // ]);
        // \App\Models\order_menu::Create([
        //     "id" => 3,
        //     "order_id" => 1,
        //     "menu_id" => null,
        //     "menu_nama" => "Paket Hompimpa A",
        //     "menu_harga" => 40,
        //     "menu_qty" => 1,
        //     "created_at" => "2024-04-04 19:59:55",
        //     "updated_at" => "2024-04-04 19:59:55",
        // ]);
        // \App\Models\order_menu::Create([
        //     "id" => 4,
        //     "order_id" => 1,
        //     "menu_id" => 4,
        //     "menu_nama" => "Paket Hompimpa B",
        //     "menu_harga" => 40,
        //     "menu_qty" => 1,
        //     "created_at" => "2024-04-04 19:59:55",
        //     "updated_at" => "2024-04-04 19:59:55",
        // ]);
        
        // \App\Models\order_menu::Create([
        //     "id" => 5,
        //     "order_id" => 2,
        //     "menu_id" => 5,
        //     "menu_nama" => "Combo Deals Gacoan A",
        //     "menu_harga" => 79,
        //     "menu_qty" => 1,
        //     "created_at" => "2024-04-04 20:00:04",
        //     "updated_at" => "2024-04-04 20:00:04",
        // ]);
        // \App\Models\order_menu::Create([
        //     "id" => 6,
        //     "order_id" => 2,
        //     "menu_id" => 6,
        //     "menu_nama" => "Combo Deals Gacoan B",
        //     "menu_harga" => 79,
        //     "menu_qty" => 2,
        //     "created_at" => "2024-04-04 20:00:04",
        //     "updated_at" => "2024-04-04 20:00:04",
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);
        // \App\Models\order_menu::Create([
            
        // ]);


        
    }
}
