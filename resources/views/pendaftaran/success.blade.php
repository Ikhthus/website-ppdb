<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: black;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            margin-bottom: 10px;
        }
        .print-button {
            margin-top: 20px;
        }
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{$logoSrc}}" alt="Logo">
            <h2>Bukti Pendaftaran Online</h2>
            <p><strong>MIN 1 Kota Tangsel</strong></p>
        </div>
        <div class="card">
            <div class="card-body">
                <h5>Data Siswa</h5>
                <hr>
                <p><strong>NIK:</strong> {{ $dataSiswa->nik }}</p>
                <p><strong>No. Pendaftaran:</strong> {{ $dataSiswa->no_pendaftaran }}</p>
                <p><strong>Nama:</strong> {{ $dataSiswa->nama_lengkap }}</p>
                <p><strong>Tempat, Tanggal Lahir:</strong> {{ $dataSiswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($dataSiswa->tanggal_lahir)->format('d-m-Y') }}</p>
                <p><strong>Alamat:</strong> {{ $dataSiswa->provinsi }}, {{ $dataSiswa->kabupaten_kota }}, {{ $dataSiswa->kecamatan }}, {{ $dataSiswa->kelurahan_desa }}, {{ $dataSiswa->nama_jalan }}</p>
                <p><strong>Kelas:</strong> {{ $program->kelas }}</p>
                <!-- Tambahkan data lain sesuai kebutuhan -->
            </div>
        </div>
        <!-- <button class="btn btn-primary print-button" onclick="window.print()">Cetak Bukti Pendaftaran</button> -->
    </div>
</body>
</html>