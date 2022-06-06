<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartItem extends Model
{
    protected $fillable = [
        'product_id', 'quantity'
    ];
    public function shoppingSession(): BelongsTo
    {
        return $this->belongsTo(ShoppingSession::class);
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
