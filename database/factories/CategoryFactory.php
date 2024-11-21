<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word, // Generate a random word for the category name
            'image' => 'categories/default.png', // Set a default image path
        ];
    }
}
