<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.user_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role !== 'customer') {
                Auth::logout();
                return redirect()->back()->with('error', 'You are not allowed to login from here');
            }
            if (!$user->is_verified) {
                Auth::logout();
                return redirect()->back()->with('error', 'Please verify your email using the verification code.');
            }
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
