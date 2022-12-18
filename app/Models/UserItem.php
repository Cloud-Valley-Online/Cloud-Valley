<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public function avataritem()
    {
        return $this->hasOne(AvatarItem::class, 'id');
    }



}
