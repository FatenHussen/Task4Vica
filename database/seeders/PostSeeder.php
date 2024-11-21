<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create users
        $users = User::factory(5)->create();

        // Create categories
        $categories = Category::factory(3)->create();

        // Create tags
        $tags = Tag::factory(5)->create();

        // Create posts
        $users->each(function ($user) use ($categories, $tags) {
            Post::factory(10)->create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
            ])->each(function ($post) use ($tags) {
                // Attach random tags to the post
                $post->tags()->attach($tags->random(2)->pluck('id'));

                // Create comments for each post
                Comment::factory(5)->create([
                    'post_id' => $post->id,
                    'user_id' => User::inRandomOrder()->first()->id,
                ]);
            });
        });
    }
}
