<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Portal Masuk - Reservasi Penjengukan Al Umanaa</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/Logo Al Umanaa.png') }}">
    <!-- Tabler UI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }
        .btn-honey {
            background-color: #FFB800;
            color: #111418;
            font-weight: 700;
            border: none;
        }
        .btn-honey:hover {
            background-color: #D97706;
            color: #ffffff;
        }
        /* Penataan centering yang aman dari kepotong di layar mana pun */
        .login-container-safe {
            width: 100%;
            max-width: 480px;
            margin: auto; /* Aman: otomatis di tengah, tidak akan pernah memotong header atas */
            padding: 3.5rem 1.25rem;
        }
    </style>
</head>
<body>
    
    <div class="login-container-safe">
        
        <!-- Logo & Brand Header -->
        <div class="text-center mb-4">
            <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark d-inline-block">
                <img src="{{ asset('img/Logo Al Umanaa.png') }}" height="68" alt="Logo Al Umanaa" style="object-fit: contain;" onerror="this.src='https://via.placeholder.com/150x50?text=Al+Umanaa'">
            </a>
            <h2 class="h3 mt-3 text-dark fw-bold mb-1">Portal Layanan Penjengukan</h2>
            
            @php
                $roleSelected = request()->query('role', 'wali');
                $defaultEmail = match($roleSelected) {
                    'admin'   => 'admin@alumanaa.sch.id',
                    'petugas' => 'petugas@alumanaa.sch.id',
                    default   => 'wali@alumanaa.sch.id',
                };
                $defaultPass = match($roleSelected) {
                    'admin'   => 'admin123',
                    'petugas' => 'petugas123',
                    default   => 'wali123',
                };
                $badgeRole = match($roleSelected) {
                    'admin'   => ['class' => 'bg-red-lt text-danger', 'label' => 'Akses Admin Kesantrian'],
                    'petugas' => ['class' => 'bg-blue-lt text-primary', 'label' => 'Akses Petugas Gerbang (Guide)'],
                    default   => ['class' => 'bg-green-lt text-success', 'label' => 'Akses Wali Santri'],
                };
            @endphp

            <span class="badge {{ $badgeRole['class'] }} px-3 py-1 mt-2">
                {{ $badgeRole['label'] }}
            </span>
        </div>

        <!-- Kartu Form Login -->
        <div class="card card-md shadow-sm border-0 rounded-4">
            <div class="card-body p-4">
                
                @if ($errors->any() || session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.871l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                        </div>
                        <div>
                            {{ session('error') ?? $errors->first() }}
                        </div>
                    </div>
                </div>
                @endif

                <form method="POST" action="{{ url('/login') }}" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label required fw-medium">Alamat Email</label>
                        <input type="email" name="email" class="form-control" placeholder="nama@alumanaa.sch.id" required value="{{ old('email', $defaultEmail) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label required fw-medium">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required value="{{ $defaultPass }}">
                    </div>

                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-honey w-100 py-2 rounded-3 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M20 12h-13l3 -3m0 6l-3 -3" /></svg>
                            Masuk ke Portal
                        </button>
                    </div>
                </form>
            </div>

            <!-- Petunjuk Kredensial Demo Asistensi -->
            <div class="card-footer bg-body-tertiary rounded-bottom-4">
                <div class="text-secondary small">
                    <strong class="d-block mb-2 text-body">Pilih Cepat Akun Demo:</strong>
                    <div class="d-flex justify-content-between align-items-center py-1 border-bottom">
                        <a href="{{ route('login', ['role' => 'wali']) }}" class="text-decoration-none">
                            <span class="badge bg-green-lt me-1">Wali Santri</span> wali@alumanaa.sch.id
                        </a>
                        <code>wali123</code>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-1 border-bottom">
                        <a href="{{ route('login', ['role' => 'petugas']) }}" class="text-decoration-none">
                            <span class="badge bg-blue-lt me-1">Petugas</span> petugas@alumanaa.sch.id
                        </a>
                        <code>petugas123</code>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <a href="{{ route('login', ['role' => 'admin']) }}" class="text-decoration-none">
                            <span class="badge bg-red-lt me-1">Admin</span> admin@alumanaa.sch.id
                        </a>
                        <code>admin123</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tautan Kembali ke Beranda -->
        <div class="text-center text-secondary mt-4">
            <a href="{{ url('/') }}" class="text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                Kembali ke Halaman Utama
            </a>
        </div>

    </div>

    <!-- Tabler JS -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/js/tabler.min.js" defer></script>
</body>
</html>