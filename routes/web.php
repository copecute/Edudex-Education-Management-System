<?php

use Illuminate\Support\Facades\Route;

// Bao gồm các route từ Admin.php
Route::prefix('admin')->group(function () {
    include __DIR__.'/admin.php';
});

//trang chủ
Route::get('/', function () {
    return view('welcome');
});

//Đăng nhập đăng ký đăng xuất của cán bộ tuyển sinh
use App\Http\Controllers\CanbotsAuthController;
use App\Http\Controllers\CanbotsRegistrationController;

Route::get('/login', [CanbotsAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CanbotsAuthController::class, 'login']);
Route::post('/logout', [CanbotsAuthController::class, 'logout'])->name('logout');

Route::get('/register', [CanbotsRegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [CanbotsRegistrationController::class, 'register']);

// hồ sơ xét tuyển
use App\Http\Controllers\HoSoXetTuyenController;

Route::get('/dang-ky-xet-tuyen', [HoSoXetTuyenController::class, 'showForm'])->name('dang-ky-xet-tuyen');
Route::post('/dang-ky-xet-tuyen', [HoSoXetTuyenController::class, 'create']);
Route::get('/tra-cuu-ho-so', [HoSoXetTuyenController::class, 'traCuuHoSo'])->name('tra-cuu-ho-so');
Route::post('/tra-cuu-ho-so', [HoSoXetTuyenController::class, 'traCuuHoSo'])->name('tra-cuu-ho-so');
