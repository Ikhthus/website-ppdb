<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal PPDB MIN1 TANGSEL</title>
  <link rel="shortcut icon" href="{{asset('logo3.png')}}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .navbar {
      background-color: #007c00;
    }

    .navbar .nav-link {
      color: white !important;
      transition: color 0.3s ease;
    }

    .navbar .nav-link:hover {
      color: #ffe600 !important;
    }

    .main-content {
      flex: 1;
      padding: 40px 20px;
      text-align: center;
    }

    h2 {
      color: #007c00;
      font-weight: bold;
      margin-bottom: 30px;
    }

    table {
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    thead {
      background-color: #007c00;
      color: white;
    }

    tbody tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;
    }

    .footer {
      background-color: #007c00;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: auto;
    }

    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: white;
      border-radius: 50px;
      padding: 10px 15px;
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./logo3.png" alt="Logo" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('persyaratan')}}">Persyaratan</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('prosedur')}}">Prosedur Pendaftaran</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('jadwal')}}">Jadwal PPDB</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('user.register')}}">Pendaftaran</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('user.login')}}">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jadwal PPDB -->
  <div class="main-content">
    <div class="container">
      <h2>Jadwal PPDB</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Kegiatan</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sosialisasi PPDB</td>
              <td>7 Februari 2025 - 8 Februari 2025</td>
              <td>Sosialisasi PPDB</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pendaftaran Online</td>
              <td>13 Februari 2025 - 14 Februari 2025</td>
              <td>Pendaftaran Online</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Penyerahan Berkas</td>
              <td>17 Februari 2025 - 18 Februari 2025</td>
              <td>Penyerahan Berkas</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Pengumuman</td>
              <td>20 Februari 2025</td>
              <td>Pengumuman Lolos seleksi berkas</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Seleksi Kematangan</td>
              <td>22 Februari 2025</td>
              <td>Seleksi Kematangan</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Pengumuman Seleksi</td>
              <td>5 Maret 2025</td>
              <td>Pengumuman Seleksi Kematangan</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Rapat</td>
              <td>8 Maret 2025</td>
              <td>Rapat calon wali murid</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Daftar Ulang</td>
              <td>10 Maret 2025 - 12 Maret 2025</td>
              <td>Daftar Ulang</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2025 MIN1 TANGSEL. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/085755898691" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp me-2"></i> Hubungi Kami
  </a>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
