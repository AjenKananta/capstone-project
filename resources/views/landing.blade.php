<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Griya Sehat</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #3e2c1b;
      background-color: #fffdfb;
    }
    nav.navbar {
      background-color: #fffdfb;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    nav a.nav-link {
      color: #3e2c1b !important;
      font-weight: 500;
    }
    nav a.nav-link:hover {
      color: #8b5e3c !important;
    }
    .btn-primary {
      background-color: #8b5e3c;
      border: none;
    }
    .btn-primary:hover {
      background-color: #6e4a2e;
    }
    header {
      background: linear-gradient(135deg, #c49a6c, #8b5e3c);
      color: white;
      padding: 120px 0 100px 0;
      text-align: left;
    }
    header h1 {
      font-weight: 700;
    }
    header p {
      font-size: 1.1rem;
      max-width: 500px;
    }
    .service-card {
      border: none;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      border-radius: 15px;
      transition: all 0.3s;
      text-align: center;
      padding: 30px 20px;
    }
    .service-card:hover {
      transform: translateY(-5px);
    }
    .service-icon {
      font-size: 40px;
      margin-bottom: 15px;
      color: #8b5e3c;
    }
    footer {
      background-color: #4b2e19;
      color: white;
      padding: 50px 0;
    }
    footer a {
      color: #e0c8a0;
      text-decoration: none;
    }
    footer a:hover {
      color: #fff;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-brown" href="#">Griya Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="/antrian">Antrian</a></li>
          <li class="nav-item"><a class="nav-link" href="/apotek">Apotek</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
        <a href="#" class="btn btn-outline-secondary me-2">Login</a>
        <a href="#" class="btn btn-primary">Daftar</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Kesehatan Anda, Prioritas Kami</h1>
          <p>Layanan kesehatan modern dengan teknologi terbaik untuk menjaga kebugaran dan kesejahteraan Anda.</p>
          <a href="#" class="btn btn-primary me-2 mt-3">Booking Sekarang</a>
          <a href="#" class="btn btn-outline-light mt-3">Get Started</a>
        </div>
        <div class="col-md-6 text-center">
          <div class="bg-light rounded-4 p-5" style="height:200px; opacity:0.9;">
            <p class="text-dark mt-5">Gambar Dokter/Ilustrasi Kesehatan</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Layanan Unggulan -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Layanan Unggulan</h2>
      <p class="text-muted mb-5">Beberapa layanan terbaik yang kami hadirkan untuk Anda dengan mudah dan cepat.</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">💬</div>
            <h5>Konsultasi Dokter</h5>
            <p>Konsultasi online langsung dengan dokter berpengalaman tanpa harus datang ke klinik.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">📅</div>
            <h5>Appointment Online</h5>
            <p>Atur jadwal kunjungan Anda dengan mudah melalui sistem reservasi online kami.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">💊</div>
            <h5>Cek Artikel Online</h5>
            <p>Baca artikel kesehatan terkini yang disusun oleh para ahli di bidang medis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Griya Sehat -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Tentang Griya Sehat</h2>
      <p class="mx-auto" style="max-width:700px;">
        Griya Sehat hadir sebagai platform kesehatan terpadu yang memadukan teknologi dan layanan medis modern.
        Kami berkomitmen untuk memberikan kemudahan, kenyamanan, dan kepercayaan bagi setiap pengguna layanan kami.
      </p>
      <a href="#" class="btn btn-primary mt-3">Selengkapnya</a>

      <div class="row mt-5">
        <div class="col-md-4">
          <h3 class="fw-bold">50+</h3>
          <p>Tenaga Medis Profesional</p>
        </div>
        <div class="col-md-4">
          <h3 class="fw-bold">10K+</h3>
          <p>Pengguna Puas</p>
        </div>
        <div class="col-md-4">
          <h3 class="fw-bold">5</h3>
          <p>Klinik Mitra</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Griya Sehat</h5>
          <p>Klinik digital modern dengan layanan kesehatan yang mudah diakses, cepat, dan terpercaya.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Navigasi</h5>
          <ul class="list-unstyled">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Hubungi Kami</h5>
          <p>Email: info@griyasehat.com</p>
          <p>Telp: +62 812 3456 7890</p>
          <div>
            <a href="#" class="me-2">Facebook</a> |
            <a href="#" class="mx-2">Instagram</a> |
            <a href="#">Twitter</a>
          </div>
        </div>
      </div>
      <hr class="mt-4" style="border-color: rgba(255,255,255,0.2)">
      <p class="text-center mt-3 mb-0">© 2025 Griya Sehat. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
