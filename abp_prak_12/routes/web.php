<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\SessionMiddleware;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware(SessionMiddleware::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/keyboards', [KeyboardController::class, 'index'])->name('keyboards.index')->middleware(['auth', SessionMiddleware::class]);
Route::get('/keyboards/{id}', [KeyboardController::class, 'show'])->name('keyboards.show')->middleware('auth');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');
