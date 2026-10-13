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
    
    <!-- Custom CSS (CACHE BUSTING AGAR LANGSUNG UPDATE) -->
    <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ time() }}">
</head>
<body>

    <!-- Garis Aksen Emas Brand -->
    <div class="brand-top-stripe"></div>

    <!-- Navbar -->
    <nav class="navbar bg-white sticky-top shadow-sm py-2">
        <div class="container d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between">
            
            <!-- Logo Al Umanaa -->
            <a class="navbar-brand d-flex align-items-center me-lg-4" href="{{ url('/') }}">
                <img src="{{ asset('img/Logo Al Umanaa.png') }}" alt="Pondok Pesantren Modern Al Umanaa" height="52" onerror="this.src='https://via.placeholder.com/150x50?text=Al+Umanaa'">
            </a>

            <!-- Menu Navigasi & Portal Masuk -->
            <div class="d-flex flex-row align-items-center overflow-x-auto w-100 w-lg-auto pb-2 pb-lg-0 mt-2 mt-lg-0" style="white-space: nowrap;">
                <ul class="navbar-nav flex-row align-items-center me-4 mb-0">
                    <li class="nav-item me-3">
                        <a class="nav-link fw-bold text-dark px-2" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-medium text-secondary px-2" href="#kalender-jadwal">Kalender Jadwal</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-medium text-secondary px-2" href="#alur">Alur Kunjungan</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-medium text-secondary px-2" href="#booking-section">Denah & Spot</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-medium text-secondary px-2" href="#tatatertib">Tata Tertib</a>
                    </li>
                </ul>
                
                <div class="d-flex flex-row gap-2 ms-auto">
                    <!-- Portal Masuk -->
                    <a href="#" class="btn btn-warning fw-bold text-dark rounded-pill px-4 btn-sm shadow-sm hover-lift">
                        <i class="fas fa-user-lock me-1"></i> Portal Masuk
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <!-- Konten Dinamis Halaman -->
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
    
    <!-- Scripts Interaktif -->
    <script>
        // Inisialisasi AOS (Animasi Scroll)
        AOS.init({
            once: true,
            offset: 40,
            duration: 800
        });

        // Script Interaksi Denah Kursi/Spot ala Bioskop Moviplex
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