<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class VerificationController extends Controller
{
    public function showVerificationForm()
    {
        return view('auth.verify');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code'  => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->verification_code !== $request->code) {
            return back()->withErrors(['code' => 'Invalid code.']);
        }

        $user->is_verified = true;
        $user->verification_code = null;
        $user->save();

        return redirect('/login')->with('status', 'Email verified successfully.');
    }
}
