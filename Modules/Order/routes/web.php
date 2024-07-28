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



Route::group(['middleware'=>'admin.auth'],function(){
    Route::get('orderDetails/{id}', [orderController::class, 'orderDetails'])->name('order-details');
    Route::get('orders', [OrderController::class, 'orders'])->name('order.index');
    Route::put('/orders/{order}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');

 });

 Route::group(['middleware'=>'auth'],function(){
    Route::get('orderTrack/{id}', [OrderController::class, 'orderTrack'])->name('order-track');

 });