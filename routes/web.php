<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome', [
        'categories' => \App\Models\Category::orderBy('name')->get(),
    ]);
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/products/{category}', [ProductController::class, 'index'])->name('products.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// routes/web.php
Route::post('/products', [ProductController::class, 'store']);
