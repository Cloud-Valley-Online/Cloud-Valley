<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollOptions extends Model
{
    use HasFactory;

    /**
     * Allow mass assignment.
     */
    protected $guarded = [];

    /**
     * Get the votes on the poll.
     */
    public function votes()
    {
        return $this->hasMany(PollVotes::class, 'poll_option_id');
    }
}
