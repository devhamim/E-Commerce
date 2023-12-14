<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // product intm
    function rel_to_proitem(){
        return $this->belongsTo(ProductItem::class, 'prodact_id');
    }

    // VariationOption
    function rel_to_varoption(){
        return $this->belongsTo(VariationOption::class, 'variationoption_id');
    }
}
