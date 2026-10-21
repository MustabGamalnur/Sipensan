<?php

use App\Http\Middleware\PreventBackHistory;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Redirect otomatis jika belum login
        $middleware->redirectGuestsTo('/login');

        // Redirect otomatis jika pengguna sudah login namun membuka halaman login kembali
        $middleware->redirectUsersTo(fn (Request $request) => match ($request->user()?->role) {
            'admin'   => '/admin/dashboard',
            'petugas' => '/petugas/dashboard',
            'wali'    => '/wali/dashboard',
            default   => '/login',
        });

        // Terapkan pencegahan cache browser pada seluruh rute web
        $middleware->appendToGroup('web', PreventBackHistory::class);

        // Mendaftarkan alias middleware
        $middleware->alias([
            'role'                 => RoleMiddleware::class,
            'prevent-back-history' => PreventBackHistory::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();