<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variation;
use App\Models\VariationOption;
use Illuminate\Http\Request;

class VariationOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = VariationOption::all();
        return view('backend.variation_option.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $variotions = Variation::all();
        return view('backend.variation_option.create_variation_option', compact('variotions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        VariationOption::insert([
            'variation_id' =>$request->variation_id,
            'option_name' =>$request->option_name,
        ]);
        return back()->with('succ', 'Variation Option Added...');
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
        $variotions = Variation::all();
        $request = VariationOption::find($id);
        return view('backend.variation_option.edit_variation_option', compact('variotions', 'request'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        VariationOption::where('id', $id)->update([
            'variation_id' =>$request->variation_id,
            'option_name' =>$request->option_name,
        ]);
        return back()->with('succ', 'Variation Option Updated...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
