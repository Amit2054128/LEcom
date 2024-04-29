<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
public function home(){
    $carousel = Carousel::where('status','active')->get();
    $settingColor = Setting::first();
    $category = Category::where('status','active')->latest()->get();
    $product =  Product::where('is_active','active')->latest()->latest()->take(4)->get();
    $featuredProducts = Product::where('is_featured','active')->latest()->take(4)->get();
    return view('Frontend.Page.Home.Home',compact('carousel','settingColor','category','product','featuredProducts'));
}

public function logout(){
    Auth::logout();
    return redirect()->route('home');
}
}
