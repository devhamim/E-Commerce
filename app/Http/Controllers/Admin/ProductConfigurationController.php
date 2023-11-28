<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductConfiguration;
use App\Models\ProductItem;
use App\Models\Variation;
use App\Models\VariationOption;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProductConfiguration = ProductConfiguration::all();
        return view('backend.product_configuration.index', compact('ProductConfiguration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productitem   = ProductItem::all();
        $variationoption  = VariationOption::all();
        return view('backend.product_configuration.create', compact('productitem', 'variationoption'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_item_id' => 'required',
            'variation_option_id' => 'required',
        ]);
        ProductConfiguration::insert([
            'product_item_id' =>$request->product_item_id,
            'variation_option_id' =>$request->variation_option_id,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Products Configuration added...');
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
        $ProductConfigurations = ProductConfiguration::find($id);
        $productsitems   = ProductItem::all();
        $variationoption  = VariationOption::all();
        return view('backend.product_configuration.edit', compact('ProductConfigurations', 'productsitems', 'variationoption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_item_id' => 'required',
            'variation_option_id' => 'required',
        ]);
        ProductConfiguration::where('id', $id)->update([
            'product_item_id' =>$request->product_item_id,
            'variation_option_id' =>$request->variation_option_id,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('product-configuration.index')->with('succ', 'Product Configuration Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
