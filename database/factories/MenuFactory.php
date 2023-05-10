<?php

namespace Database\Factories;
//use App\Models\User;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'category_id' => $this->faker->unique()->numberBetween(1, Category::count()),

            'position' => $this->faker->unique()->numberBetween(1, 4),
        ];
    }
}
