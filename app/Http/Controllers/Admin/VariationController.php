<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Variation::all();
        return view('backend.variation.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('backend.variation.create_variation', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'variation_name' => 'required',
        ]);
        Variation::insert([
            'category_id' => $request->category_id,
            'variation_name' => $request->variation_name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('succ', 'Variation Added...');
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
        $variation = Variation::find($id);
        $categories = ProductCategory::all();
        return view('backend.variation.edit_variatoin', compact('categories', 'variation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'variation_name' => 'required',
        ]);
        Variation::where('id', $id)->update([
            'category_id' => $request->category_id,
            'variation_name' => $request->variation_name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('succ', 'Variation Updated...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
