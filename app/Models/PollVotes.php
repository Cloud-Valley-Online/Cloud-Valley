<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollVotes extends Model
{
    use HasFactory;

    /**
     * Allow mass assignment.
     */
    protected $guarded = [];
}
