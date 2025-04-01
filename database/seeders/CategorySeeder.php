<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abcd = ['Deserts', 'Coffees', 'Soups', 'Pastas', 'Pizzas'];

        foreach ($abcd as $abc) {
            Category::create(['name' => $abc]);
        }
    }
}
