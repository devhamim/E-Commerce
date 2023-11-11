<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'home'])->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/register', [AdminController::class, 'admin_register'])->name('admin.register');
Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::post('/adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::post('admin/store', [AdminController::class, 'admin_store'])->name('admin.store');


// Route::get('/create/admin', [HomeController::class, 'create_admin'])->name('create.admin');
// Route::post('/create/role/admin', [HomeController::class, 'create_role_admin'])->name('create.role.admin');


Route::resource('/country', CountryController::class);