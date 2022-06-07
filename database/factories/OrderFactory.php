<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName(),
            'street_number' => (string) $this->faker->randomNumber(),
            'zipcode' => $this->faker->word(),
            'city' => $this->faker->city(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'order_status_id' => rand(1,4),

            'user_id' => 1,
        ];
    }
}
