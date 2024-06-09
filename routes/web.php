<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'auth']);
Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');
Route::get('/register', [AuthController::class,'registerPage'])->name('register');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
