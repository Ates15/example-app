<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $restaurant = Restaurant::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'restaurant_id' => $restaurant->id,
            'date' => fake()->date('Y_m_d'),
            'time' => fake()->time(),
            'guest_count' => fake()->numberBetween(5,10)
        ];
    }
}
