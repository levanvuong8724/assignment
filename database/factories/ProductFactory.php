<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => '',
            'price' => rand(1, 100000000),
            'quantity' => rand(1, 10),
            'view' => rand(1, 10),
            'category_id' => rand(1, 5),
        ];
    }
}
