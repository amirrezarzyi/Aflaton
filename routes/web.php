<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->namespace('Admin')->group(function(){

    //داشبورد
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class , 'index'])->name('admin.home');

       //محصولات
       Route::prefix('products')->group(function(){
          Route::get('/', [App\Http\Controllers\Admin\ProductController::class , 'index'])->name('admin.products.index');
          Route::get('/create', [App\Http\Controllers\Admin\ProductController::class , 'create'])->name('admin.products.create');
          Route::post('/store', [App\Http\Controllers\Admin\ProductController::class , 'store'])->name('admin.market.store');
          Route::get('/show/{product}', [App\Http\Controllers\Admin\ProductController::class , 'show'])->name('admin.products.show');
          Route::get('/edit/{product}', [App\Http\Controllers\Admin\ProductController::class , 'edit'])->name('admin.products.edit');
          Route::put('/update/{product}', [App\Http\Controllers\Admin\ProductController::class , 'update'])->name('admin.products.update');
          Route::delete('/destroy/{product}', [App\Http\Controllers\Admin\ProductController::class , 'destroy'])->name('admin.products.destroy');
       });

       //قراردادها
       Route::prefix('factories')->group(function(){
          Route::get('/', [App\Http\Controllers\Admin\FactorController::class , 'index'])->name('admin.factories.index');
          Route::get('/create', [App\Http\Controllers\Admin\FactorController::class , 'create'])->name('admin.factories.create');
          Route::post('/store', [App\Http\Controllers\Admin\FactorController::class , 'store'])->name('admin.factories.store');
          Route::get('/edit/{factory}', [App\Http\Controllers\Admin\FactorController::class , 'edit'])->name('admin.factories.edit');
          Route::put('/update/{factory}', [App\Http\Controllers\Admin\FactorController::class , 'update'])->name('admin.factories.update');
          Route::delete('/destroy/{factory}', [App\Http\Controllers\Admin\FactorController::class , 'destroy'])->name('admin.factories.destroy');
       });

 });
