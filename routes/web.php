<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ShowProductController;
Route::get('/', IndexController::class)->name('index.view');

Route::group(['prefix' => 'products'], function () {
    Route::get('/{id}', [CategoryController::class,'categoryProductList'])->name('category.view');
});
Route::group(['prefix' => 'product'], function () {
    Route::get('/{id}', ShowProductController::class)->name('product.view');
});



Route::group(['prefix' => 'basket'], function () {
    Route::get('/', BasketController::class)->name('basket.index');
    Route::post('/add', [BasketController::class,'addToBasket'])->name('add.basket');
    Route::delete('/delete', [BasketController::class,'deleteProductInBasket'])->name('delete.basket');
    Route::get('/count', [BasketController::class,'countBasket'])->name('basket.count');
    Route::post('/quantity', [BasketController::class,'changeQuantityProd'])->name('basket.quantity');
});