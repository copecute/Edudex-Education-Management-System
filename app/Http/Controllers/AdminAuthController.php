<?php

namespace App\Http\Controllers;
use App\Models\Auth\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('UserName', 'Password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard'); // Đổi đường dẫn tùy vào trang quản trị của bạn
        }

        return redirect()->back()->withErrors(['login' => 'Tài khoản hoặc mật khẩu không chính xác']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

}