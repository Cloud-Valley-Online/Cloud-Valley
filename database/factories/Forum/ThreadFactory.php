<?php

namespace Database\Factories\Forum;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    protected $model = Thread::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'forum_id' => 1,
            'thread_author' => 1,
            'thread_subject' => fake()->text(80),
            'thread_subject_clean' => fake()->text(80),
            'last_reply_date' => now(),
            'last_poster_id' => 1,
            'reply_count'   =>  1,
        ];
    }
}
