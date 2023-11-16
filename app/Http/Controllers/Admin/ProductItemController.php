<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;
use Photo;

class ProductItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productitems = ProductItem::all();
        return view('backend.product_item.index', compact('productitems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.product_item.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'    => 'required',
            'qty_in_stock'  => 'required',
            'stock_price'   => 'required',
            'sale_price'    => 'required',
            'product_image' => 'required',
        ]);
        Photo::upload($request->product_image, 'files/productitem', Str::random(8));
        ProductItem::insert([
            'product_id'    =>$request->product_id,
            'SKU'           =>Str::random(8),
            'qty_in_stock'  =>$request->qty_in_stock,
            'stock_price'   =>$request->stock_price,
            'product_image' =>Photo::$name,
            'sale_price'    =>$request->sale_price,
            'created_at'    =>Carbon::now(),
        ]);
        return back()->with('succ', 'Product added...');
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
        $productitems = ProductItem::find($id);
        $products = Product::all();
        return view('backend.product_item.edit', compact('productitems', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id'    => 'required',
            'qty_in_stock'  => 'required',
            'stock_price'   => 'required',
            'sale_price'    => 'required',
            'product_image' => '',
        ]);
        if($request->product_image != ''){
            Photo::upload($request->product_image, 'files/productitem', Str::random(8));
            ProductItem::where('id', $id)->update([
                'product_id'    =>$request->product_id,
                'qty_in_stock'  =>$request->qty_in_stock,
                'stock_price'   =>$request->stock_price,
                'product_image' =>Photo::$name,
                'sale_price'    =>$request->sale_price,
                'created_at'    =>Carbon::now(),
            ]);
        }
        else{
            ProductItem::where('id', $id)->update([
                'product_id'    =>$request->product_id,
                'qty_in_stock'  =>$request->qty_in_stock,
                'stock_price'   =>$request->stock_price,
                'sale_price'    =>$request->sale_price,
                'created_at'    =>Carbon::now(),
            ]);
        }
        return redirect()->route('product-item.index')->with('succ', 'Product Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
