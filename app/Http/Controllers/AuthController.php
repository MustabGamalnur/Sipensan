<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan Halaman Login
    public function showLogin()
    {
        if (Auth::check()) {
            return match (Auth::user()->role) {
                'admin'   => redirect('/admin/dashboard'),
                'petugas' => redirect('/petugas/dashboard'),
                'wali'    => redirect('/wali/dashboard'),
                default   => redirect('/login'),
            };
        }

        return view('login');
    }

    // Memproses Percobaan Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan dashboard sesuai role akun
            return match (Auth::user()->role) {
                'admin'   => redirect()->intended('/admin/dashboard'),
                'petugas' => redirect()->intended('/petugas/dashboard'),
                'wali'    => redirect()->intended('/wali/dashboard'),
                default   => redirect('/login'),
            };
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi yang Anda masukkan salah!',
        ])->onlyInput('email');
    }

    // Proses Keluar Sistem (Logout)
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}