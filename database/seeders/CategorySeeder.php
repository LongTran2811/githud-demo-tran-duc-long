<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
           [
               'name'=>'electronic',
               'created_at'=>now(),
               'updated_at'=>now(),
           ] ,
            [
                'name'=>'Clothing',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
