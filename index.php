<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lentera Barus – Perpustakaan Pantai Barus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top " id="mainNav">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="#">
      <div style="font-size:1.6rem;line-height:1"></div>
      <div>
        <span class="navbar-brand-text">🏛️ Lentera Barus</span>
        <span class="navbar-brand-sub">Perpustakaan Nuansa Pantai </span>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav gap-1 align-items-lg-center">
        <li class="nav-item"><a class="nav-link-custom" href="#about">Profil</a></li>
        <li class="nav-item"><a class="nav-link-custom" href="#books">Koleksi Buku</a></li>
        <li class="nav-item"><a class="nav-link-custom" href="#portfolio">Portofolio</a></li>
        <li class="nav-item"><a class="nav-link-custom" href="#events">Kegiatan</a></li>
        <li class="nav-item"><a class="nav-link-custom" href="#potensi">Potensi Desa</a></li>
        <li class="nav-item ms-lg-2"><a class="nav-link-custom" href="#contact" style="background:rgba(74,175,207,0.15);border-radius:50px;color:var(--wave) !important;">Kontak</a></li>
       <li class="nav-item dropdown ms-lg-2">
  <a class="nav-link-custom dropdown-toggle" style="text-decoration: none;" href="#" id="lebihDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Lebih ▼
  </a>
  <ul class="dropdown-menu dropdown-menu-end shadow border-0">
    <li>
      <a class="dropdown-item" href="login.html">
        <i class="fa-solid fa-right-to-bracket me-2"></i> Login
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="register.html">
        <i class="fa-solid fa-user-plus me-2"></i> Daftar
      </a>
    </li>
  </ul>
</li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO / VIDEO SECTION -->
<section class="hero-section" id="hero">
  <div class="hero-video-wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/udCGH9ZhPvU?si=07uEPLb__iX7nhp9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <div class="hero-video-placeholder">
      <i class="bi bi-camera-video"></i>
    </div>
  </div>
  <div class="hero-overlay"></div>

  <div class="container">
    <div class="row align-items-center min-vh-100 py-5">
      <div class="col-lg-7 hero-content">
        <div class="hero-badge mt-5">✦ Perpustakaan Komunitas Pantai Barus</div>
        <h1 class="hero-title">
          Lentera<br>
          <span>Barus</span>
        </h1>
        <p class="hero-subtitle">
          Memancarkan cahaya ilmu dari tepi pantai Barus — tempat literasi bertemu dengan keindahan alam, budaya, dan kearifan lokal pesisir.
        </p>
        <div class="hero-buttons d-flex flex-wrap gap-2">
          <a href="#books" class="btn-hero-primary">
            <i class="bi bi-book-half"></i> Jelajahi Koleksi
          </a>
          <a href="#about" class="btn-hero-secondary">
            <i class="bi bi-compass"></i> Tentang Kami
          </a>
        </div>
        <div class="hero-stats">
          <div>
            <div class="hero-stat-num">1.200+</div>
            <div class="hero-stat-label">Koleksi Buku</div>
          </div>
          <div>
            <div class="hero-stat-num">45+</div>
            <div class="hero-stat-label">Program Literasi</div>
          </div>
          <div>
            <div class="hero-stat-num">3 Thn</div>
            <div class="hero-stat-label">Melayani Komunitas</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-wave-bottom">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M0,40 C240,80 480,0 720,40 C960,80 1200,0 1440,40 L1440,80 L0,80 Z" fill="#FDF6E9"/>
    </svg>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="about-section section-pad" id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 reveal">
        <div class="about-img-wrap">
          <div class="about-img-placeholder">
            <i class="bi bi-geo-alt-fill"></i>
            <img src="assets/map_barus.png" alt="">
          </div>
          <div class="about-badge-float">
            <div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 reveal reveal-delay-2">
        <div class="section-tag">Profil Perpustakaan</div>
        <h2 class="section-title">Rumah Baca di <span>Tepi Samudera</span></h2>
        <p class="section-desc mb-4">
          Lentera Barus adalah perpustakaan komunitas yang berlokasi di kawasan Pantai Barus, Kabupaten Tapanuli Tengah, Sumatera Utara. Kami hadir untuk menerangi jiwa-jiwa yang haus ilmu dengan koleksi buku berkualitas, program literasi, dan ruang belajar yang nyaman.
        </p>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="info-card">
              <div class="info-card-icon"><i class="bi bi-geo-alt-fill"></i></div>
              <div>
                <div class="info-card-title">Lokasi</div>
                <div class="info-card-sub">Pantai Barus, Tapanuli Tengah, Sumatra Utara</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card">
              <div class="info-card-icon"><i class="bi bi-clock-fill"></i></div>
              <div>
                <div class="info-card-title">Jam Operasional</div>
                <div class="info-card-sub">Senin – Sabtu, 08.00 – 17.00 WIB</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card">
              <div class="info-card-icon"><i class="bi bi-people-fill"></i></div>
              <div>
                <div class="info-card-title">Layanan</div>
                <div class="info-card-sub">Baca di tempat, pinjam buku, literasi anak</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card">
              <div class="info-card-icon"><i class="bi bi-wifi"></i></div>
              <div>
                <div class="info-card-title">Fasilitas</div>
                <div class="info-card-sub">WiFi gratis, ruang diskusi, area santai</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BOOKS SECTION -->
