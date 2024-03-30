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
        
        \App\Models\Category::create([
            'nama'=>'TempCategory',
            'slug'=>'temp-category',
        ]);
        \App\Models\Category::create([
            'nama'=>'Nasi',
            'slug'=>'nasi',
        ]);
        \App\Models\Category::create([
            'nama'=>'Mie',
            'slug'=>'mie',
        ]);
        
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'nasi goreng seafood',
            'harga'=>20,
            'desc'=>'dengan cumi dan udang',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'egg fried rice',
            'harga'=>13,
            'desc'=>'uncle roger approved',
        ]);
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'mie ayam bakso',
            'harga'=>17,
            'desc'=>'pake ayam sama bakso',
        ]);
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'sate babi',
            'harga'=>30,
            'desc'=>'100% haram',
        ]);
        \App\Models\Menu::create([
            'category_id'=>1,
            'nama'=>'ketoprak rahasia',
            'harga'=>12,
            'desc'=>'tidak dikasih tahu',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'nasi kuning',
            'harga'=>23,
            'desc'=>'nasi berwarna kuning',
        ]);
        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'nasi merah',
            'harga'=>23,
            'desc'=>'nasi berwarna merah',
        ]);
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'mie ayam pangsit',
            'harga'=>15,
            'desc'=>'resep rahasia maz izat',
        ]);
        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'mie ayam komplit',
            'harga'=>99,
            'desc'=>'resep rahasia maz izat',
        ]);

        \App\Models\Menu::create([
            'category_id'=>2,
            'nama'=>'nasi hainan',
            'harga'=>22,
            'desc'=>'+10 china points',
        ]);

        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'mie goreng',
            'harga'=>22,
            'desc'=>'desk',
        ]);

        \App\Models\Menu::create([
            'category_id'=>3,
            'nama'=>'mie rebus',
            'harga'=>22,
            'desc'=>'desk',
        ]);
        
    }
}
