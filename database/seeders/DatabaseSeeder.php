<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'pacar bright',
            'email' => 'arin@bright.com',
            'password' => Hash::make('152007'),
        ]);

        //category factory 2
        Category::factory(2)->create();

        //product factory 100
        Product::factory(100)->create();
    }
}
