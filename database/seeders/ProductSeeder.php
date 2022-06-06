<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
           'name' => '1 Zak Krentenbollen',
           'price' => 300,
           'description' => '1 Zak KrentenBollen voor 3 euro'
        ]);
        Product::create([
            'name' => '3 Zakken Krentenbollen',
            'price' => 800,
            'description' => '3 Zakken KrentenBollen voor 8 euro'
        ]);
    }
}
