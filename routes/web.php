<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'postLogin']);

Route::get('/register', [AuthController::class,'register']);
Route::post('/register', [AuthController::class,'postRegister']);

// Router::get('/inicio', [AuthController::class,'inicio']);