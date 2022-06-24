<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\CategorieController;

Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::resource('categories', CategorieController::class);
Route::resource('produits', ProduitController::class);