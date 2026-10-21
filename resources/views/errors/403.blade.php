<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>403 - Akses Ditolak | Sipensan Al Umanaa</title>
    <!-- Tabler UI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="border-top-wide border-warning d-flex flex-column bg-body-tertiary">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header text-danger">403</div>
                <p class="empty-title text-dark">Akses Ditolak!</p>
                <p class="empty-subtitle text-secondary">
                    Peran Anda saat ini (<strong class="badge bg-red-lt text-uppercase">{{ Auth::user()->role ?? 'Tamu' }}</strong>) tidak memiliki izin untuk membuka halaman ini.
                </p>
                <div class="empty-action">
                    @php
                        $targetUrl = match(Auth::user()?->role) {
                            'admin'   => url('/admin/dashboard'),
                            'petugas' => url('/petugas/dashboard'),
                            'wali'    => url('/wali/dashboard'),
                            default   => url('/login'),
                        };
                    @endphp
                    <a href="{{ $targetUrl }}" class="btn btn-warning d-inline-flex align-items-center gap-2 fw-bold text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0"/><path d="M5 12l6 6"/><path d="M5 12l6 -6"/></svg>
                        Kembali ke Dashboard Saya
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>