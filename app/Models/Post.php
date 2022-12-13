<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Forum\PostFactory;

class Post extends Model
{
    use HasFactory;

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
