<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingMethod;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShippingMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping_methods = ShippingMethod::all();
        return view('backend.shipping_methods.index', compact('shipping_methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.shipping_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:shipping_methods|max:255',
            'price' => 'required|max:11',
        ]);
        ShippingMethod::insert([
            'name' =>$request->name,
            'price' =>$request->price,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Shipping Methods added...');
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
        $ShippingMethod = ShippingMethod::find($id);
        return view('backend.shipping_methods.edit', compact('ShippingMethod'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:11',
        ]);
        ShippingMethod::where('id', $id)->update([
            'name' =>$request->name,
            'price' =>$request->price,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('shipping-methods.index')->with('succ', 'Shipping Methods Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
