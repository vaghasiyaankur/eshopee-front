<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('collections', function () {
    return view('collection');
});
Route::get('/', [WebController::class,'home'])->name('home');

Route::get('categories', [WebController::class,'all_categories'])->name('categories');
Route::get('category-ajax/{id}', [WebController::class,'categories_by_category'])->name('category-ajax');
// Route::get('category-ajax/{id}', [WebController::class,'categories_by_category'])->name('products');


Route::get('/product/{slug}', [WebController::class,'product'])->name('product');
Route::get('products', [WebController::class,'products'])->name('products');
Route::post('category-products', [WebController::class,'category_products'])->name('category_products');
Route::get('orderDetails', [WebController::class,'orderdetails'])->name('orderdetails');
Route::get('discounted-products', [WebController::class,'discounted_products'])->name('discounted-products');


Route::get('collections-all', function () {
    return view('collection-all');
});

Route::get('/about', [WebController::class,'about_us'])->name('aboutus');

Route::get('/contact', [WebController::class,'contact'])->name('contact');

Route::get('/blog', [WebController::class,'blog'])->name('blogs');

