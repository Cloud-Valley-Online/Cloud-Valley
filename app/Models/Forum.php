<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    /**
     * Allow mass assignment.
     */
    protected $guarded = [];

    /**
     * Get the Category that owns the Forum.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the threads assiocated with category.
     */
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
