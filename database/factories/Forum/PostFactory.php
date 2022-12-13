<?php

namespace Database\Factories\Forum;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'forum_id' => 1,
            'thread_id' => 2,
            'post_text' => fake()->paragraph(),
            'post_author' => '1',
            'post_author_ip_address' => '127.0.0.1',
        ];
    }
}
