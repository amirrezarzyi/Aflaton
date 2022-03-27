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
          Route::get('/edit/{productCategory}', [App\Http\Controllers\Admin\ProductController::class , 'edit'])->name('admin.products.edit');
          Route::put('/update/{productCategory}', [App\Http\Controllers\Admin\ProductController::class , 'update'])->name('admin.products.update');
          Route::delete('/destroy/{productCategory}', [App\Http\Controllers\Admin\ProductController::class , 'destroy'])->name('admin.products.destroy');
       });

 });
