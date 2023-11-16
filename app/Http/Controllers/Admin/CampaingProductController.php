<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign_product;
use App\Models\Campaign;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampaingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Campaign_product = Campaign_product::all();
        return view('backend.campaing_product.index', compact('Campaign_product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products   = Product::all();
        $campaigns  = Campaign::where('start', '<=', now())->where('end', '>=', now())->get();
        return view('backend.campaing_product.create', compact('campaigns', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required',
            'product_id' => 'required',
        ]);
        Campaign_product::insert([
            'campaign_id' =>$request->campaign_id,
            'product_id' =>$request->product_id,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Campaign Products added...');
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
        $Campaign_products = Campaign_product::find($id);
        $products   = Product::all();
        $campaigns  = Campaign::where('start', '<=', now())->where('end', '>=', now())->get();
        return view('backend.campaing_product.edit', compact('Campaign_products', 'products', 'campaigns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'campaign_id' => 'required',
            'product_id' => 'required',
        ]);
        Campaign_product::where('id', $id)->update([
            'campaign_id' =>$request->campaign_id,
            'product_id' =>$request->product_id,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('campaign-product.index')->with('succ', 'Campaign Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
