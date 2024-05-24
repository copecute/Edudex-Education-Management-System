<?php
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [AdminAuthController::class, 'login']);

Route::group(['middleware' => ['auth:admin']], function () {
    // Các routes quản trị viên
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// Thêm route logout dành cho trường hợp chưa đăng nhập
Route::get('logout', function () {
    return redirect('/');
})->name('admin.logout')->withoutMiddleware(['auth:admin']);