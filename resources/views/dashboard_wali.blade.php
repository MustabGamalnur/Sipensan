<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>Dashboard Wali Santri - Sipensan</title>
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
                    <span class="fw-bold text-dark">Sipensan <span class="badge bg-green text-white ms-1">Wali Santri</span></span>
                </a>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm bg-green-lt fw-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            <div class="d-none d-sm-block ps-2 text-start">
                                <div class="fw-bold">{{ Auth::user()->name }}</div>
                                <div class="mt-1 small text-secondary">Wali Santri Terdaftar</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                            <a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit();" class="dropdown-item text-danger">Sign out</a>
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
                            <div class="page-pretitle">Portal Layanan</div>
                            <h2 class="page-title text-dark">Reservasi & E-Tiket Saya</h2>
                        </div>
                        <div class="col-auto ms-auto">
                            <a href="{{ url('/#booking-section') }}" class="btn btn-warning fw-bold text-dark">+ Buat Reservasi Baru</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <div class="alert alert-success alert-important" role="alert">
                        <strong>Selamat Datang, {{ Auth::user()->name }}!</strong> Anda dapat melihat jadwal kunjungan ananda tercinta dan mengunduh E-Tiket resmi di sini.
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-header"><h3 class="card-title m-0">Riwayat Reservasi Kunjungan</h3></div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Kode Tiket</th>
                                        <th>Nama Santri</th>
                                        <th>Tanggal & Sesi</th>
                                        <th>Spot Dipilih</th>
                                        <th>Status Reservasi</th>
                                        <th class="w-1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge bg-primary-lt font-monospace fw-bold">TK-202610-04</span></td>
                                        <td class="fw-medium">Ahmad Fauzan (Kelas 8A)</td>
                                        <td>Ahad, 18 Oktober 2026 (08:00 - 11:30 WIB)</td>
                                        <td><span class="badge bg-warning-lt">Gazebo 4 (Kolam Ikan)</span></td>
                                        <td><span class="badge bg-success text-white">Disetujui</span></td>
                                        <td><button class="btn btn-sm btn-outline-primary" type="button">Unduh Tiket</button></td>
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