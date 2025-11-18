<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/ping', function () {
    return ['status' => 'ok'];
});

// Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/new', [ProductController::class, 'newProducts']);
Route::get('/products/sale', [ProductController::class, 'saleProducts']);
Route::get('/products/{id}', [ProductController::class, 'show']);
