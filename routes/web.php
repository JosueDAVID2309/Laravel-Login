<?php
use Illuminate\Routing\Router;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'postLogin'])->name('login');

Route::get('/register', [AuthController::class,'register']);
Route::post('/register', [AuthController::class,'postRegister'])->name('register');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::patch('/profile/update', [AuthController::class,'editProfile'])->name('profile.update');

Route::get('/inicio', [AuthController::class,'inicio'])->middleware('auth');