<section class="books-section section-pad" id="books">
  <div class="container">
    <div class="row mb-4 align-items-end">
      <div class="col-lg-6 reveal">
        <div class="section-tag">Koleksi Buku</div>
        <h2 class="section-title">Etalase <span>Literatur</span> Kami</h2>
        <p class="section-desc">Temukan koleksi buku pilihan dari berbagai kategori, mulai dari sejarah lokal hingga sains populer.</p>
      </div>
      <div class="col-lg-6 text-lg-end reveal reveal-delay-2">
      
      </div>
    </div>

    <div class="filter-tabs reveal">
      <button class="filter-tab active" onclick="filterBooks(this,'all')">Semua</button>
      <button class="filter-tab" onclick="filterBooks(this,'lokal')">Lokal</button>
      <button class="filter-tab" onclick="filterBooks(this,'anak')">Anak-anak</button>
      <button class="filter-tab" onclick="filterBooks(this,'sains')">Akademik</button>
      <button class="filter-tab" onclick="filterBooks(this,'budaya')">Budaya & Lokal</button>
      <button class="filter-tab" onclick="filterBooks(this,'agama')">Agama</button>
    </div>

    <div class="row g-3" id="bookGrid">
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="lokal">
        <div class="book-card">
          <img src="assets/Sejarah Nasional Indonesia.jpg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Sejarah Lokal</div>
            <div class="book-title">Sejarah Nasional Indonesia</div>
            <div class="book-author">Sartono Kartodirdjo (dkk), 1975</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="budaya">
        <div class="book-card">
          <img src="assets/The Malay Archipelago.jpeg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Budaya & Adat</div>
            <div class="book-title">The Malay Archipelago</div>
            <div class="book-author">Alfred Russel Wallace, 1869</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="anak">
        <div class="book-card">
          <img src="assets/Laskar Pelangi.jpg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Anak & Remaja</div>
            <div class="book-title">Laskar pelangi</div>
            <div class="book-author">Andrea Hirata, 2005</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="sains">
        <div class="book-card">
          <img src="assets/The Selfish Gene.jpg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Sains & Alam</div>
            <div class="book-title">The Selfish Gene</div>
            <div class="book-author">Richard Dawkins, 1976</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="lokal">
        <div class="book-card">
          <img src="assets/Indonesia dalam Arus Sejarah.jpeg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Sejarah Lokal</div>
            <div class="book-title">Indonesia dalam Arus sejarah</div>
            <div class="book-author">Taufik Abdullah, 2012</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="agama">
        <div class="book-card">
          <img src="assets/Meditations.jpeg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Agama & Filsafat</div>
            <div class="book-title">meditations</div>
            <div class="book-author">Marcus Aurelius, 180</div>
            <div class="book-available" style="color:var(--coral);"><i class="bi bi-circle-fill"></i> Dipinjam</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="anak">
        <div class="book-card">
          <img src="assets/Harry Potter and the Sorcerer's Stone.jpg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Anak & Remaja</div>
            <div class="book-title">Harry Potter and the Sorcerer's Stone</div>
            <div class="book-author">J. K. Rowling, 1997</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 book-item" data-cat="sains">
        <div class="book-card">
          <img src="assets/A Brief History of Time.jpeg" class="book-cover" alt="">
          <div class="book-meta">
            <div class="book-category">Sains & Alam</div>
            <div class="book-title">A Brief History of Time</div>
            <div class="book-author">Stephen Hawking, 1988</div>
            <div class="book-available"><i class="bi bi-circle-fill"></i> Tersedia</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO SECTION -->
