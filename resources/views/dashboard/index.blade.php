<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">

    <!-- Bootstrap and FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-container {
            margin-top: 50px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .welcome-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .info-section {
            margin-top: 20px;
        }

        .info-section p {
            font-size: 1.1rem;
        }

        .logout-button {
            background-color: #dc3545;
            color: white;
        }

        .logout-button:hover {
            background-color: #b52a37;
        }
    </style>
</head>

<body>
    <div class="container dashboard-container">
        <!-- Welcome Message -->
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="welcome-message">Selamat Datang di Dashboard</h2>
            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn logout-button">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>

        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Card Section -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-user"></i> Informasi
            </div>
            <div class="card-body">
                <h5 class="card-title">NIK: <strong>{{ auth()->user()->nik }}</strong></h5>
                <h5 class="card-title">Asal Sekolah: <strong>{{ auth()->user()->asal_sekolah }}</strong></h5>
                <h5 class="card-title">Status : <strong>{{$verifikasi->status ?? 'Belum diverifikasi'}}</strong></h5>
                <br><br>
                <p class="card-text">Anda dapat mengisi formulir pendaftaran siswa di bawah ini.</p>
                <div class="d-flex flex-column">
                    <a href="{{ route('pendaftaran.create') }}" class="btn btn-custom mb-2"><i class="fas fa-pencil-alt"></i> Isi Form Pengisian Data Siswa</a>
                    <a href="{{ route('pendaftaran.create.ayah') }}" class="btn btn-custom mb-2"><i class="fas fa-user-friends"></i> Isi Form Pengisian Data Ayah</a>
                    <a href="{{ route('pendaftaran.create.ibu') }}" class="btn btn-custom mb-2"><i class="fas fa-user-friends"></i> Isi Form Pengisian Data Ibu</a>
                    <a href="{{ route('pendaftaran.create.wali') }}" class="btn btn-custom mb-2"><i class="fas fa-user-shield"></i> Isi Form Pengisian Data Wali (JIKA SISWA TIDAK TINGGAL DENGAN ORANG TUA)</a>
                    <a href="{{ route('pendaftaran.create.program') }}" class="btn btn-custom mb-2"><i class="fas fa-pencil-alt"></i> Isi Form Program Kelas (SETELAH MENGISI DATA SISWA DAN ORANG TUA)</a>
                    <a href="{{ route('pendaftaran.cetak') }}" class="btn btn-custom mb-2"><i class="fas fa-file-pdf"></i> Cetak Bukti Pendaftaran</a>
                    <!-- <a href="{{ route('pendaftaran.cetak.kartu') }}" class="btn btn-custom mb-2"><i class="fas fa-file-pdf"></i> Cetak Kartu Ujian</a> -->
                    <a href="{{ asset('surat_pernyataan.pdf') }}" type="application/pdf" class="btn btn-custom mb-2" target="_blank">
                        <i class="fas fa-file-alt"></i> Cetak Surat Pernyataan
                    </a>
                    @if($verifikasi && $verifikasi->status == 'Lolos')
                    <a href="{{ route('pendaftaran.cetak.kartu') }}" class="btn btn-custom mb-2"><i class="fas fa-file-pdf"></i> Cetak Kartu Ujian</a>

                        <!-- <i class="fas fa-print"></i> Cetak Kartu Ujian
                    </a> -->
                    @endif
                </div>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="info-section">
            <h4>Berkas Yang Dibutuhkan Untuk Verifikasi di Sekolah</h4>
            <li>Cetak Bukti Pendaftaran Online PPDB MIN 1 Kota Tangsel</li>
            <li>Fotokopi Akta Kelahiran 2 Lembar</li>
            <li>Fotokopi Kartu Keluarga 2 Lembar</li>
            <li>Pas Foto 3x4 2 Lembar</li>
            <li>Surat Keterangan Pendidikan Sebelumnya TK/RA/PAUD (NISN Jika ada)</li>
            <li>Surat Pernyataan memaati ketentuan dan tata tertib PPDB MIN 1 Kota Tangsel bermaterai 10.000</li>
        </div>
    </div>

    <br>
    <br>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>