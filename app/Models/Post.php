<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the Thread that owns the post.
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
    
}
