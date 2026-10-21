<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman Beranda Publik
Route::get('/', function () {
    return view('landing');
});

// Guest Routes (Hanya untuk tamu yang belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
});

// Autentikasi Form Login & Logout
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi Rute Khusus Wali Santri
Route::middleware(['auth', 'role:wali'])->prefix('wali')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard_wali');
    });
});

// Proteksi Rute Khusus Petugas Gerbang (Guide)
Route::middleware(['auth', 'role:petugas'])->prefix('petugas')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard_petugas');
    });
});

// Proteksi Rute Khusus Admin Kesantrian Pondok
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard_admin');
    });
});