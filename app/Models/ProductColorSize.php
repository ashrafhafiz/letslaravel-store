<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColorSize extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'product_sizes_colors';
    protected $guarded = [];
}