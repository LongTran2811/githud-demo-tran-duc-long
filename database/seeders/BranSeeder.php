<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Apple', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nike', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
//php artisan make:model Product
//php artisan make:model Category
