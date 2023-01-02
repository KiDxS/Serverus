<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'product_name' => $this->faker->product_name,
            'cost_price' => fake()->randomFloat(2, 100, 500),
            'sale_price' => fake()->randomFloat(2, 600, 1000),
            'quantity' => fake()->randomNumber(2),
            'inventory_name' => "F.I Auto Shop Inventory"

        ];
    }
}
