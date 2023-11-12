<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Product::all();
        return view('backend.product.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('backend.product.create_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
        ]);
        Photo::upload($request->product_image, 'files/product', $request->product_name);
        Product::insert([
            'category_id' =>$request->category_id,
            'product_name' =>$request->product_name,
            'product_description' =>$request->product_description,
            'product_image' =>Photo::$name,
            'seo_title' =>$request->seo_title,
            'seo_description' =>$request->seo_description,
            'seo_tags' =>$request->seo_tags,
            'created_at'=>Carbon::now(),
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
        $request = Product::find($id);
        $categories = ProductCategory::all();
        return view('backend.product.edit_product', compact('request', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required',
        ]);
        Photo::upload($request->product_image, 'files/product', $request->product_name);
        Product::where('id', $id)->update([
            'category_id' =>$request->category_id,
            'product_name' =>$request->product_name,
            'product_description' =>$request->product_description,
            'product_image' =>Photo::$name,
            'seo_title' =>$request->seo_title,
            'seo_description' =>$request->seo_description,
            'seo_tags' =>$request->seo_tags,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Product added...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
