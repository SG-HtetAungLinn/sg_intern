<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
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
        Route::get('/', [AdminController::class,'index'])->name('admin');
    });

    Route::group(['prefix' => 'student', 'middleware' => 'student'], function () {
        Route::get('/', [StudentController::class, 'index'])->name('student');
        Route::get('/project/details/{id}', [StudentController::class, 'projectDetails'])->name('projectDetails');
    });
});
