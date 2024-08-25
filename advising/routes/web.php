<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class,"dashboard"])->name("dashboard");

Route::get('/login', function () {
    return view('Auth.login');
})->name('login-page');

Route::get('/logout', [AuthController::class,'logout'])->name("logout");

// Route for registration page
Route::get('/register', function () {
    return view('Auth.register');
})->name('register-page');

// Route::get('/dashboard', function () {
//     return view('Auth.dashboard');
// })->name('dashboard');


Route::post('/login', [AuthController::class,'login'])->name('login-controller');
Route::post('/register', [AuthController::class,'register'])->name('register-controller');
Route::post('/login', [AuthController::class,'login'])->name("login");