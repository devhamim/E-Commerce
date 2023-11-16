<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ShippingMethodsController;
use App\Http\Controllers\Admin\CampaingProductController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductItemController;
use App\Http\Controllers\Admin\VariationController;
use App\Http\Controllers\Admin\VariationOptionController;
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

//Admin
Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/country', CountryController::class);
    Route::get('/create/admin', [AdminController::class, 'create_admin'])->name('create.admin');
    Route::post('/create/role/admin', [AdminController::class, 'create_role_admin'])->name('create.role.admin');
    Route::resource('/category', CategoryController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/campaign', CampaignController::class);
    Route::resource('/variation', VariationController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/product-item', ProductItemController::class);
    Route::resource('/variation_option', VariationOptionController::class);
    Route::resource('/variation_option', VariationOptionController::class);
    Route::resource('/shipping-methods', ShippingMethodsController::class);
    Route::resource('/campaign-product', CampaingProductController::class);
});

Route::get('/admin/register', [AdminController::class, 'admin_register'])->name('admin.register');
Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::post('/adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');

Route::post('/admin/store', [AdminController::class, 'admin_store'])->name('admin.store');


