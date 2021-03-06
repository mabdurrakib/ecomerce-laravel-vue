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

Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index'] );

Auth::routes();

Route::post('/cart', [\App\Http\Controllers\CartsController::class, 'store'])->name('cart');
Route::get('/checkout', [\App\Http\Controllers\CartsController::class, 'index'])->name('checkout');
Route::get('/checkout/get/items', [\App\Http\Controllers\CartsController::class, 'getCartItemsForCheckout']);
Route::post('/process/user/payment', [\App\Http\Controllers\CartsController::class, 'processPayment']);
