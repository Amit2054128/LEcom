<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function home(){
    $carousel = Carousel::where('status','active')->get();
    $settingColor = Setting::first();
    $category = Category::where('status','active')->latest()->get();
    $product =  Product::where('is_active','active')->latest()->take(4)->get();
    return view('Frontend.Page.Home.Home',compact('carousel','settingColor','category','product'));
}
}
