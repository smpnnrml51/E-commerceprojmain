<?php

use Modules\Order\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use Modules\Order\Http\Controllers\OrderController;

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

Route::group([], function () {
    Route::resource('order', OrderController::class)->names('order');
});

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'index');
    Route::post('stripe', 'stripe')->name('stripe.post');
});
Route::get('orders', [OrderController::class, 'orders'])->name('index');