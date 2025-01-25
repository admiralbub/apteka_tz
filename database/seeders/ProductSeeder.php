<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'Аквамакс краплi назал 065% 20мл', 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp", 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'price' => 1200.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Iзофра спрей назал 8000мо 15мл', 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp", 'price' => 800.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Нафтизин крап. назал. 0,1 % фл. п/е 10 мл', 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp", 'price' => 15.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Фармазолiн крап. назал. 0,1 % фл. п/е 10 мл', 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp",  'price' => 25.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Галазолiн крап назал 0,1% фл-крап 10мл', 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp", 'price' => 5.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Мометазон-тева спрей назал 50мкг/доза 10г 60доз', 'description' => "діюча речовина: 1 мл препарату містить натрію хлориду 6,5 мг;", 'img'=>"/img/4d5e46c0-b96d-4980-aca7-ad2f77c385a3-w366-h366-wm-frame.webp",'price' => 50.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
