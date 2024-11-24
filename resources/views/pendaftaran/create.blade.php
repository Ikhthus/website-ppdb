<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
            <h2 class="text-center mb-4"><i class="fas fa-user-plus"></i> Form Pengisian Data Siswa</h2>

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

            <form action="{{ route('pendaftaran.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" required>
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan:</label>
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
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anak_ke">Anak Ke</label>
                    <input type="text" class="form-control" id="anak_ke" name="anak_ke" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_saudara">Jumlah Saudara</label>
                    <input type="text" class="form-control " id="jumlah_saudara" name="jumlah_saudara" required>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" required>
                </div>
                <div class="form-group">
                    <label for="cita_cita">Cita-cita</label>
                    <input type="text" class="form-control" id="cita_cita" name="cita_cita" required>
                </div>
                <div class="form-group">
                    <label for="no_handphone">No Handphone</label>
                    <input type="text" class="form-control" id="no_handphone" name="no_handphone" required>
                </div>
                <div class="form-group">
                    <label for="hobi">Hobi</label>
                    <input type="text" class="form-control" id="hobi" name="hobi" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Status Tempat Tinggal</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tinggal_orangtua" name="status_tempat_tinggal" value="Tinggal dengan Orangtua/Wali">
                        <label class="form-check-label" for="tinggal_orangtua">Tinggal dengan Orangtua/Wali</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kerabat" name="status_tempat_tinggal" value="Ikut Saudara/Kerabat">
                        <label class="form-check-label" for="kerabat">Ikut Saudara/Kerabat</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="asrama_madrasah" name="status_tempat_tinggal" value="Asrama Madrasah">
                        <label class="form-check-label" for="asrama_madrasah">Asrama Madrasah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kontrak_kost" name="status_tempat_tinggal" value="Kontrak/Kost">
                        <label class="form-check-label" for="kontrak_kost">Kontrak/Kost</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="asrama_pesantren" name="status_tempat_tinggal" value="Tinggal di Asrama Pesantren">
                        <label class="form-check-label" for="asrama_pesantren">Tinggal di Asrama Pesantren</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="panti_asuhan" name="status_tempat_tinggal" value="Panti Asuhan">
                        <label class="form-check-label" for="panti_asuhan">Panti Asuhan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rumah_singgah" name="status_tempat_tinggal" value="Rumah Singgah">
                        <label class="form-check-label" for="rumah_singgah">Rumah Singgah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lainnya" name="status_tempat_tinggal" value="Lainnya">
                        <label class="form-check-label" for="lainnya">Lainnya</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                </div>
                <div class="form-group">
                    <label for="kabupaten_kota">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                </div>
                <div class="form-group">
                    <label for="kelurahan_desa">Kelurahan/Desa</label>
                    <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" required>
                </div>
                <div class="form-group">
                    <label for="nama_jalan">Nama Jalan</label>
                    <input type="text" class="form-control" id="nama_jalan" name="nama_jalan" required>
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Transport Ke Sekolah</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jalan_kaki" name="transport_ke_sekolah" value="Jalan Kaki">
                        <label class="form-check-label" for="jalan_kaki">Jalan Kaki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sepeda" name="transport_ke_sekolah" value="Sepeda">
                        <label class="form-check-label" for="sepeda">Sepeda</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sepeda_motor" name="transport_ke_sekolah" value="Sepeda Motor">
                        <label class="form-check-label" for="sepeda_motor">Sepeda Motor</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mobil_pribadi" name="transport_ke_sekolah" value="Mobil Pribadi">
                        <label class="form-check-label" for="mobil_pribadi">Mobil Pribadi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="antar_jemput" name="transport_ke_sekolah" value="Antar Jemput">
                        <label class="form-check-label" for="antar_jemput">Antar Jemput</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="angkutan_umum" name="transport_ke_sekolah" value="Angkutan Umum">
                        <label class="form-check-label" for="angkutan_umum">Angkutan Umum</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perahu_sampan" name="transport_ke_sekolah" value="Perahu/Sampan">
                        <label class="form-check-label" for="perahu_sampan">Perahu/Sampan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lainnya" name="transport_ke_sekolah" value="Lainnya">
                        <label class="form-check-label" for="lainnya">Lainnya</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Jarak Tempuh</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kurang_dari_5_km" name="jarak_tempuh" value="Kurang dari 5 Km">
                        <label class="form-check-label" for="kurang_dari_5_km">Kurang dari 5 Km</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="antara_5_10_km" name="jarak_tempuh" value="Antara 5-10 Km">
                        <label class="form-check-label" for="antara_5_10_km">Antara 5-10 Km</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="antara_11_20_km" name="jarak_tempuh" value="Antara 11-20 Km">
                        <label class="form-check-label" for="antara_11_20_km">Antara 11-20 Km</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="antara_21_30_km" name="jarak_tempuh" value="Antara 21-30 Km">
                        <label class="form-check-label" for="antara_21_30_km">Antara 21-30 Km</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lebih_dari_30_km" name="jarak_tempuh" value="Lebih dari 30 Km">
                        <label class="form-check-label" for="lebih_dari_30_km">Lebih dari 30 Km</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Waktu Tempuh</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="1_10_menit" name="waktu_tempuh" value="1-10 Menit">
                        <label class="form-check-label" for="1_10_menit">1-10 Menit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="10_19_menit" name="waktu_tempuh" value="10-19 Menit">
                        <label class="form-check-label" for="10_19_menit">10-19 Menit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="20_29_menit" name="waktu_tempuh" value="20-29 Menit">
                        <label class="form-check-label" for="20_29_menit">20-29 Menit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="30_39_menit" name="waktu_tempuh" value="30-39 Menit">
                        <label class="form-check-label" for="30_39_menit">30-39 Menit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="1_2_jam" name="waktu_tempuh" value="1-2 Jam">
                        <label class="form-check-label" for="1_2_jam">1-2 Jam</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lebih_dari_2_jam" name="waktu_tempuh" value="> 2 Jam">
                        <label class="form-check-label" for="lebih_dari_2_jam">&gt; 2 Jam</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Yang Membiayai Sekolah</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="orang_tua" name="membiayai_sekolah" value="Orang Tua">
                        <label class="form-check-label" for="orang_tua">Orang Tua</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tanggungan_sendiri" name="membiayai_sekolah" value="Tanggungan Sendiri">
                        <label class="form-check-label" for="tanggungan_sendiri">Tanggungan Sendiri</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wali_orangtua_asuh" name="membiayai_sekolah" value="Wali/Orangtua Asuh">
                        <label class="form-check-label" for="wali_orangtua_asuh">Wali/Orangtua Asuh</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lainnya" name="membiayai_sekolah" value="Lainnya">
                        <label class="form-check-label" for="lainnya">Lainnya</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Pendidikan Pra-Sekolah</label><br>
                    <div class=" form-check">
                        <input class="form-check-input" type="checkbox" id="pernah_tk_ra" name="pra_sekolah" value="Pernah TK/RA">
                        <label class="form-check-label" for="pernah_tk_ra">Pernah TK/RA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pernah_paud" name="pra_sekolah" value="Pernah PAUD">
                        <label class="form-check-label" for="pernah_paud">Pernah PAUD</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Imunisasi</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hepatitis_b" name="imunisasi" value="Hepatitis B">
                        <label class="form-check-label" for="hepatitis_b">Hepatitis B</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="polio" name="imunisasi" value="Polio">
                        <label class="form-check-label" for="polio">Polio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bcg" name="imunisasi" value="BCG">
                        <label class="form-check-label" for="bcg">BCG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="campak" name="imunisasi" value="Campak">
                        <label class="form-check-label" for="campak">Campak</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dpt" name="imunisasi" value="DPT">
                        <label class="form-check-label" for="dpt">DPT</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="covid" name="imunisasi" value="Covid">
                        <label class="form-check-label" for="covid">Covid</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nomor_kip">Nomor KIP (optional)</label>
                    <input type="text" class="form-control" id="nomor_kip" name="nomor_kip">
                </div>
                <div class="form-group">
                    <label for="nomor_kk">Nomor KK</label>
                    <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required>
                </div>
                <div class="form-group">
                    <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>