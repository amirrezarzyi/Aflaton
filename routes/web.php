<?php

use App\Http\Controllers\Admin\FactorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->namespace('Admin')->group(function () {

    //داشبورد
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');

    //محصولات
    Route::prefix('products')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/show/{product}', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin.products.show');
        Route::get('/edit/{product}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/update/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/destroy/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.destroy');
    });

    //فاکتورها
    Route::prefix('factories')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\FactorController::class, 'index'])->name('admin.factories.index');
        Route::get('/create', [App\Http\Controllers\Admin\FactorController::class, 'create'])->name('admin.factories.create');
        Route::post('/store', [App\Http\Controllers\Admin\FactorController::class, 'store'])->name('admin.factories.store');
        Route::get('/show/{factory}', [App\Http\Controllers\Admin\FactorController::class, 'show'])->name('admin.factories.show');
        Route::delete('/show/destroy/{product}/{factory}', [App\Http\Controllers\Admin\FactorController::class, 'deleteProduct'])->name('admin.factories.deleteProduct');
        Route::get('/edit/{factory}', [App\Http\Controllers\Admin\FactorController::class, 'edit'])->name('admin.factories.edit');
        Route::put('/update/{factory}', [App\Http\Controllers\Admin\FactorController::class, 'update'])->name('admin.factories.update');
        Route::delete('/destroy/{factory}', [App\Http\Controllers\Admin\FactorController::class, 'destroy'])->name('admin.factories.destroy');
    });

    //آیتم های فاکتور
    Route::prefix('items')->group(function () {
        Route::get('{factory}/create', [App\Http\Controllers\Admin\FactorItemController::class, 'create'])->name('admin.items.create');
        Route::post('{factory}/store', [App\Http\Controllers\Admin\FactorItemController::class, 'store'])->name('admin.items.store');
        Route::put('/update/{factorItem}', [App\Http\Controllers\Admin\FactorItemController::class, 'update'])->name('admin.items.update');
        Route::delete('destroy/{factorItem}', [App\Http\Controllers\Admin\FactorItemController::class, 'destroy'])->name('admin.items.destroy');
    });

    // Route::controller(FactorController::class)->prefix('factories')
    //     ->name('admin.factories')
    //     ->group(function () {
    //         Route::get('/', 'index')->name('index');
    //         Route::get('/create', 'create')->name('create');
    //         Route::post('/store', 'store')->name('store');
    //         Route::get('/show/{factory}', 'show')->name('show');

    //         Route::post('/show/destroy/{product}', 'deleteProduct')->name('deleteProduct');

    //         Route::get('/edit/{factory}', 'edit')->name('edit');
    //         Route::put('/update/{factory}', 'update')->name('update');
    //         Route::delete('/destroy/{factory}', 'destroy')->name('destroy');
    //     });
});
