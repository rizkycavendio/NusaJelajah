<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TourPackageController;
use App\Http\Controllers\AllTourController;
use App\Http\Controllers\DetailController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all-tour', [AllTourController::class, 'index'])->name('all-tour');
Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');
Route::get('/all-tour/category/{slug}', [CategoryController::class, 'index'])->name('category-filter');
Route::get('/all-tour/region/{slug}', [RegionController::class, 'index'])->name('region-filter');
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])
           ->name('dashboard');
        Route::resource('tour-package', TourPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('region', RegionController::class);
    });
Auth::routes(['verify' => true]);
