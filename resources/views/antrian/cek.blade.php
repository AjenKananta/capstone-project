<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cek Status Antrian</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
  <a href="{{ route('antrian\cek') }}" class="btn btn-secondary mb-4">← Kembali</a>
  <div class="card shadow-sm p-4">
    @if($data)
      <h3>Status Antrian</h3>
      <p>Kode: <b>{{ $data->kode_antrian }}</b></p>
      <p>Nama: {{ $data->nama_pasien }}</p>
      <p>Poli: {{ $data->poli }}</p>
      <p>Status: <span class="badge bg-warning">{{ $data->status }}</span></p>
    @else
      <p>Kode <b>{{ $kode }}</b> tidak ditemukan.</p>
    @endif
  </div>
</div>
</body>
</html>
