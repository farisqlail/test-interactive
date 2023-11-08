<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//tentang kami
Route::get('/admin/about', [App\Http\Controllers\AboutController::class, 'index'])->name('admin.about');
Route::put('/admin/about/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('admin.update');

//produk unggulan
Route::get('/admin/product', [App\Http\Controllers\ProductsController::class, 'index'])->name('admin.product');
Route::get('/admin/product/add', [App\Http\Controllers\ProductsController::class, 'create'])->name('admin.product.add');
Route::post('/admin/product/add', [App\Http\Controllers\ProductsController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/edit/{id}', [App\Http\Controllers\ProductsController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/product/edit/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('admin.product.update');
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('admin.product.delete');
