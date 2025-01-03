<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // Validate inputs
        $request->validate([
            'nvkEmail' => 'required|email',
            'nvkMatKhau' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->nvkEmail, 'password' => $request->nvkMatKhau])) {
            return redirect()->route('admin.dashboard'); // Thay đổi tùy vào route admin của bạn
        }

        return redirect()->back()->withErrors(['msg' => 'Thông tin đăng nhập không chính xác']);
    }
}
