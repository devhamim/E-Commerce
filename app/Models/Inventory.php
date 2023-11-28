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

    // Color
    function rel_to_color(){
        return $this->belongsTo(color::class, 'color_id');
    }

    // Color
    function rel_to_size(){
        return $this->belongsTo(size::class, 'size_id');
    }
}
