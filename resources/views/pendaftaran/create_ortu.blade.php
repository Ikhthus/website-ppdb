<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Data Orang Tua</title>
  <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      background-color: #e9ecef;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    h2 {
      color: #343a40;
    }

    .form-check-label {
      margin-left: 10px;
    }

    .alert {
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="card p-4">
      <h2>Pendaftaran Data Orang Tua</h2>
      @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{ route('pendaftaran.store.ortu') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap:</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="form-group">
          <label for="nik">NIK:</label>
          <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        <div class="form-group">
          <label for="kewarganegaraan">Kewarganegaraan:</label>
          <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir:</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir:</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
          <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
          <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
        </div>
        <div class="form-group">
          <label for="pekerjaan">Pekerjaan:</label>
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
        </div>
        <div class="form-group">
          <label for="penghasilan">Penghasilan:</label>
          <input type="text" class="form-control" id="penghasilan" name="penghasilan" required>
        </div>
        <div class="form-group">
          <label for="no_handphone_aktif">No Handphone Aktif:</label>
          <input type="text" class="form-control" id="no_handphone_aktif" name="no_handphone_aktif" required>
        </div>
        <div class="form-group">
          <label for="status_tempat_tinggal">Status Tempat Tinggal:</label>
          <input type="text" class="form-control" id="status_tempat_tinggal" name="status_tempat_tinggal" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
          <label for="provinsi">Provinsi:</label>
          <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>
        <div class="form-group">
          <label for="kabupaten_kota">Kabupaten/Kota:</label>
          <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" required>
        </div>
        <div class="form-group">
          <label for="kecamatan">Kecamatan:</label>
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
        </div>
        <div class="form-group">
          <label for="kelurahan_desa">Kelurahan/Desa:</label>
          <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" required>
        </div>
        <div class="form-group">
          <label for="nama_jalan">Nama Jalan:</label>
          <input type="text" class="form-control" id="nama_jalan" name="nama_jalan" required>
        </div>
        <div class="form-group">
          <label for="kode_pos">Kode Pos:</label>
          <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
        </div>
        <div class="form-group">
          <label for="nomor_kk">Nomor KK:</label>
          <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required>
        </div>
        <div class="form-group">
          <label for="hubungan">Hubungan:</label>
          <input type="text" class="form-control" id="hubungan" name="hubungan" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>