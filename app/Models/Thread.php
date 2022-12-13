<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Forum\ThreadFactory;

class Thread extends Model
{
    use HasFactory;

    /**
     * Get the Forum that owns the Thread.
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    /**
     * Get the threads assiocated with category.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
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
