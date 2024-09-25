<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::group(['prefix' => 'admin'],function(){

    Route::group(['prefix' => 'login'],function(){

        Route::get('/',[AdminLoginController::class,'index']);
        Route::get('/verify',[AdminLoginController::class,'AdminEmailVerify'])->name('verifyemail');
        Route::post('/verification/code',[AdminLoginController::class,'AdminEmailCodeVerified'])->name('admin.email.verified.code');

    });


    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');

    Route::get('/update/about/section',[AboutController::class,'index'])->name('admin.about.section');

    Route::post('store/about/section',[AboutController::class,'store'])->name('admin.store.about.section');
});

