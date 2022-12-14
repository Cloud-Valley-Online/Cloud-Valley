<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Forum\PostFactory;

use Mews\Purifier\Casts\CleanHtml;

class Post extends Model
{
    use HasFactory;

    /**
     * Clean input and output of post.
     */
    protected $casts = [
        'post_text' => CleanHtml::class, // cleans both when getting and setting the value
    ];

    /**
     * Allow mass assignment.
     */
    protected $guarded = [];

    /**
     * Get the Thread that owns the post.
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return PostFactory::new();
    }

}
