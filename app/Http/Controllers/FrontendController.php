<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Inventory;
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
         $product = ProductItem::where('sku', $sku)->first();
         if ($product) {
             $productitems = ProductItem::where('product_id', $product->id)->get();
             $inventoryRel = Inventory::where('prodact_id',$productitems->first()->id)->get();
         }

         return view('frontend.productDetails', [
             'productitems' => $productitems,
             'inventoryRel' => $inventoryRel,
         ]);
     }



    function abouts(){
        return view('frontend.about');
    }
}
