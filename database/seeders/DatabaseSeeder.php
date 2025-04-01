<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Reservation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CitySeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        User::factory()
            ->count(20)
            ->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::factory()
            ->count(100)
            ->create();

        Reservation::factory()
            ->count(50)
            ->create();
    }
}
