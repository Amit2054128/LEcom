<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $carousel = Carousel::where('status','active')->get();
        $settingColor = Setting::first();
        $category = Category::where('status','active')->latest()->get();
        $product =  Product::where('is_active','active')->latest()->latest()->take(4)->get();
        $featuredProducts = Product::where('is_featured','active')->latest()->take(4)->get();
        return view('Frontend.Page.Home.Home',compact('carousel','settingColor','category','product','featuredProducts'));
    }
}
