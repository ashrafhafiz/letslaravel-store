<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ColorSize extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'size_color';
    protected $guarded = [];

    public function Color(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function Size(): BelongsTo
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
