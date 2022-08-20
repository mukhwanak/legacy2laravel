<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('/user', [HomeController::class, 'update']);
