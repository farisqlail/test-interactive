<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/about', [App\Http\Controllers\AboutController::class, 'index'])->name('admin.about');
Route::put('/admin/about/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('admin.update');
