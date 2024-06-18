<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Аутентификация успешна, перенаправляем в админ-панель
            return redirect()->intended(route('homeAdmin'));
        }

        // Аутентификация не удалась, перенаправляем обратно с ошибкой
        return redirect()->route('admin_login')->with('error', 'Неверные учетные данные.');

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin_login');
    }
}
