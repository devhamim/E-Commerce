<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\color;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\size;
use App\Models\VariationOption;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function product_inventory($prodact_id)
    {
        $prodact_info = ProductItem::find($prodact_id);
        $inventoryes = Inventory::where('prodact_id', $prodact_id)->get();
        $variationoptions = VariationOption::all();
        return view('backend.inventory.inventory', [
            'prodact_info'=>$prodact_info,
            'inventoryes'=>$inventoryes,
            'variationoptions'=>$variationoptions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prodact_id' => 'required',
            'variationoption_id' => 'required',
        ]);
        inventory::insert([
            'prodact_id'=> $request->prodact_id,
            'variationoption_id'=> $request->variationoption_id,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('succ', 'Inventory added...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
