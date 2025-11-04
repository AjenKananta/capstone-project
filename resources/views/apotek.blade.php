<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek Online - Griya Sehat</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    .product-card {
      border: none;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 15px;
      transition: all 0.3s ease;
    }
    .product-card:hover {
      transform: translateY(-5px);
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
  <nav class="navbar navbar-expand-lg py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-brown" href="/">Griya Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3">
          <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Antrian</a></li>
          <li class="nav-item"><a class="nav-link active" href="/apotek">Apotek</a></li>          
          <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
        <a href="#" class="btn btn-outline-secondary me-2">Login</a>
        <a href="#" class="btn btn-primary">Daftar</a>
      </div>
    </div>
  </nav>

  <!-- Section Header -->
  <section class="text-center py-5">
    <div class="container">
      <h2 class="fw-bold mb-3">Apotek Online</h2>
      <p class="text-muted">Beli obat dan produk kesehatan terpercaya dengan pengiriman cepat ke rumah Anda.</p>

      <div class="row justify-content-center mt-4">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Cari obat, vitamin, atau produk kesehatan...">
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary w-100">Cari</button>
        </div>
      </div>

      <div class="mt-4">
        <button class="btn btn-outline-secondary btn-sm me-2">Semua</button>
        <button class="btn btn-outline-secondary btn-sm me-2">Vitamin</button>
        <button class="btn btn-outline-secondary btn-sm me-2">Obat Bebas</button>
        <button class="btn btn-outline-secondary btn-sm me-2">Obat Resep</button>
        <button class="btn btn-outline-secondary btn-sm">Suplemen</button>
      </div>
    </div>
  </section>

  <section class="pb-5">
    <div class="container">
      <div class="row g-4">
        @for ($i = 1; $i <= 9; $i++)
          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="card-body text-center" style="background: linear-gradient(135deg, #{{ dechex(rand(1000000, 9999999)) }}); color:white; border-radius:10px 10px 0 0; height:120px;">
                <h5 class="mt-4">Produk {{ $i }}</h5>
              </div>
              <div class="p-3">
                <p class="fw-bold mb-1">Rp {{ number_format(rand(10000, 100000), 0, ',', '.') }}</p>
                <p class="text-muted">Stok tersedia</p>
                <a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

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
            <li><a href="/">Beranda</a></li>
            <li><a href="/apotek">Apotek</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Hubungi Kami</h5>
          <p>Email: info@griyasehat.com</p>
          <p>Telp: +62 812 3456 7890</p>
        </div>
      </div>
      <hr class="mt-4" style="border-color: rgba(255,255,255,0.2)">
      <p class="text-center mt-3 mb-0">© 2025 Griya Sehat. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
