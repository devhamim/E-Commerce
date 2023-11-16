<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign_product extends Model
{
    use HasFactory;

    function rel_to_campaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
    function rel_to_product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
