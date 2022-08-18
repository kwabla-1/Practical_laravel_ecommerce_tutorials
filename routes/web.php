<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

//getting the data
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');