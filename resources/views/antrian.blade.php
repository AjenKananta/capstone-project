<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Layanan Antrian Online</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="text-center mb-4">Layanan Antrian Online Griya Sehat</h2>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm p-4 mb-4">
        <h4>Antrian Saat Ini</h4>
        <h1 class="display-3 text-warning">
          {{ $current ? $current->kode_antrian : 'A-000' }}
        </h1>
        <p>{{ $current ? $current->nama_pasien : 'Belum ada antrian' }}</p>
        <p>{{ $current ? $current->poli : '' }}</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm p-4 mb-4">
        <h4>Ambil Antrian Baru</h4>
        <form action="{{ route('antrian.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Poli Tujuan</label>
            <select name="poli" class="form-select" required>
              <option value="Umum">Umum</option>
              <option value="Gigi">Gigi</option>
              <option value="Anak">Anak</option>
            </select>
          </div>
          <button type="submit" class="btn btn-warning w-100">Ambil Antrian</button>
        </form>
      </div>
    </div>
  </div>

  <div class="card shadow-sm p-4 mb-4">
    <h4>Cek Status Antrian</h4>
    <form action="{{ route('antrian.cek') }}" method="GET">
      <div class="input-group">
        <input type="text" name="kode" class="form-control" placeholder="Masukkan kode antrian">
        <button class="btn btn-dark">Cek</button>
      </div>
    </form>
  </div>

  <div class="card shadow-sm p-4">
    <h4>Riwayat Antrian</h4>
    <table class="table table-striped">
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Poli</th>
        <th>Tanggal</th>
        <th>Status</th>
      </tr>
      @foreach($riwayat as $r)
      <tr>
        <td>{{ $r->kode_antrian }}</td>
        <td>{{ $r->nama_pasien }}</td>
        <td>{{ $r->poli }}</td>
        <td>{{ $r->tanggal }}</td>
        <td>{{ $r->status }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
</body>
</html>
