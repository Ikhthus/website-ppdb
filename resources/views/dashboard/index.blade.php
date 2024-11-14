<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    
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
    </style>
</head>
<body>
    <div class="container dashboard-container">
        <h2 class="text-center welcome-message">Selamat Datang di Dashboard</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <i class="fas fa-user"></i> Informasi Pengguna
            </div>
            <div class="card-body">
                <h5 class="card-title">NIK: <strong>{{ auth()->user()->nik }}</strong></h5>
                <p class="card-text">Asal Sekolah: <strong>{{ auth()->user()->asal_sekolah }}</strong></p>
                <p class="card-text">Anda dapat mengisi formulir pendaftaran siswa di bawah ini.</p>
                <div class="d-flex flex-column">
                    <a href="{{ route('pendaftaran.create') }}" class="btn btn-custom mb-2"><i class="fas fa-pencil-alt"></i> Isi Form Pendaftaran Data Siswa</a>
                    <a href="{{ route('pendaftaran.create.ortu') }}" class="btn btn-custom mb-2"><i class="fas fa-user-friends"></i> Isi Form Pendaftaran Data Orang Tua</a>
                    <a href="{{ route('pendaftaran.create.wali') }}" class="btn btn-custom"><i class="fas fa-user-shield"></i> Isi Form Pendaftaran Data Wali (JIKA SISWA TIDAK TINGGAL DENGAN ORANG TUA)</a>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h4>Informasi Lainnya</h4>
            <p>Di sini Anda dapat menambahkan informasi lain yang relevan untuk pengguna.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>