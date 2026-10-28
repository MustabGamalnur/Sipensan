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
            'email'         => ['required', 'email'],
            'password'      => ['required'],
            'expected_role' => ['nullable', 'string', 'in:admin,petugas,wali'],
        ]);

        $attemptData = [
            'email'    => $credentials['email'],
            'password' => $credentials['password'],
        ];

        if (Auth::attempt($attemptData)) {
            $request->session()->regenerate();

            $userRole = Auth::user()->role;
            $expectedRole = $request->input('expected_role');

            // Cek apakah akun yang login sesuai dengan pintu peran yang dipilih
            if ($expectedRole && $userRole !== $expectedRole) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                $roleLabels = [
                    'admin'   => 'Admin Kesantrian',
                    'petugas' => 'Petugas Gerbang (Guide)',
                    'wali'    => 'Wali Santri',
                ];

                $portalName = $roleLabels[$expectedRole] ?? strtoupper($expectedRole);

                return back()
                    ->withErrors(['email' => "Akses Ditolak! Akun Anda tidak memiliki hak akses pada portal {$portalName}."])
                    ->withInput($request->only('email', 'expected_role'));
            }

            // Arahkan dashboard sesuai role akun
            return match ($userRole) {
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