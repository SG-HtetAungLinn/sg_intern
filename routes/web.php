<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'auth'])->name('auth');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/userRegister', [AuthController::class, 'userRegister'])->name('userRegister');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [AuthController::class, 'checkUser'])->name('checkUser');

    Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {
        Route::get('/', [UserController::class,'index'])->name('user');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', function () {
            return view('admin.dashboard.dashboard');
        })->name('admin');
    });

    Route::group(['prefix' => 'student', 'middleware' => 'student'], function () {
        Route::get('/', function () {
            return view('admin.dashboard.dashboard');
        })->name('student');
    });
});
