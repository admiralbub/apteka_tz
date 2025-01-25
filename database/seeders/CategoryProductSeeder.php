<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_product')->insert([
            ['category_id' => 1, 'product_id' => 1], // Laptop belongs to Technology
            ['category_id' => 2, 'product_id' => 2], // Smartphone belongs to Technology
            ['category_id' => 2, 'product_id' => 3], // Yoga Mat belongs to Health
            ['category_id' => 3, 'product_id' => 4], // Laptop belongs to Education
            ['category_id' => 4, 'product_id' => 5], // Laptop belongs to Education
            ['category_id' => 5, 'product_id' => 6], // Laptop belongs to Education
        ]);
    }
}
