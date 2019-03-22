<?php

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
    return view('layouts.front-end.index');
});
Route::get('/contact', function () {
    return view('layouts.front-end.info');
});
Route::get('/dashboard', function () {
    return view('dashboard.front-end.index');
});
Route::get('/product-detail', function () {
    return view('layouts.front-end.view_detail');
});
Route::prefix('/dashboard')->group(function(){
    Route::resource('categories', 'admin\CategoriesController');
    Route::resource('slider', 'admin\SliderController');
});

