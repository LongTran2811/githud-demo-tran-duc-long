<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 14',
                'description' => 'Newest Apple smartphone',
                'price' => 999.99,
                'quantity' => 50,
                'image' => 'a1.png',
                'category_id' => 1,
                'brand_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Air Max',
                'description' => 'High-quality running shoes',
                'price' => 199.99,
                'quantity' => 200,
                'image' => 'a2.png',
                'category_id' => 2,
                'brand_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
