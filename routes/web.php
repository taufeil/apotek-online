<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;



Route::resource('/', App\Http\Controllers\HomeController::class);
Route::get('/shop', [ShopController::class, 'index'])->name('shop.page');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::resource('/about', App\Http\Controllers\AboutController::class);