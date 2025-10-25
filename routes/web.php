<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\indexController;

Route::get('', [indexController::class, 'show']);
