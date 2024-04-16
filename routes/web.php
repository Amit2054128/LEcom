<?php

use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/products',[ProductsController::class,'products'])->name('frontend.product');
Route::get('/category/{id}',[ProductsController::class,'categoryProduct'])->name('product.category');
Route::get('/categries',[FrontendCategoryController::class,'category'])->name('frontend.category');





Route::prefix('dashboard')->group(function(){
    Route::get('home',[PageController::class,'dashboard'])->name('dashboard');
    // CAROUSELS ROUTE START
    Route::get('carousel',[CarouselController::class,'carousel'])->name('carousel.index');
    Route::get('carousel/create',[CarouselController::class,'carouselCreate'])->name('carousel.create');
    Route::post('carousel/create',[CarouselController::class,'carouselStore'])->name('carousel.store');
    Route::get('/carousel/edit/{id}',[CarouselController::class,'carouselEdit'])->name('carousel.edit');
    Route::post('/carouse/edit/{id}',[CarouselController::class,'carouselUpdate'])->name('carousel.update');
    Route::get('/carouse/delete/{id}',[CarouselController::class,'carouselDelete'])->name('carousel.delete');
    Route::get('carousel-active/{id}',[CarouselController::class,'ActiveShow'])->name('carousel.active');
    Route::get('carousel-deactive/{id}',[CarouselController::class,'deactive'])->name('carousel.deactive');
    // CAROUSELS ROUTE END

    // SETTING ROUTE START

    Route::get('/setting',[SettingController::class,'index'])->name('settings');
    Route::get('/setting/create',[SettingController::class,'create'])->name('setting.create');
    Route::post('/setting/create',[SettingController::class,'store'])->name('setting.store');
    Route::get('/setting/edit/{id}',[SettingController::class,'edit'])->name('setting.edit');
    Route::post('/setting/edit/{id}',[SettingController::class,'update'])->name('setting.update');

    // SETTING ROUTE END
    // CATERGORY ROUTE START
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/create',[CategoryController::class,'store'])->name('category.post');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/edit/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/active/{id}',[CategoryController::class,'active'])->name('category.active');
    Route::get('/category/deactive/{id}',[CategoryController::class,'deactive'])->name('category.deactive');
    // CATERGORY ROUTE END


    // PRODUCT ROUTE

    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/create',[ProductController::class,'store'])->name('product.store');
    Route::get('product/show/{id}',[ProductController::class,'productShow'])->name('product.show');
    Route::get('/featured-active/{id}',[ProductController::class,'activeFeatured'])->name('featured.active');
    Route::get('/featured-deactive/{id}',[ProductController::class,'deActiveFeatured'])->name('featured.deactive');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
