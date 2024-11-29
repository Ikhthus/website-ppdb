<!-- resources/views/data_wali_siswa/create.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Data Wali Siswa</title>
  <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
      <h2 class="text-center mb-4"><i class="fas fa-user-plus"></i>Form Pengisian Data Wali Siswa</h2>
      <p class="text-center text-danger font-weight-bold">Mohon diisi dengan teliti!</p>
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

      <form action="{{ route('pendaftaran.store.wali') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap (*)</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label for="kewarganegaraan">Kewarganegaraan (*)</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="WNI" name="kewarganegaraan" value="WNI">
            <label class="form-check-label" for="WNI">WNI</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="WNA" name="kewarganegaraan" value="WNA">
            <label class="form-check-label" for="WNA">WNA</label>
          </div>
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir (*)</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir (*)</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
          <label for="pendidikan_terakhir">Pendidikan Terakhir (*)</label><br>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sd_sederajat" name="pendidikan_terakhir" value="SD/Sederajat">
            <label class="form-check-label" for="sd_sederajat">SD/Sederajat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="smp_sederajat" name="pendidikan_terakhir" value="SMP/Sederajat">
            <label class="form-check-label" for="smp_sederajat">SMP/Sederajat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sma_sederajat" name="pendidikan_terakhir" value="SMA/Sederajat">
            <label class="form-check-label" for="sma_sederajat">SMA/Sederajat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="d1" name="pendidikan_terakhir" value="D1">
            <label class="form-check-label" for="d1">D1</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="d2" name="pendidikan_terakhir" value="D2">
            <label class="form-check-label" for="d2">D2</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="d3" name="pendidikan_terakhir" value="D3">
            <label class="form-check-label" for="d3">D3</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="d4_s1" name="pendidikan_terakhir" value="D4/S1">
            <label class="form-check-label" for="d4_s1">D4/S1</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="s2" name="pendidikan_terakhir" value="S2">
            <label class="form-check-label" for="s2">S2</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="s3" name="pendidikan_terakhir" value="S3">
            <label class="form-check-label" for="s3">S3</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lainnya" name="pendidikan_terakhir" value="Lainnya">
            <label class="form-check-label" for="lainnya">Lainnya</label>
          </div>
        </div>
        <div class="form-group">
          <label for="pekerjaan">Pekerjaan (*)</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Tidak Bekerja" id="tidakBekerja">
            <label class="form-check-label" for="tidakBekerja">Tidak Bekerja</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Pilot/Pramugara" id="pilot">
            <label class="form-check-label" for="pilot">Pilot/Pramugara</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Pensiunan" id="pensiunan">
            <label class="form-check-label" for="pensiunan">Pensiunan</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Pedagang" id="pedagang">
            <label class="form-check-label" for="pedagang">Pedagang</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="PNS" id="pns">
            <label class="form-check-label" for="pns">PNS</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Petani/Peternak" id="petani">
            <label class="form-check-label" for="petani">Petani/Peternak</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="TNI/Polisi " id="tniPolisi">
            <label class="form-check-label" for="tniPolisi">TNI/Polisi</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Nelayan" id="nelayan">
            <label class="form-check-label" for="nelayan">Nelayan</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Guru/Dosen" id="guruDosen">
            <label class="form-check-label" for="guruDosen">Guru/Dosen</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Buruh (Tani/Pabrik/Bangunan)" id="buruh">
            <label class="form-check-label" for="buruh">Buruh (Tani/Pabrik/Bangunan)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Pegawai Swasta" id="pegawaiSwasta">
            <label class="form-check-label" for="pegawaiSwasta">Pegawai Swasta</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Sopir/Masinis/Kondaktur" id="sopir">
            <label class="form-check-label" for="sopir">Sopir/Masinis/Kondaktur</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Pengacara/Jaksa Hakim/Notaris" id="pengacara">
            <label class="form-check-label" for="pengacara">Pengacara/Jaksa Hakim/Notaris</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Politikus" id="politikus">
            <label class="form-check-label" for="politikus">Politikus</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Dokter/Bidan/Perawat" id="dokter">
            <label class="form-check-label" for="dokter">Dokter/Bidan/Perawat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pekerjaan" value="Lainnya" id="lainnya">
            <label class="form-check-label" for="lainnya">Lainnya</label>
          </div>
        </div>
        <div class="form-group">
          <label for="penghasilan">Penghasilan (*)</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="Kurang dari 500.000" id="kurang500">
            <label class="form-check-label" for="kurang500">Kurang dari 500.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="500.000 - 1.000.000" id="500-1000">
            <label class="form-check-label" for="500-1000">500.000 - 1.000.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="1.000.001 - 2.000.000" id="1000-2000">
            <label class="form-check-label" for="1000-2000">1.000.001 - 2.000.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="2.000.001 - 3.000.000" id="2000-3000">
            <label class="form-check-label" for="2000-3000">2.000.001 - 3.000.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="3.000.001 - 5.000.000" id="3000-5000">
            <label class="form-check-label" for="3000-5000">3.000.001 - 5.000.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="Lebih dari 5.000.000" id="lebih5000">
            <label class="form-check-label" for="lebih5000">Lebih dari 5.000.000</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" value="Tidak Ada" id="tidakAda">
            <label class="form-check-label" for="tidakAda">Tidak Ada</label>
          </div>
        </div>
        <div class="form-group">
          <label for="no_handphone_aktif">No Handphone Aktif (*)</label>
          <input type="text" class="form-control" id="no_handphone_aktif" name="no_handphone_aktif" required>
        </div>
        <div class="form-group">
          <label for="status_tempat_tinggal">Status Tempat Tinggal (*)</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Milik Sendiri" id="milikSendiri">
            <label class="form-check-label" for="milikSendiri">Milik Sendiri</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Rumah Dinas" id="rumahDinas">
            <label class="form-check-label" for="rumahDinas">Rumah Dinas</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Rumah Orang Tua" id="rumahOrangTua">
            <label class="form-check-label" for="rumahOrangTua">Rumah Orang Tua</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Sewa/Kontrak" id="sewaKontrak">
            <label class="form-check-label" for="sewaKontrak">Sewa/Kontrak</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Rumah Saudara/Kerabat" id="rumahSaudara">
            <label class="form-check-label" for="rumahSaudara">Rumah Saudara/Kerabat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_tempat_tinggal" value="Lainnya" id="lainnyaTempatTinggal">
            <label class="form-check-label" for="lainnyaTempatTinggal">Lainnya</label>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat (*)</label>
          <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
          <label for="provinsi">Provinsi (*)</label>
          <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>
        <div class="form-group">
          <label for="kabupaten_kota">Kabupaten/Kota (*)</label>
          <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" required>
        </div>
        <div class="form-group">
          <label for="kecamatan">Kecamatan (*)</label>
          <input type="text" class="form-control" id="k ecamatan" name="kecamatan" required>
        </div>
        <div class="form-group">
          <label for="kelurahan_desa">Kelurahan/Desa (*)</label>
          <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" required>
        </div>
        <div class="form-group">
          <label for="nama_jalan">Nama Jalan (*)</label>
          <input type="text" class="form-control" id="nama_jalan" name="nama_jalan" required>
        </div>
        <div class="form-group">
          <label for="kode_pos">Kode Pos (*)</label>
          <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
        </div>
        <div class="form-group">
          <label for="no_kk">No KK (*)</label>
          <input type="text" class="form-control" id="no_kk" name="no_kk" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</body>

</html>