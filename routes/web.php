<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/refresh-services', [HomeController::class, 'refreshServices'])->name('refresh.services');