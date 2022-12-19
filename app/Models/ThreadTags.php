<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadTags extends Model
{
    use HasFactory;

    /**
     * Allow mass assignment.
     */
    protected $guarded = [];

    /**
     * Get the Thread in which the tag belongs to.
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
