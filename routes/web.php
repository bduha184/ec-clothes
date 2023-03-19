<?php

use App\Http\Controllers\LineItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/product/{id}', 'show')->name('show');
    });
});

Route::controller(LineItemController::class)->group(function(){
    Route::name('line_item.')->group(function(){
        Route::post('/line_item/create','create')->name('create');
    });
});
