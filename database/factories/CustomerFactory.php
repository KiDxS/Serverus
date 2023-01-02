<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'customer_name' => fake()->name(),
            'address' => "Purok 6, Salvacion. Panabo City",
            'phone_number' => fake()->e164PhoneNumber(),
        ];
    }
}