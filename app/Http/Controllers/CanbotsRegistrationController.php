<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth\Canbots;
use Illuminate\Support\Facades\Hash;

class CanbotsRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('canbots.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'MaCBTS' => 'required|unique:tb_canbots',
            'password' => 'required|min:6',
        ]);

        // Hash mật khẩu
        $hashedPassword = Hash::make($request->input('password'));

        // Tạo tài khoản mới
        Canbots::create([
            'MaCBTS' => $request->input('MaCBTS'),
            'password' => $hashedPassword,
        ]);
        // Chuyển hướng đến trang đăng nhập
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}