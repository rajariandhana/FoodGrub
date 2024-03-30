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
        Menu::create([
            'category_id'=>2,
            'nama'=>'nasi hainan',
            'harga'=>22,
            'desc'=>'+10 china points',
        ]);

        Menu::create([
            'category_id'=>3,
            'nama'=>'mie goreng',
            'harga'=>22,
            'desc'=>'desk',
        ]);

        Menu::create([
            'category_id'=>3,
            'nama'=>'mie rebus',
            'harga'=>22,
            'desc'=>'desk',
        ]);
    }
}
