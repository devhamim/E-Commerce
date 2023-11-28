<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductItem;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     //home
    public function home()
    {
        $banners = Banner::all();
        $categorys = ProductCategory::all();
        $productitems = ProductItem::all();
        return view('frontend.index',[
            'banners'=>$banners,
            'categorys'=>$categorys,
            'productitems'=>$productitems,
        ]);
    }
     //product_details
    public function product_details($sku)
    {
        $productitems = ProductItem::where('sku',$sku)->get();
        return view('frontend.productDetails',[
            'productitems'=>$productitems,
        ]);
    }
}
