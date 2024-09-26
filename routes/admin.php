<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserManagementController;

Route::group(['prefix' => 'admin'],function(){

    // Login Route
    Route::group(['prefix' => 'login'],function(){

        Route::get('/',[AdminLoginController::class,'index']);
        Route::get('/verify',[AdminLoginController::class,'AdminEmailVerify'])->name('verifyemail');
        Route::post('/verification/code',[AdminLoginController::class,'AdminEmailCodeVerified'])->name('admin.email.verified.code');

    });

    Route::group(['middleware' => ['isAdmin']],function(){
        
        //Role Route
        Route::group(['prefix' => 'role'], function(){

            Route::get('/create',[UserManagementController::class,'createRole'])->name('admin.role.create');
        });


        Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/update/about/section',[AboutController::class,'index'])->name('admin.about.section');

        Route::post('store/about/section',[AboutController::class,'store'])->name('admin.store.about.section');
    
    });

});

