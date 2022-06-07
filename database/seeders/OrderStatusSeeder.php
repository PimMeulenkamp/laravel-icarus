<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    public function run()
    {
        OrderStatus::create([
            'id' => OrderStatus::$PAYED,
            'name' => 'Betaald',
        ]);
        OrderStatus::create([
            'id' => OrderStatus::$PROCESSING,
            'name' => 'Bezig met verwerken',
        ]);
        OrderStatus::create([
            'id' => OrderStatus::$WAITING_FOR_PAYMENT,
            'name' => 'Wachten voor betaling',
        ]);OrderStatus::create([
            'id' => OrderStatus::$DELIVERED,
            'name' => 'Bezorged',
        ]);
    }
}
