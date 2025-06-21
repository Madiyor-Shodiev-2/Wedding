<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;

Route::prefix('v1')->group(function () {
    Route::get('/venues', [HomeController::class, 'home']);
    Route::get('/venues/{venue}', [HomeController::class, 'show']);
});
