<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // 1. Jika pengguna belum login, arahkan ke form login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // 2. Cek apakah role akun saat ini sesuai dengan role yang diizinkan rute
        $userRole = Auth::user()->role;
        if (!in_array($userRole, $roles)) {
            abort(403, 'Role Anda ('.strtoupper($userRole).') tidak memiliki izin untuk membuka halaman ini.');
        }

        return $next($request);
    }
}