<?php

use Illuminate\Support\Facades\Route;
use Modules\UserSite\Http\Controllers\UserSiteController;
use Modules\UserSite\Models\UserSite;

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
    Route::resource('usersite', UserSiteController::class)->names('usersite');
});

Route::get('/products', [UserSiteController::class, 'products'])->name('home.products');
Route::get('/wishlist', [UserSiteController::class, 'wishlist'])->name('home.wishlist');
Route::get('/checkout', [UserSiteController::class, 'checkout'])->name('home.checkout');