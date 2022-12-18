<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar_Item extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'avatar_items';

    /**
     * Get the item_parts for the parent Item.
     */
    public function parts()
    {
        return $this->hasMany(Avatar_Item_Part::class);
    }

    /**
     * Get the item composite items for the parent Item.
     */
    public function relation()
    {
        return $this->hasMany(Avatar_Item_Relation::class);
    }
}
