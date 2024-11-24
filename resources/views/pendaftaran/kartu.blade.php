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
      background-color: #f4f4f4;
    }

    .card {
      width: 595px; /* Ukuran standar A4 dengan margin */
      margin: 40px auto;
      border: 1px solid #000;
      padding: 20px;
      background: #fff;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header img {
      width: 80px;
      height: auto;
      margin-bottom: 10px;
    }

    .header h1 {
      font-size: 18px;
      margin: 5px 0;
    }

    .header h2 {
      font-size: 16px;
      margin: 5px 0;
    }

    .header h3 {
      font-size: 14px;
      margin: 5px 0;
    }

    .title {
      text-align: center;
      font-size: 16px;
      font-weight: bold;
      margin: 20px 0;
      border: 1px solid #000;
      padding: 10px;
    }

    .content table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    .content table td {
      padding: 5px;
      vertical-align: top;
      font-size: 14px;
    }

    .content table td:first-child {
      width: 150px;
    }

    .flex-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .photo-box {
      width: 113px; /* 3 cm */
      height: 151px; /* 4 cm */
      border: 1px dashed #000;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: 14px;
      color: #000;
    }

    .signature {
      text-align: right;
      font-size: 14px;
    }

    .signature strong {
      display: block;
      margin-top: 60px; /* Simulasi ruang tanda tangan */
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
    </div>

    <div class="title">
      KARTU PESERTA PPDB
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

      <div class="flex-container">
        <br><br>
        <div class="photo-box">
          <br><br><br>
          Foto Peserta<br>
          3 x 4
        </div>
        <!-- <div class="signature">
          Ketua Panitia PPDB<br>
          MIN 1 Kota Tangsel<br>
          <strong>M. Nurul Ardi Rosyidi</strong>
        </div> -->
      </div>
    </div>
  </div>
</body>

</html>
