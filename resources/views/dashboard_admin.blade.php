<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>Panel Pengasuhan Admin - Sipensan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Logo Al Umanaa.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body>
    <div class="page">
        <!-- Header Navbar -->
        <header class="navbar navbar-expand-md d-print-none border-bottom bg-white">
            <div class="container-xl">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark d-flex align-items-center">
                    <img src="{{ asset('img/Logo Al Umanaa.png') }}" height="36" class="me-2" alt="Logo" onerror="this.style.display='none'">
                    <span class="fw-bold text-dark">Sipensan <span class="badge bg-red text-white ms-1">Administrator</span></span>
                </a>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm bg-red-lt fw-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            <div class="d-none d-sm-block ps-2 text-start">
                                <div class="fw-bold">{{ Auth::user()->name }}</div>
                                <div class="mt-1 small text-secondary">Bagian Kesantrian Pondok</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                            <form id="logout-form-admin" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                            <a href="javascript:void(0);" onclick="document.getElementById('logout-form-admin').submit();" class="dropdown-item text-danger">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Konten Halaman -->
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <div class="page-pretitle">Pusat Kendali Pengasuhan</div>
                            <h2 class="page-title text-dark">Kelola Penjengukan & Kuota Spot</h2>
                        </div>
                        <div class="col-auto ms-auto">
                            <button class="btn btn-danger fw-bold" type="button">+ Atur Kalender Libur</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <div class="alert alert-important alert-warning" role="alert">
                        <strong>Akses Penuh Administrator:</strong> Anda berwenang mengatur jadwal buka/tutup agenda pondok, menetapkan kuota saung/gazebo, dan melihat rekapitulasi data kunjungan.
                    </div>

                    <!-- Statistik Card -->
                    <div class="row row-cards mb-4">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm shadow-sm border-0">
                                <div class="card-body">
                                    <div class="text-secondary small">Total Spot Gazebo & Saung</div>
                                    <div class="h2 mb-0 mt-1">18 Spot Aktif</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm shadow-sm border-0">
                                <div class="card-body">
                                    <div class="text-secondary small">Reservasi Terkonfirmasi</div>
                                    <div class="h2 mb-0 mt-1">14 Keluarga</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm shadow-sm border-0">
                                <div class="card-body">
                                    <div class="text-secondary small">Tingkat Kedatangan Gerbang</div>
                                    <div class="h2 mb-0 mt-1 text-success">85% Tiba</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/js/tabler.min.js" defer></script>
</body>
</html>