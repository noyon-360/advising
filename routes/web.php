<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, "dashboard"])->name("dashboard");
// Route::middleware('auth')->get('/', [AuthController::class, 'dashboard'])->name('dashboard');


Route::get('/login', function () {
    return view('Auth.login');
})->name('login-page');

Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

// Route for registration page
Route::get('/register', function () {
    return view('Auth.register');
})->name('register-page');

Route::get('/students/dashboard', function () {
    return view('Auth.student.student_dashboard');
})->name('student-dashboard');


Route::get('/students/create', [StudentController::class, 'create'])->name('students-create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');


Route::post('/login', [AuthController::class, 'login'])->name('login-controller');
Route::post('/register', [AuthController::class, 'register'])->name('register-controller');
Route::post('/login', [AuthController::class, 'login'])->name("login");

