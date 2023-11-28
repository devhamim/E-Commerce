<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductConfiguration extends Model
{
    use HasFactory;

    function rel_to_productitem(){
        return $this->belongsTo(ProductItem::class, 'product_item_id');
    }
    function rel_to_variationoption(){
        return $this->belongsTo(VariationOption::class, 'variation_option_id');
    }
}
