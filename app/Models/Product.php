<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'products';
    protected $guarded = [];

    public function children(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
