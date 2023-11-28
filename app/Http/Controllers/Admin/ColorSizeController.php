<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\color;
use App\Models\size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ColorSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = color::all();
        $sizes = size::all();
        return view('backend.colorsize.colorsize', [
            'colors'=>$colors,
            'sizes'=>$sizes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->btn == 1){
            $request->validate([
                'color_name'=>'required'
            ]);
            color::insert([
                'color_name'=> $request->color_name,
                'color_code'=> $request->color_code,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('succ', 'Color Added...');
        }
        else{
            $request->validate([
                'size_name'=>'required'
            ]);
            size::insert([
                'size_name'=>$request->size_name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('succ', 'Size Added...');
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
