<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.admin_register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $code = rand(100000, 999999);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => 'admin',
            'verification_code' => $code,
        ]);

        Mail::raw("Your verification code is: $code", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Verify Your Email');
        });

        return redirect()->route('verify.form')->with('email', $user->email);
    }
}
