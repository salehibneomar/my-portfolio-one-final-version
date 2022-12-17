<?php

use App\Http\Controllers\Backend\ActivityController;
use App\Http\Controllers\Backend\AppSettingsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\ProblemSolvingController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){
        
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profile')
    ->name('profile.')
    ->controller(ProfileController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/password/edit', 'editPassword')->name('edit.password');
        Route::post('password/update/', 'updatePassword')->name('update.password');
    });

    Route::prefix('settings/')
    ->name('settings.')
    ->controller(AppSettingsController::class)
    ->group(function(){
        Route::get('/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
    });

    Route::prefix('media/')
    ->name('media.')
    ->controller(MediaController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    Route::prefix('skills/')
    ->name('skills.')
    ->controller(SkillController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
    });
    
    Route::prefix('problem-solvings/')
    ->name('problem-solvings.')
    ->controller(ProblemSolvingController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
    });

    Route::prefix('education/')
    ->name('education.')
    ->controller(EducationController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/details/{id}', 'show')->name('show');
    });

    Route::prefix('activities/')
    ->name('activities.')
    ->controller(ActivityController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/details/{id}', 'show')->name('show');
    });

    Route::prefix('experiences/')
    ->name('experiences.')
    ->controller(ExperienceController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/details/{id}', 'show')->name('show');
    });

    Route::prefix('projects/')
    ->name('projects.')
    ->controller(ProjectController::class)
    ->group(function(){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/details/{id}', 'show')->name('show');
    });

    Route::prefix('cv/')
    ->name('cv.')
    ->controller(CvController::class)
    ->group(function(){
        Route::get('/upload', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/', 'destroy')->name('delete');
    });
    
});