<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;


Route::get('/', [firstController::class, 'home']);
Route::get('/about', [firstController::class, 'about']);
Route::get('/services', [firstController::class, 'services']);
Route::get('/gallery', [firstController::class, 'gallery']);
Route::get('/contact', [firstController::class, 'contact']);


