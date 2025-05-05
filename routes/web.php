<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

Route::get('/register/customer', [CustomerRegisterController::class, 'showRegisterForm'])->name('customer.register');
Route::post('/register/customer', [CustomerRegisterController::class, 'register']);

Route::get('/register/admin', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/register/admin', [AdminRegisterController::class, 'register']);

Route::get('/verify', [VerificationController::class, 'showVerificationForm'])->name('verify.form');
Route::post('/verify', [VerificationController::class, 'verify']);

Route::get('/login/admin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login/admin', [AdminLoginController::class, 'login']);

Route::get('/login/user', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/login/user', [UserLoginController::class, 'login'])->name('user.login.submit');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'verified', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
});