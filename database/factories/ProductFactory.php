<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Restaurant;
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
        $category = Category::inRandomOrder()->first();
        $restaurant = Restaurant::inRandomOrder()->first();


        return [
            'restaurant_id' => $restaurant->id,
            'category_id' => $category->id,
            'name' => fake()->name(),
            'description' => fake()->paragraph(fake()->numberBetween(4, 6)),
            'price' => fake()->numberBetween(9, 99),
        ];
    }
}
