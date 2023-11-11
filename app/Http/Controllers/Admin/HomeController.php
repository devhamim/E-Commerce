<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Nette\Utils\Random;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    
    

    

    // function create_admin(){
    //     $super_admin = Admin::count();
    //     return view('backend.admin.create_admin', compact('super_admin'));
    // }
    // function create_role_admin(Request $request){
    //     $ran = rand(100, 10);
    //     $image = $request->profile;
    //     $image_name = $request->name . $ran . '.' . $image->getClientOriginalExtension();
    //     Image::make($image)->save(base_path('public/files/profile/' . $image_name));
    //     $password  = Hash::make($request->password);
        
    //     Admin::insert([
    //         'name' =>$request->name,
    //         'profile' =>$image_name,
    //         'email' => $request->email,
    //         'number' => $request->number,
    //         'role' => $request->role,
    //         'password' => $password,
    //     ]);
    //     return back();
    // }
}
