<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

use App\Http\Controllers\AuthController;


Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
