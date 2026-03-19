<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Unguarded;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Unguarded]
class Product extends Model
{
    public function bids(): HasMany {
        return $this->hasMany(Bid::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function highestBid(): HasOne {
        return $this->hasOne(Bid::class)->latestOfMany("amount");
    }
}
