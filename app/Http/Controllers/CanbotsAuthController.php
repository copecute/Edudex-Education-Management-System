<?php

namespace App\Http\Controllers;
use App\Models\Auth\Canbots;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CanbotsAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('canbots.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'MaCBTS' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('MaCBTS', 'password');

        if (Auth::guard('canbots')->attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->back()->withErrors(['login' => 'Tài khoản hoặc mật khẩu không chính xác']);
    }

    public function logout()
    {
        Auth::guard('canbots')->logout();
        return redirect('/');
    }
}