<section class="portfolio-section section-pad" id="portfolio">
  <div class="container">
    <div class="row mb-5 align-items-end">
      <div class="col-lg-6 reveal">
        <div class="section-tag">Portofolio</div>
        <h2 class="section-title">Pencapaian & <span>Karya</span> Lentera</h2>
        <p class="section-desc">Dokumentasi perjalanan Lentera Barus dalam memajukan literasi dan pendidikan di kawasan Pantai Barus.</p>
      </div>
    </div>
    <div class="row g-3 mb-4">
      <div class="col-lg-6 reveal">
        <div class="port-card">
          <img src="assets/manuskrip.jpg" class="port-card-bg" alt="">
          <div class="port-card-overlay">
            <div class="port-card-label">Koleksi & Arsip</div>
            <div class="port-card-title">Digitalisasi Manuskrip Barus</div>
            <div class="port-card-desc">Proyek alih media 120 naskah kuno dan arsip sejarah Kota Barus</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="row g-3 h-100">
          <div class="col-6">
            <div class="port-card" style="aspect-ratio:1/1;">
              <img src="assets/taman-baca.jpeg" class="port-card-bg" alt="">
              <div class="port-card-overlay">
                <div class="port-card-label">Lingkungan</div>
                <div class="port-card-title">Taman Baca Hijau</div>
                <div class="port-card-desc">Ruang baca outdoor berbasis alam</div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="port-card" style="aspect-ratio:1/1;">
              <img src="assets/mural.jpg" class="port-card-bg" alt="">
              <div class="port-card-overlay">
                <div class="port-card-label">Seni & Budaya</div>
                <div class="port-card-title">Mural Literasi</div>
                <div class="port-card-desc">Mural seni pada dinding perpustakaan</div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="port-card" style="aspect-ratio:1/1;">
              <img src="assets/kelompok-baca.jpeg" class="port-card-bg" alt="">
              <div class="port-card-overlay">
                <div class="port-card-label">Komunitas</div>
                <div class="port-card-title">Kelompok Baca</div>
                <div class="port-card-desc">12 kelompok baca aktif</div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="port-card" style="aspect-ratio:1/1;">
              <img src="assets/juara.jpg" class="port-card-bg" alt="">
              <div class="port-card-overlay">
                <div class="port-card-label">Penghargaan</div>
                <div class="port-card-title">Juara Nasional</div>
                <div class="port-card-desc">Perpustakaan terbaik 2023</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-3 mt-2">
      <div class="col reveal">
        <div style="display:flex;flex-wrap:wrap;gap:0.7rem;">
          <div class="port-tag"><i class="bi bi-trophy-fill"></i> Juara 1 Perpustakaan Desa Terbaik Nasional 2023</div>
          <div class="port-tag"><i class="bi bi-person-hearts"></i> 2.500+ Anggota Aktif</div>
          <div class="port-tag"><i class="bi bi-book-fill"></i> 1.200+ Judul Koleksi</div>
          <div class="port-tag"><i class="bi bi-calendar-check-fill"></i> 45+ Program Kegiatan</div>
          <div class="port-tag"><i class="bi bi-patch-check-fill"></i> Mitra Diknas Tapanuli Tengah</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENTS SECTION -->
