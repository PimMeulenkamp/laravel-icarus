<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    public function run()
    {
        OrderStatus::create([
            'id' => 1,
            'name' => 'Betaald',
        ]);
        OrderStatus::create([
            'id' => 2,
            'name' => 'Bezig met verwerken',
        ]);
        OrderStatus::create([
            'id' => 3,
            'name' => 'Wachten voor betaling',
        ]);OrderStatus::create([
            'id' => 4,
            'name' => 'Bezorged',
        ]);
    }
}
