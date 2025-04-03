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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1, 9),
            'whole_sale_price' => $this->faker->randomFloat(2, 10, 100),
            'retail_price' => $this->faker->randomFloat(2, 20, 200),
        ];
    }
}
