<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    function rel_to_product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
