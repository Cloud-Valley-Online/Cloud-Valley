<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarItem extends Model
{
    use HasFactory;

    /**
     * Get the item_parts for the parent Item.
     */
    public function parts()
    {
        return $this->hasMany(AvatarItemPart::class, 'parent_id')->orderBy('layer');
    }

    /**
     * Get the item composite items for the parent Item.
     */
    public function relation()
    {
        return $this->hasMany(AvatarItemRelation::class);
    }
}
