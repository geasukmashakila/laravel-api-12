<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('products', \App\Http\Controllers\API\ProductController::class);
// });

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');

