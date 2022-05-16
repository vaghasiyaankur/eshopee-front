<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('collections', function () {
    return view('collection');
});
Route::get('collections-all', function () {
    return view('collection-all');
});
Route::get('about', function () {
    return view('about-us');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blogs', function () {
    return view('blog');
});