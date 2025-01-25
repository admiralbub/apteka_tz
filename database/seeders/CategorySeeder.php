<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([

            ['name' => 'Ліки від нежитю', 'category_id'=>null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Сольові розчини для носа', 'category_id'=>1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Краплі в ніс з антибіотиком', 'category_id'=>1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Судинозвужувальні краплі в ніс', 'category_id'=>null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Гормональні краплі та спреї для носа', 'category_id'=>4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