<section class="events-section section-pad" id="events">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 reveal">
        <div class="section-tag">Kegiatan & Acara</div>
        <h2 class="section-title">Event <span>Literasi</span> Lentera</h2>
        <p class="section-desc">Berbagai kegiatan literasi, budaya, dan pendidikan yang telah dan akan kami selenggarakan.</p>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-lg-6 reveal">
        <div class="event-card">
          <div class="event-date-bar" style="background:var(--ocean);">
            <div class="event-date-day">17</div>
            <div class="event-date-mon">Agt</div>
            <div class="event-date-yr">2024</div>
          </div>
          <div class="event-body">
            <div class="event-type">Literasi Nasional</div>
            <div class="event-title">Festival Baca Barsai — Membaca untuk Bangsa</div>
            <div class="event-desc">Perayaan Hari Kemerdekaan melalui festival membaca serentak bersama 300 peserta dari seluruh wilayah Tapanuli Tengah.</div>
            <div class="event-meta">
              <div class="event-meta-item"><i class="bi bi-geo-alt-fill"></i> Pantai Barus</div>
              <div class="event-meta-item"><i class="bi bi-people-fill"></i> 300 Peserta</div>
            </div>
            <span class="event-status done"><i class="bi bi-check-circle-fill me-1"></i>Selesai</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <div class="event-card">
          <div class="event-date-bar" style="background:var(--coral);">
            <div class="event-date-day">05</div>
            <div class="event-date-mon">Nov</div>
            <div class="event-date-yr">2024</div>
          </div>
          <div class="event-body">
            <div class="event-type">Budaya Lokal</div>
            <div class="event-title">Seminar Adat & Tradisi Pesisir Barus</div>
            <div class="event-desc">Dialog kebudayaan menghadirkan tetua adat, akademisi, dan pemuda untuk mendokumentasikan tradisi lisan Barus.</div>
            <div class="event-meta">
              <div class="event-meta-item"><i class="bi bi-geo-alt-fill"></i> Aula Perpustakaan</div>
              <div class="event-meta-item"><i class="bi bi-people-fill"></i> 120 Peserta</div>
            </div>
            <span class="event-status done"><i class="bi bi-check-circle-fill me-1"></i>Selesai</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="event-card">
          <div class="event-date-bar" style="background:var(--leaf);">
            <div class="event-date-day">12</div>
            <div class="event-date-mon">Jan</div>
            <div class="event-date-yr">2025</div>
          </div>
          <div class="event-body">
            <div class="event-type">Anak & Remaja</div>
            <div class="event-title">Kelas Mendongeng — Cerita dari Tepi Pantai</div>
            <div class="event-desc">Program mendongeng interaktif untuk anak-anak usia 5–12 tahun dengan tema cerita rakyat pesisir Sumatera.</div>
            <div class="event-meta">
              <div class="event-meta-item"><i class="bi bi-geo-alt-fill"></i> Ruang Anak</div>
              <div class="event-meta-item"><i class="bi bi-people-fill"></i> 80 Anak</div>
            </div>
            <span class="event-status done"><i class="bi bi-check-circle-fill me-1"></i>Selesai</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-3">
        <div class="event-card">
          <div class="event-date-bar" style="background:#1A237E;">
            <div class="event-date-day">20</div>
            <div class="event-date-mon">Apr</div>
            <div class="event-date-yr">2025</div>
          </div>
          <div class="event-body">
            <div class="event-type">Pelatihan & Workshop</div>
            <div class="event-title">Workshop Menulis Kreatif Berbasis Kearifan Lokal</div>
            <div class="event-desc">Workshop intensif 2 hari bagi para penulis muda untuk mengangkat kekayaan budaya dan alam Barus dalam karya sastra.</div>
            <div class="event-meta">
              <div class="event-meta-item"><i class="bi bi-geo-alt-fill"></i> Perpustakaan Barus</div>
              <div class="event-meta-item"><i class="bi bi-people-fill"></i> 40 Peserta</div>
            </div>
            <span class="event-status upcoming"><i class="bi bi-clock-fill me-1"></i>Akan Datang</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- POTENSI DESA BARUS -->
