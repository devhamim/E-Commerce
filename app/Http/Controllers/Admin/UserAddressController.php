<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use App\Models\UserAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::all();
        return view('backend.user_address.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresss = Address::all();
        $users = User::all();
        return view('backend.user_address.create', compact('addresss', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'address_id' => 'required',
            'is_default' => 'required',
        ]);
        Address::insert([
            'user_id' =>$request->user_id,
            'address_id' =>$request->address_id,
            'is_default' =>$request->is_default,
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
        $useraddress = UserAddress::find($id);
        $addresss = Address::all();
        $users = User::all();
        return view('backend.user_address.edit', compact('useraddress','addresss', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'address_id' => 'required',
            'is_default' => 'required',
        ]);
        Address::where('id', $id)->update([
            'user_id' =>$request->user_id,
            'address_id' =>$request->address_id,
            'is_default' =>$request->is_default,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('useraddress.index')->with('succ', 'Address Update...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
