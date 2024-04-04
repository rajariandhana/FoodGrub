<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Category;

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



        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Udang Rambutan',
            'harga'=>13,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Udang Keju',
            'harga'=>13,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Lumpia Udang',
            'harga'=>13,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Pangsit Goreng',
            'harga'=>14,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>4,
            'nama'=>'Siomay',
            'harga'=>13,
            'desc'=>'isi 3 pcs',
        ]);

        

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



        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Teh',
            'harga'=>6,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Orange',
            'harga'=>7,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Lemon Tea',
            'harga'=>9,
            'desc'=>'',
        ]);
        \App\Models\Menu::create([
            'category_id'=>6,
            'nama'=>'Air Mineral',
            'harga'=>6,
            'desc'=>'',
        ]);
    }
}
