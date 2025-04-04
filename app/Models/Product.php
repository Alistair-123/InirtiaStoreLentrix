<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'whole_sale_price',
        'retail_price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
