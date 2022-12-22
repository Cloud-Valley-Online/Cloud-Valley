<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Forum\ThreadFactory;

class Thread extends Model
{
    use HasFactory;

     /**
     * Allow mass assignment.
     */
    protected $guarded = [];

    /**
     * Get the Forum that owns the Thread.
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    /**
     * Get the posts assiocated with Thread.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the tags assiocated with Thread.
     */
    public function tags()
    {
        return $this->hasMany(ThreadTags::class);
    }

     /**
     * Get the poll options assiocated with Thread.
     */
    public function polloptions()
    {
        return $this->hasMany(PollOptions::class);
    }

     /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ThreadFactory::new();
    }
}
