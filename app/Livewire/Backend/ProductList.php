<?php

namespace App\Livewire\Backend;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        $requests = Product::where('status', 1)->paginate(12);
        return view('livewire.backend.product-list', [
            'requests' => $requests
        ]);
    }
}
