<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'products';
    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'image_id');

    }
    public function colors(): HasMany
    {
        return $this->hasMany(Color::class, 'color_id');
    }

    public function sizes(): HasMany
    {
        return $this->hasMany(Size::class, 'size_id');
    }
}
