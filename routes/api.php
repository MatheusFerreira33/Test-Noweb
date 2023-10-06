<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::post('/users', [UserController::class, 'create']);
Route::post('/login', [AuthController::class, 'login']);