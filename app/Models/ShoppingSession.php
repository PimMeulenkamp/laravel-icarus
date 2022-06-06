<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShoppingSession extends Model
{
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
