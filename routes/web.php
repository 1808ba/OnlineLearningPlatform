<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

// Landing page
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login/{role}', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

// Ensure only admin can register users
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register.submit');
});

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home route
Route::middleware(['auth'])->get('/home', [HomeController::class, 'index'])->name('home');

// Routes for different roles
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);
    });

    Route::middleware(['role:teacher'])->group(function () {
        Route::get('/teacher', [TeacherController::class, 'index']);
        Route::resource('/teacher/courses', TeacherController::class);
    });

    Route::middleware(['role:student'])->group(function () {
        Route::get('/student', [StudentController::class, 'index']);
        Route::post('/student/enroll', [StudentController::class, 'enroll']);
    });
});
