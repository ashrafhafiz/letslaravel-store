<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sizes';
    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function ColorSize(): HasMany
    {
        return $this->hasMany(ColorSize::class, 'size_id');
    }
}
