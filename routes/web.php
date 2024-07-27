<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController; 
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'home'],function(){

    Route::group(['middleware'=>'guest'],function(){
       Route::get('login',[LoginController::class, 'index'])->name('home.login'); 
       Route::post('authenticate',[LoginController::class, 'authenticate'])->name('home.authenticate');
       Route::get('register',[LoginController::class, 'register'])->name('home.register');
       Route::post('process-register',[LoginController::class, 'processRegister'])->name('home.processRegister');
    });

    Route::group(['middleware'=>'auth'],function(){
        Route::get('logout',[LoginController::class, 'logout'])->name('home.logout');
        Route::get('dashboard',[DashboardController::class, 'index'])->name('home.dashboard');
     });
});

Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'admin.guest'],function(){
       Route::get('login',[AdminLoginController::class, 'index'])->name('admin.login'); 
       Route::post('authenticate',[AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware'=>'admin.auth'],function(){
        Route::get('logout',[AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');
     });
});













