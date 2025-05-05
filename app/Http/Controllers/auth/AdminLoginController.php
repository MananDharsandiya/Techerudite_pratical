<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role !== 'admin') {
                Auth::logout();
                return back()->withErrors(['email' => 'You are not allowed to login from here']);
            }

            if (!$user->is_verified) {
                Auth::logout();
                return back()->withErrors(['email' => 'Please verify your email before login']);
            }

            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
