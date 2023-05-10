<?php

namespace Database\Factories;
//use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->text(20); // generate a string of up to 20 characters
        $name = substr($name, 0, 20); // cut off any excess characters

        return [
            
                //Old code for generating name and description
                //'name' => $this->faker->name(),
                //'description' => Str::limit($this->faker->text(50), 50), //limit description to 50 characters
        
                   
            'name' => $name,
            'description' => $this->faker->sentence(5), //truncation at 5 words
        ];
    }
                 
}