<section class="potensi-section section-pad" id="potensi">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 reveal">
        <div class="section-tag">Potensi Desa Barus</div>
        <h2 class="section-title">Kekayaan <span>Barus</span> yang Menakjubkan</h2>
        <p class="section-desc">Mengenal lebih dalam warisan budaya, keindahan alam, dan kekayaan kuliner khas Barus yang perlu dilestarikan.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 reveal">
        <div class="potensi-card">
          <img src="assets/makam_tinggi..jpeg" class="potensi-img" alt="">
          <div class="potensi-body">
            <div class="potensi-category" style="color:#8E44AD;">Sejarah & Budaya</div>
            <div class="potensi-title">Situs Makam Papan Tinggi</div>
            <div class="potensi-desc">Makam kuno ulama besar yang menjadi saksi bisu masuknya Islam pertama ke Nusantara di abad ke-7.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-1">
        <div class="potensi-card">
          <img src="assets/pantai_barus.jpg" class="potensi-img" alt="">
          <div class="potensi-body">
            <div class="potensi-category" style="color:var(--ocean);">Wisata Alam</div>
            <div class="potensi-title">Pantai Barus & Pasir Putih</div>
            <div class="potensi-desc">Hamparan pasir putih yang membentang dengan pemandangan matahari terbenam yang menakjubkan di Samudera Hindia.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-2">
        <div class="potensi-card">
          <img src="assets/mangure.jpeg" class="potensi-img" alt="">
          <div class="potensi-body">
            <div class="potensi-category" style="color:var(--leaf);">Adat Istiadat</div>
            <div class="potensi-title">Tradisi Mangure Lawik</div>
            <div class="potensi-desc">Ritual tahunan nelayan memohon keselamatan dan berkah hasil laut yang sarat makna spiritual dan kebersamaan.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-3">
        <div class="potensi-card">
          <img src="assets/ikan_sale.jpeg" class="potensi-img" alt="">
          <div class="potensi-body">
            <div class="potensi-category" style="color:var(--coral);">Kuliner Khas</div>
            <div class="potensi-title">Mie Gomak & Ikan Sale</div>
            <div class="potensi-desc">Kuliner legendaris Barus — mie gomak berbumbu khas dan ikan sale asap yang menjadi oleh-oleh wajib pelancong.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA / CONTACT SECTION -->
