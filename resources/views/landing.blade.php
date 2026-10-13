@extends('layouts.app')

@section('content')
<main>
    <!-- 1. Hero Section -->
    <section class="hero-section text-center">
        <div class="honeycomb-bg"></div>
        <div class="container h-100 position-relative" style="z-index: 1;">
            <div class="row h-100 align-items-center justify-content-center">
                
                <!-- Kolom diperlebar dan diubah ke tengah (text-center) -->
                <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
                    <span class="badge bg-dark text-warning mb-3 px-4 py-2 fs-6 rounded-pill shadow-sm">
                        <i class="fas fa-bullhorn me-2"></i> Resmi Dibuka untuk Penjengukan 2026
                    </span>
                    
                    <h1 class="display-3 fw-bold text-dark mb-4 editorial-font">
                        Reservasi <span class="headline-highlight">Penjengukan Santri</span>
                    </h1>
                    
                    <p class="lead text-muted mb-5 fs-5 mx-auto" style="max-width: 800px;">
                        Atur jadwal silaturahmi Anda dengan ananda tercinta. Pilih waktu dan spot kunjungan dengan tertib, teratur, dan nyaman tanpa antre panjang.
                    </p>
                    
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <a href="#booking-section" class="btn btn-warning btn-lg fw-bold px-4 py-3 text-dark shadow-sm hover-lift">
                            <i class="fas fa-calendar-check me-2"></i> Pilih Spot Kunjungan Sekarang
                        </a>
                        <a href="#kalender-jadwal" class="btn btn-outline-dark btn-lg fw-bold px-4 py-3 hover-lift">
                            <i class="fas fa-calendar-alt me-2"></i> Cek Kalender Kunjungan
                        </a>
                    </div>
                </div>

                <!-- KARTU CEK E-TIKET TELAH DIHAPUS SEPENUHNYA DARI SINI -->
                
            </div>
        </div>
    </section>

    <!-- 2. Section Kalender Jadwal Khusus Kunjungan -->
    <section id="kalender-jadwal" class="py-5 bg-white border-top border-bottom">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-bold text-uppercase small tracking-wide">Agenda Pondok</span>
                <h2 class="fw-bold text-dark editorial-font mt-2">Jadwal & Agenda Kunjungan Santri</h2>
                <p class="text-muted">Perhatikan status ketersediaan tanggal sebelum merencanakan waktu penjengukan ananda.</p>
            </div>

            <!-- Petunjuk Indikator Status -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4" data-aos="fade-up">
                <span class="badge bg-success px-3 py-2"><i class="fas fa-check-circle me-1"></i> Dibuka (Bisa Dipesan)</span>
                <span class="badge bg-danger px-3 py-2"><i class="fas fa-ban me-1"></i> Ditutup (Agenda Santri / PTS / PAS)</span>
                <span class="badge bg-secondary px-3 py-2"><i class="fas fa-user-lock me-1"></i> Kuota Sesi Penuh</span>
            </div>

            <!-- Timeline Card Agenda Kunjungan -->
            <div class="row g-4 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 border-start border-4 border-success hover-lift">
                        <div class="card-body">
                            <span class="text-success fw-bold small"><i class="fas fa-calendar-day me-1"></i> Ahad, 18 Oktober 2026</span>
                            <h5 class="fw-bold text-dark mt-2 mb-1">Penjengukan Rutin Pekan Ke-3</h5>
                            <span class="badge bg-success-subtle text-success border border-success-subtle mb-3">Kunjungan Dibuka</span>
                            <p class="text-muted small mb-0">Tersedia Sesi Pagi (08:00 - 11:30) & Sesi Siang (13:00 - 16:30). Seluruh spot saung dan gazebo siap dipilih.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 border-start border-4 border-danger bg-light hover-lift">
                        <div class="card-body">
                            <span class="text-danger fw-bold small"><i class="fas fa-calendar-times me-1"></i> Ahad, 25 Oktober 2026</span>
                            <h5 class="fw-bold text-dark mt-2 mb-1">Kunjungan Ditiadakan</h5>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle mb-3">Ditutup: Penilaian Tengah Semester</span>
                            <p class="text-muted small mb-0">Santri sedang dalam pekan intensif PTS & muraja'ah akbar. Akses kampus ditutup sementara untuk kunjungan umum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 border-start border-4 border-success hover-lift">
                        <div class="card-body">
                            <span class="text-success fw-bold small"><i class="fas fa-calendar-day me-1"></i> Ahad, 1 November 2026</span>
                            <h5 class="fw-bold text-dark mt-2 mb-1">Penjengukan Awal Bulan</h5>
                            <span class="badge bg-success-subtle text-success border border-success-subtle mb-3">Kunjungan Dibuka</span>
                            <p class="text-muted small mb-0">Kuota dibuka normal untuk seluruh wali santri SMP & SMA. Dianjurkan memesan spot lebih awal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Alur Section -->
    <section id="alur" class="py-5" style="background-color: var(--color-bg);">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-bold text-uppercase small tracking-wide">Prosedur Standar</span>
                <h2 class="fw-bold text-dark editorial-font mt-2">4 Langkah Mudah Berkunjung</h2>
                <p class="text-muted">Proses yang tertib dan transparan demi kenyamanan bersama di Al Umanaa.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm p-3 hover-lift text-center bg-white rounded-4">
                        <div class="card-body">
                            <div class="display-5 text-warning mb-3"><i class="fas fa-user-check"></i></div>
                            <h5 class="fw-bold text-dark">1. Data Santri</h5>
                            <p class="text-muted small">Cari nama santri yang akan dijenguk berdasarkan NIS, kelas, atau kamar asrama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm p-3 hover-lift text-center bg-white rounded-4">
                        <div class="card-body">
                            <div class="display-5 text-warning mb-3"><i class="fas fa-calendar-alt"></i></div>
                            <h5 class="fw-bold text-dark">2. Pilih Waktu</h5>
                            <p class="text-muted small">Tentukan tanggal buka dan sesi kunjungan (Sesi Pagi atau Sesi Siang).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm p-3 hover-lift text-center bg-white rounded-4">
                        <div class="card-body">
                            <div class="display-5 text-warning mb-3"><i class="fas fa-map-marker-alt"></i></div>
                            <h5 class="fw-bold text-dark">3. Pilih Spot</h5>
                            <p class="text-muted small">Pilih lokasi tempat berkumpul keluarga (Gazebo, Saung, Selasar, atau Kelas).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm p-3 hover-lift text-center bg-white rounded-4">
                        <div class="card-body">
                            <div class="display-5 text-warning mb-3"><i class="fas fa-qrcode"></i></div>
                            <h5 class="fw-bold text-dark">4. Dapatkan E-Tiket</h5>
                            <p class="text-muted small">Simpan E-Tiket untuk ditunjukkan kepada petugas saat tiba di gerbang pos keamanan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Denah & Spot Section (Moviplex Style) -->
    <section id="booking-section" class="py-5 bg-white border-top border-bottom">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-bold text-uppercase small tracking-wide">Peta Interaktif</span>
                <h2 class="fw-bold text-dark editorial-font mt-2">Denah Pemilihan Spot Kunjungan</h2>
                <p class="text-muted">Klik pada kotak nomor yang tersedia (berwarna putih) untuk memilih tempat berkumpul Anda.</p>
            </div>

            <div class="row">
                <!-- Sisi Kiri: Grid Denah Spot -->
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="card border-0 shadow-sm p-4 h-100 bg-light rounded-4">
                        
                        <!-- Legenda Kursi/Spot -->
                        <div class="d-flex flex-wrap justify-content-center gap-4 mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="seat-legend bg-white border"></div> 
                                <span class="small ms-2">Tersedia</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="seat-legend bg-warning"></div> 
                                <span class="small ms-2 fw-bold">Pilihan Anda</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="seat-legend bg-danger opacity-75"></div> 
                                <span class="small ms-2 text-muted">Dipesan</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="seat-legend bg-secondary opacity-50"></div> 
                                <span class="small ms-2 text-muted">Perawatan</span>
                            </div>
                        </div>

                        <!-- Zona 1: Gazebo & Saung -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3 editorial-font text-dark"><i class="fas fa-campground text-warning me-2"></i> Area Gazebo & Saung Utama</h6>
                            <div class="row row-cols-4 row-cols-md-4 g-2 justify-content-center">
                                <div class="col"><button type="button" class="seat-btn available" data-spot="GZ-01" data-nama="Gazebo 1 (Taman Barat)">GZ-01</button></div>
                                <div class="col"><button type="button" class="seat-btn booked" disabled data-spot="GZ-02">GZ-02</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="GZ-03" data-nama="Gazebo 3 (Taman Barat)">GZ-03</button></div>
                                <div class="col"><button type="button" class="seat-btn selected" data-spot="GZ-04" data-nama="Gazebo 4 (Kolam Ikan)">GZ-04</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="GZ-05" data-nama="Gazebo 5 (Kolam Ikan)">GZ-05</button></div>
                                <div class="col"><button type="button" class="seat-btn booked" disabled data-spot="GZ-06">GZ-06</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="GZ-07" data-nama="Gazebo 7 (Taman Timur)">GZ-07</button></div>
                                <div class="col"><button type="button" class="seat-btn disabled" disabled data-spot="GZ-08">GZ-08</button></div>
                            </div>
                        </div>

                        <!-- Zona 2: Selasar Masjid -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3 editorial-font text-dark"><i class="fas fa-mosque text-warning me-2"></i> Selasar Masjid Al Umanaa</h6>
                            <div class="row row-cols-4 row-cols-md-4 g-2 justify-content-center">
                                <div class="col"><button type="button" class="seat-btn available" data-spot="MSJ-A" data-nama="Selasar Masjid Sisi Kanan A">MSJ-A</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="MSJ-B" data-nama="Selasar Masjid Sisi Kanan B">MSJ-B</button></div>
                                <div class="col"><button type="button" class="seat-btn booked" disabled data-spot="MSJ-C">MSJ-C</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="MSJ-D" data-nama="Selasar Masjid Sisi Kiri D">MSJ-D</button></div>
                            </div>
                        </div>

                        <!-- Zona 3: Ruang Kelas -->
                        <div>
                            <h6 class="fw-bold mb-3 editorial-font text-dark"><i class="fas fa-school text-warning me-2"></i> Ruang Kelas Belajar (Indoor)</h6>
                            <div class="row row-cols-3 row-cols-md-6 g-2 justify-content-center">
                                <div class="col"><button type="button" class="seat-btn available" data-spot="KLS-01" data-nama="Ruang Kelas 7A">KLS-01</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="KLS-02" data-nama="Ruang Kelas 7B">KLS-02</button></div>
                                <div class="col"><button type="button" class="seat-btn booked" disabled data-spot="KLS-03">KLS-03</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="KLS-04" data-nama="Ruang Kelas 8A">KLS-04</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="KLS-05" data-nama="Ruang Kelas 8B">KLS-05</button></div>
                                <div class="col"><button type="button" class="seat-btn available" data-spot="KLS-06" data-nama="Ruang Kelas 9A">KLS-06</button></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sisi Kanan: Panel Rincian / Form Pemesanan -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-warning shadow-lg h-100 rounded-4">
                        <div class="card-header bg-warning text-dark py-3">
                            <h5 class="mb-0 fw-bold"><i class="fas fa-clipboard-list me-2"></i> Rincian Kunjungan</h5>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-3">
                                <label class="form-label text-muted small fw-bold">Pilih Tanggal Kunjungan</label>
                                <input type="date" class="form-control bg-light border-0" value="2026-10-18">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted small fw-bold">Pilih Sesi Waktu</label>
                                <select class="form-select bg-light border-0">
                                    <option>Sesi Pagi (08:00 - 11:30 WIB)</option>
                                    <option>Sesi Siang (13:00 - 16:30 WIB)</option>
                                </select>
                            </div>
                            
                            <hr class="my-3">
                            
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small">Spot Kode:</span>
                                <span class="badge bg-dark fs-6 px-3 py-2" id="selectedSpotBadge">GZ-04</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small">Nama Area:</span>
                                <span class="fw-bold small text-dark" id="selectedSpotNama">Gazebo 4 (Kolam Ikan)</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="text-muted small">Status Tempat:</span>
                                <span class="text-success fw-bold small"><i class="fas fa-check-circle"></i> Siap Dipesan</span>
                            </div>

                            <button class="btn btn-dark w-100 fw-bold py-3 mt-auto rounded-3 hover-lift">
                                Lanjut Konfirmasi Data <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Tata Tertib Section -->
    <section id="tatatertib" class="py-5" style="background-color: var(--color-bg);">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-bold text-uppercase small tracking-wide">Panduan Santun</span>
                <h2 class="fw-bold text-dark editorial-font mt-2">Tata Tertib & Adab Penjengukan</h2>
                <p class="text-muted">Demi menjaga kenyamanan dan kekhusyukan lingkungan belajar para santri.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9" data-aos="fade-up">
                    <div class="accordion" id="accordionTertib">
                        <!-- Item 1 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tertib1">
                                    <i class="fas fa-clock text-warning me-3"></i> 1. Ketepatan Waktu Kunjungan
                                </button>
                            </h2>
                            <div id="tertib1" class="accordion-collapse collapse show" data-bs-parent="#accordionTertib">
                                <div class="accordion-body text-muted small">
                                    Wali santri diharapkan hadir tepat waktu sesuai sesi yang telah dipilih di sistem (Sesi Pagi 08:00 - 11:30 atau Sesi Siang 13:00 - 16:30). Penjengukan di luar jam sesi tidak diperkenankan demi kelancaran kegiatan belajar santri.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tertib2">
                                    <i class="fas fa-user-shield text-warning me-3"></i> 2. Busana Muslim & Etika Berpakaian
                                </button>
                            </h2>
                            <div id="tertib2" class="accordion-collapse collapse" data-bs-parent="#accordionTertib">
                                <div class="accordion-body text-muted small">
                                    Wali santri dan keluarga diwajibkan mengenakan pakaian muslim/muslimah yang sopan, rapi, dan menutup aurat selama berada di area kampus pesantren.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tertib3">
                                    <i class="fas fa-utensils text-warning me-3"></i> 3. Makanan & Titipan Barang
                                </button>
                            </h2>
                            <div id="tertib3" class="accordion-collapse collapse" data-bs-parent="#accordionTertib">
                                <div class="accordion-body text-muted small">
                                    Makanan yang dibawa harus halal dan thoyyib. Makanan siap saji berlebih yang berpotensi basi tidak dianjurkan disimpan di kamar santri. Seluruh barang titipan wajib dilaporkan melalui pos pemeriksaan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection