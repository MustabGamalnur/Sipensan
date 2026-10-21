<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Penjengukan Santri - Al Umanaa Boarding School</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/Logo Al Umanaa.png') }}">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS (CACHE BUSTING UNTUK UPDATE INSTAN) -->
    <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ time() }}">
</head>
<body>

    <!-- Garis Aksen Emas Brand -->
    <div class="brand-top-stripe"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm py-1">
        <div class="container d-flex flex-row align-items-center justify-content-between">
            
            <!-- Logo Al Umanaa -->
            <a class="navbar-brand d-flex align-items-center py-1" href="{{ url('/') }}">
                <img src="{{ asset('img/Logo Al Umanaa.png') }}" alt="Pondok Pesantren Modern Al Umanaa" height="42" onerror="this.src='https://via.placeholder.com/150x50?text=Al+Umanaa'">
            </a>

            <!-- Menu Navigasi & Dropdown Portal Masuk -->
            <div class="d-flex flex-row align-items-center overflow-visible" style="gap: 15px;">
                <ul class="navbar-nav flex-row align-items-center mb-0 d-none d-md-flex" style="gap: 12px;">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark px-2 py-2 fs-6" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-secondary px-2 py-2" href="#kalender-jadwal" style="font-size: 0.95rem;">Kalender Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-secondary px-2 py-2" href="#alur" style="font-size: 0.95rem;">Alur Kunjungan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-secondary px-2 py-2" href="#booking-section" style="font-size: 0.95rem;">Denah & Spot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-secondary px-2 py-2" href="#tatatertib" style="font-size: 0.95rem;">Tata Tertib</a>
                    </li>
                </ul>
                
                <!-- DROPDOWN PORTAL MASUK -->
                <div class="dropdown">
                    <button class="btn btn-warning fw-bold text-dark rounded-pill px-3 py-1 btn-sm shadow-sm hover-lift dropdown-toggle d-flex align-items-center gap-1" type="button" id="dropdownPortalMasuk" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.85rem;">
                        <i class="fas fa-user-lock me-1"></i> Portal Masuk
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 p-2 mt-2" aria-labelledby="dropdownPortalMasuk" style="min-width: 260px; z-index: 1050;">
                        <li class="px-3 py-2 text-muted fw-bold small border-bottom mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            PILIH PERAN MASUK:
                        </li>
                        <!-- Pilihan 1: Wali Santri -->
                        <li>
                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="{{ route('login', ['role' => 'wali']) }}">
                                <span class="badge bg-success-subtle text-success p-2 rounded-circle me-2">
                                    <i class="fas fa-user-graduate"></i>
                                </span>
                                <div>
                                    <div class="fw-bold small text-dark">Wali Santri</div>
                                    <div class="text-muted" style="font-size: 0.75rem;">Reservasi & Unduh E-Tiket</div>
                                </div>
                            </a>
                        </li>
                        <!-- Pilihan 2: Petugas Gerbang -->
                        <li>
                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="{{ route('login', ['role' => 'petugas']) }}">
                                <span class="badge bg-primary-subtle text-primary p-2 rounded-circle me-2">
                                    <i class="fas fa-shield-alt"></i>
                                </span>
                                <div>
                                    <div class="fw-bold small text-dark">Petugas Gerbang (Guide)</div>
                                    <div class="text-muted" style="font-size: 0.75rem;">Cek Manifes & Check-in Tamu</div>
                                </div>
                            </a>
                        </li>
                        <!-- Pilihan 3: Admin Kesantrian -->
                        <li>
                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="{{ route('login', ['role' => 'admin']) }}">
                                <span class="badge bg-danger-subtle text-danger p-2 rounded-circle me-2">
                                    <i class="fas fa-user-tie"></i>
                                </span>
                                <div>
                                    <div class="fw-bold small text-dark">Admin Kesantrian</div>
                                    <div class="text-muted" style="font-size: 0.75rem;">Pengasuhan & Master Data</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('img/Logo Al Umanaa.png') }}" alt="Logo" height="42" class="me-2 bg-white rounded p-1" onerror="this.style.display='none'">
                    </div>
                    <p class="text-white-50 small pe-lg-5">
                        Sistem Informasi Reservasi Penjengukan Santri Terpadu Pondok Pesantren Modern Al Umanaa Sukabumi. Memfasilitasi silaturahmi keluarga yang tertib, nyaman, beradab, dan terencana.
                    </p>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="text-uppercase fw-bold text-warning mb-3">Navigasi Halaman</h6>
                    <ul class="list-unstyled mb-0 lh-lg small">
                        <li><a href="#kalender-jadwal" class="text-white-50 text-decoration-none">Jadwal & Kalender</a></li>
                        <li><a href="#alur" class="text-white-50 text-decoration-none">Alur Kunjungan</a></li>
                        <li><a href="#booking-section" class="text-white-50 text-decoration-none">Denah & Spot Kunjungan</a></li>
                        <li><a href="#tatatertib" class="text-white-50 text-decoration-none">Tata Tertib Pesantren</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="text-uppercase fw-bold text-warning mb-3">Kontak Pondok</h6>
                    <ul class="list-unstyled text-white-50 small mb-0 lh-lg">
                        <li><i class="fas fa-map-marker-alt me-2 text-warning"></i> Jl. Pelabuhan II, Cikembang, Sukabumi, Jawa Barat</li>
                        <li><i class="fas fa-phone me-2 text-warning"></i> (0266) 123-456</li>
                        <li><i class="fas fa-envelope me-2 text-warning"></i> info@alumanaa.sch.id</li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary mt-4 mb-3">
            <div class="text-center text-white-50 small">
                &copy; 2026 Reservasi Penjengukan Santri - Pondok Pesantren Modern Al Umanaa Boarding School.
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({
            once: true,
            offset: 40,
            duration: 800
        });

        const seatButtons = document.querySelectorAll('.seat-btn.available, .seat-btn.selected');
        const spotBadge = document.getElementById('selectedSpotBadge');
        const spotNama = document.getElementById('selectedSpotNama');

        seatButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.seat-btn').forEach(b => {
                    if (b.classList.contains('selected')) {
                        b.classList.remove('selected');
                        b.classList.add('available');
                    }
                });

                this.classList.remove('available');
                this.classList.add('selected');

                const kode = this.getAttribute('data-spot');
                const nama = this.getAttribute('data-nama') || kode;
                
                if (spotBadge) spotBadge.innerText = kode;
                if (spotNama) spotNama.innerText = nama;
            });
        });
    </script>
</body>
</html>