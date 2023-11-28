<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    use HasFactory;
    function rel_to_variation(){
        return $this->belongsTo(Variation::class, 'variation_id');
    }
}