<section class="cta-section section-pad" id="contact">
  <div class="container cta-content">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 reveal">
        <h2 class="cta-title mb-3">Kunjungi Kami di Barus</h2>
        <p class="cta-desc mb-4">Kami terbuka untuk kolaborasi, donasi buku, kunjungan edukasi, dan program kemitraan. Bersama, kita terangi lebih banyak jiwa.</p>
        
      </div>
      <div class="col-lg-7 reveal reveal-delay-2">
        <div class="row g-3">
          <div class="col-12">
            <div class="cta-contact-card">
              <i class="bi bi-geo-alt-fill cta-icon"></i>
              <div>
                <div class="cta-contact-title">Alamat</div>
                <div class="cta-contact-val">Jl. Pantai Barus No. 1, Barus, Tapanuli Tengah, Sumatra Utara 22561</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cta-contact-card">
              <i class="bi bi-telephone-fill cta-icon"></i>
              <div>
                <div class="cta-contact-title">Telepon</div>
                <div class="cta-contact-val">+62 895-4049-17176</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cta-contact-card">
              <i class="bi bi-envelope-fill cta-icon"></i>
              <div>
                <div class="cta-contact-title">Email</div>
                <div class="cta-contact-val">lenterabarus@gmail.com</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cta-contact-card">
              <i class="bi bi-instagram cta-icon"></i>
              <div>
                <div class="cta-contact-title">Instagram</div>
                <div class="cta-contact-val">@lenterabarus</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cta-contact-card">
              <i class="bi bi-clock-fill cta-icon"></i>
              <div>
                <div class="cta-contact-title">Jam Buka</div>
                <div class="cta-contact-val">Senin – Sabtu, 08.00–17.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 mb-4">
      <div class="col-lg-4 col-md-6">
        <div class="d-flex align-items-center gap-2 mb-3">
          <div>
            <div class="footer-brand">Lentera Barus</div>
            <div class="footer-brand-sub">Perpustakaan Komunitas</div>
          </div>
        </div>
        <p class="footer-desc">Menerangi kehidupan melalui buku dan ilmu pengetahuan, dari tepi pantai Barus untuk Indonesia.</p>
        <div class="mt-3">
          <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-youtube"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-heading">Navigasi</div>
        <a href="#about" class="footer-link">Profil</a>
        <a href="#books" class="footer-link">Koleksi Buku</a>
        <a href="#portfolio" class="footer-link">Portofolio</a>
        <a href="#events" class="footer-link">Kegiatan</a>
        <a href="#contact" class="footer-link">Kontak</a>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-heading">Layanan</div>
        <a href="#" class="footer-link">Pinjam Buku</a>
        <a href="#" class="footer-link">Kelas Literasi</a>
        <a href="#" class="footer-link">Donasi Buku</a>
        <a href="#" class="footer-link">Kemitraan</a>
        <a href="#" class="footer-link">Kunjungan</a>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="footer-heading">Potensi Barus</div>
        <a href="#potensi" class="footer-link"> Situs Sejarah Barus</a>
        <a href="#potensi" class="footer-link"> Wisata Pantai</a>
        <a href="#potensi" class="footer-link"> Adat Istiadat</a>
        <a href="#potensi" class="footer-link"> Kuliner Khas</a>
      </div>
    </div>
    <hr class="footer-divider">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
      <div class="footer-copy">© 2026 Lentera Barus — Perpustakaan Komunitas Pantai Barus. Semua hak dilindungi.</div>
      <div class="footer-copy">Dibangun dengan 💙 untuk Barus</div>
    </div>
  </div>
</footer>

<!-- SCROLL TO TOP -->
<button class="scroll-top-btn" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <i class="bi bi-chevron-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('mainNav');
    const btn = document.getElementById('scrollTopBtn');
    if (window.scrollY > 80) {
      nav.classList.add('scrolled');
      btn.classList.add('show');
    } else {
      nav.classList.remove('scrolled');
      btn.classList.remove('show');
    }
  });

  // Scroll reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); }
    });
  }, { threshold: 0.12 });
  reveals.forEach(r => observer.observe(r));

  // Book filter
  function filterBooks(btn, cat) {
    document.querySelectorAll('.filter-tab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.book-item').forEach(item => {
      if (cat === 'all' || item.dataset.cat === cat) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  }

  // Active nav highlight on scroll
  const sections = document.querySelectorAll('section[id]');
  window.addEventListener('scroll', () => {
    let cur = '';
    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 120) cur = s.id;
    });
    document.querySelectorAll('.nav-link-custom').forEach(a => {
      a.style.color = '';
      if (a.getAttribute('href') === '#' + cur) {
        a.style.color = 'var(--wave)';
      }
    });
  });
</script>
</body>
</html>
