<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    use HasFactory;

    /**
     * Get the forums assiocated with category.
     */
    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
}
