<?php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph(5),
            'category_id' => null, // To be filled dynamically in the seeder
            'user_id' => null,     // To be filled dynamically in the seeder
        ];
    }
}
