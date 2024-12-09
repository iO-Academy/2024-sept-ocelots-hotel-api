<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    public $hidden = ['created_at', 'updated_at'];

    public function hotel_rooms(): HasMany
    {
        return $this->hasMany(HotelRoom::class);
    }
}
