<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>Portal Pos Gerbang - Sipensan</title>
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
                    <span class="fw-bold text-dark">Sipensan <span class="badge bg-blue text-white ms-1">Guide Gerbang</span></span>
                </a>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm bg-blue-lt fw-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            <div class="d-none d-sm-block ps-2 text-start">
                                <div class="fw-bold">{{ Auth::user()->name }}</div>
                                <div class="mt-1 small text-secondary">Petugas Keamanan & Guide</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                            <form id="logout-form-petugas" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                            <a href="javascript:void(0);" onclick="document.getElementById('logout-form-petugas').submit();" class="dropdown-item text-danger">Sign out</a>
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
                            <div class="page-pretitle">Pos Keamanan Utama</div>
                            <h2 class="page-title text-dark">Manifes Kedatangan Tamu Hari Ini</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <div class="alert alert-info alert-important" role="alert">
                        <strong>Peran Petugas Gerbang:</strong> Pandu wali santri menuju lokasi spot yang tercatat dan ubah status menjadi <strong>Sudah Tiba</strong> saat kendaraan masuk gerbang.
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title m-0">Daftar Tamu Sesi Pagi (08:00 - 11:30 WIB)</h3>
                            <span class="badge bg-blue text-white">1 Rombongan Terjadwal</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode Tiket</th>
                                        <th>Wali Santri</th>
                                        <th>Santri yang Dijenguk</th>
                                        <th>Tujuan Spot (Guide)</th>
                                        <th>Status Kedatangan</th>
                                        <th class="text-center">Aksi Gate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge bg-secondary-lt font-monospace fw-bold">TK-202610-04</span></td>
                                        <td class="fw-bold">Bpk. Hendra (Avanza B 1234 CD)</td>
                                        <td>Ahmad Fauzan (Kamar Umar Bin Khattab)</td>
                                        <td><span class="badge bg-yellow-lt fs-6 fw-bold">GZ-04 (Gazebo Kolam Ikan)</span></td>
                                        <td><span class="badge bg-secondary">Belum Tiba</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success fw-bold" type="button">
                                                Konfirmasi Hadir (Check-in)
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.6.1/dist/js/tabler.min.js" defer></script>
</body>
</html>