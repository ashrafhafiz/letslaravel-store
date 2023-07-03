<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'categories';
    // protected $fillable = ['name', 'image', 'parent_id', 'created_at', 'updated_at', 'deleted_at'];
    protected $guarded = [];

    protected string $parentColumn = 'parent_id';

    protected array $cascadeDeletes = ['children'];

    protected $dates = ['deleted_at'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, $this->parentColumn);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, $this->parentColumn);
    }

    public function allChildren(): HasMany
    {
        return $this->children()->with('allChildren');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
