<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.home.home');
    }
    function admin_login(){
        return view('backend.include.admin_login');
    }
    function adminlogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            $admin_pass = $admin->password;
            $req_pass = $request->password;
            if (Hash::check($req_pass,  $admin_pass)) {
                if (Auth::attempt($request->only('email', 'password'))) {
                    return redirect()
                        ->route('dashboard')
                        ->with('Welcome! Your account has been successfully created!');
                }
            }
            else{
                return 'not';
            }
        }
        else{
            return back()->with('err', 'Entire Valid Email...');
        }
        
    }
    function admin_register(){
        $super_admin = Admin::count();
        return view('backend.include.admin_register', compact('super_admin'));
    }
    function admin_store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'number' => 'required|max:11',
            'password' => 'required|min:8',
        ]);
        $ran = rand(100, 10);
        $image = $request->profile;
        $image_name = $request->name . $ran . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/files/profile/' . $image_name));
        $password  = Hash::make($request->password);
        
        Admin::insert([
            'name' =>$request->name,
            'profile' =>$image_name,
            'email' => $request->email,
            'number' => $request->number,
            'role' => $request->role,
            'password' => $password,
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()
                ->route('dashboard')
                ->with('Welcome! Your account has been successfully created!');
        }
    }
}
