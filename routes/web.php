<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('{slug?}', [ProductsController::class, 'index']);
});