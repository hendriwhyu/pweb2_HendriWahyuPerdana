<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {

        // Validasi data yang dikirimkan oleh form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // $request['password'] = Hash::make($request['password']);

        // Cek credentials user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->id_role == "1") {
                return redirect()->intended('/dashboard');
            } elseif ($user->id_role == "2") {
                return redirect()->intended('/dashboard');
                if (!redirect()->intended('/dashboard')) {
                    abort(404);
                }
            }
        } else {

            return back()->with('logError', 'login failed!');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
