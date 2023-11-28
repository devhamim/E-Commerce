<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::all();
        return view('backend.address.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countrys = Country::all();
        return view('backend.address.create', compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit_number' => 'required',
            'street_number' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country_id' => 'required',
        ]);
        Address::insert([
            'unit_number' =>$request->unit_number,
            'street_number' =>$request->street_number,
            'address_line1' =>$request->address_line1,
            'address_line2' =>$request->address_line2,
            'city' =>$request->city,
            'region' =>$request->region,
            'postal_code' =>$request->postal_code,
            'country_id' =>$request->country_id,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Address added...');
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
        $address = Address::find($id);
        $countrys = Country::all();
        return view('backend.address.edit', compact('address', 'countrys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'unit_number' => 'required',
            'street_number' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country_id' => 'required',
        ]);
        Address::where('id', $id)->update([
            'unit_number' =>$request->unit_number,
            'street_number' =>$request->street_number,
            'address_line1' =>$request->address_line1,
            'address_line2' =>$request->address_line2,
            'city' =>$request->city,
            'region' =>$request->region,
            'postal_code' =>$request->postal_code,
            'country_id' =>$request->country_id,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('address.index')->with('succ', 'Address Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
