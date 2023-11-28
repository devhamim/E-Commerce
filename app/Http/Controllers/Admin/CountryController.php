<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countrys = Country::all();
        return view('backend.country.index', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|max:255',
        ]);
        Country::insert([
            'country_name' =>$request->country_name,
            'created_at' =>Carbon::now(),
        ]);
        return back()->with('secc', 'Country Added...');
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
        $countrys = Country::find($id);
        return view('backend.country.edit', compact('countrys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'country_name' => 'required|max:255',
        ]);
        Country::where('id', $id)->update([
            'country_name' =>$request->country_name,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('country.index')->with('succ', 'Country Updated...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
