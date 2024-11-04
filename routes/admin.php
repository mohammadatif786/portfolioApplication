<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Models\Service;
use Faker\Guesser\Name;

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

            Route::get('/index',[UserManagementController::class,'indexRole'])->name('admin.role.index');
            Route::get('/create',[UserManagementController::class,'createRole'])->name('admin.role.crate');
            Route::post('/store',[UserManagementController::class,'storeRole'])->name('admin.role.store');
            Route::get('/edit/{id}',[UserManagementController::class,'editRole'])->name('admin.role.edit');
            Route::post('/update/{id}',[UserManagementController::class,'updateRole'])->name('admin.role.update');

            Route::get('/assign/permission/{id}',[UserManagementController::class,'assignPermission'])->name('admin.role.assign.permission');
            
        });

        //Permission Route
        Route::group(['prefix' => 'permission'],function(){

            Route::get('index',[UserManagementController::class,'indexPermission'])->name('admin.permission.index');
            Route::get('/create',[UserManagementController::class,'createPermission'])->name('admin.permission.crate');
            Route::post('/store',[UserManagementController::class,'storePermission'])->name('admin.permission.store');
            Route::get('/edit/{id}',[UserManagementController::class,'editPermission'])->name('admin.permission.edit');
            Route::post('/update/{id}',[UserManagementController::class,'updatePermission'])->name('admin.permission.update');
            Route::get('/delete/{id}',[UserManagementController::class,'deletePermission'])->name('admin.permission.delete');

        });

        //User Route
        Route::group(['prefix' => 'user'],function(){

            Route::get('index',[UserManagementController::class,'indexUser'])->name('admin.user.index');

        });
        
        Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/update/about',[AboutController::class,'index'])->name('admin.about.section');
        Route::post('store/about',[AboutController::class,'store'])->name('admin.store.about.section');
    
        //Services Route
        Route::get('/services',[ServiceController::class,'index'])->name('admin.services.section');
        Route::post('/store/service',[ServiceController::class,'store'])->name('admin.store.service.section');
        Route::get('/get/service/modal',[ServiceController::class,'getServieModal']);
        Route::get('/service/delete/{id}',[ServiceController::class,'delete']);
        Route::get('/edit/service/modal/{id}',[ServiceController::class,'edit']);
        Route::post('/update/service/{id}',[ServiceController::class,'update'])->name('admin.update.service.section');
        

        //Skills Route 
        Route::group(['prefix' => 'skills'],function(){

            Route::get('/index',[SkillsController::class,'index'])->name('admin.skills.section');
            Route::post('/store',[SkillsController::class,'store'])->name('admin.skills.store');
            Route::get('/modal',[SkillsController::class,'getSkillModal']);
            Route::get('/edit/{id}',[SkillsController::class,'edit']);
            Route::post('/update/{id}',[SkillsController::class,'update'])->name('admin.skills.update');
            Route::get('/delete/{id}',[SkillsController::class,'delete']);

        });

        Route::group(['prefix' => 'experience'],function(){

            Route::get('/index',[ExperienceController::class,'index'])->name('admin.experience.section');
            Route::get('/modal',[ExperienceController::class,'getexperienceModal']);
            Route::post('/store',[ExperienceController::class,'store'])->name('admin.experience.store');
            Route::get('/edit/{id}',[ExperienceController::class,'edit']);
            Route::post('/update/{id}',[ExperienceController::class,'update'])->name('admin.experience.update');
            Route::get('/delete/{id}',[ExperienceController::class,'delete']);

        });
    });

});

