<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Peserta PPDB</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .card {
      width: 800px;
      margin: 20px auto;
      border: 1px solid #000;
      padding: 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header img {
      width: 100px;
      height: auto;
    }

    .header h1,
    .header h2 {
      margin: 0;
    }

    .content {
      margin-bottom: 20px;
    }

    .content table {
      width: 100%;
      border-collapse: collapse;
    }

    .content table td {
      padding: 5px;
      vertical-align: top;
    }

    .flex-container {
      display: flex;
      justify-content: space-between;
      /* Menyebarkan elemen secara merata */
      align-items: flex-end;
      /* Rata bawah */
      width: 100%;
    }

    .photo-box {
      width: 100px;
      height: 133px;
      border: 1px dashed #000;
      display:flexbox;
      align-items: center;
      justify-content: center;
    }

    .signature {
      text-align: right;
      margin-left: auto;
      /* Memindahkan ke kanan */
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="header">
      <img src="{{ $logoSrc }}" media="all" alt="Logo">
      <h1>PENERIMAAN PESERTA DIDIK BARU</h1>
      <h2>MIN 1 KOTA TANGERANG SELATAN</h2>
      <h3>TAHUN PELAJARAN 2025/2026</h3>
      <hr>
      <h2>KARTU PESERTA PPDB</h2>
    </div>
    <div class="content">
      <table>
        <tr>
          <td>No. Pendaftaran</td>
          <td>: {{ $dataSiswa->no_pendaftaran }}</td>
        </tr>
        <tr>
          <td>Nama Peserta</td>
          <td>: {{ $dataSiswa->nama_lengkap }}</td>
        </tr>
        <tr>
          <td>Program</td>
          <td>: {{ $program->kelas }}</td>
        </tr>
        <tr>
          <td>Tempat & Tgl. Lahir</td>
          <td>: {{ $dataSiswa->tempat_lahir }}, {{ $dataSiswa->tanggal_lahir }}</td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>: {{ auth()->user()->asal_sekolah }}</td>
        </tr>
      </table>
      <br><br>
      <br><br>
      <div class="flex-container">
        <div class="photo-box">
          Foto Peserta<br>3 x 4
        </div>
        <div class="signature">
          Ketua Panitia PPDB<br>
          MIN 1 Kota Tangsel<br>
          <br>
          <br>
          <br>
          <strong>M. Nurul Ardi Rosyidi</strong>
        </div>
      </div>
    </div>
  </div>
</body>

</html>