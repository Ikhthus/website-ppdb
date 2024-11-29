<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB MIN1 TANGSEL</title>
  <link rel="shortcut icon" href="{{asset('logo3.png')}}">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <style>
    /* Global Styles */
    html,
    body {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
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
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f9f9f9;
      padding: 20px;
    }

    .card {
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
    }

    .card-title {
      color: #007c00;
      font-weight: bold;
    }

    ol {
      padding-left: 1rem;
      text-align: left;
    }

    .footer {
      background-color: #007c00;
      color: white;
      text-align: center;
      padding: 20px;
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

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('logo3.png')}}" alt="Logo" height="50">
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

  <!-- Main Content -->
  <div class="main-content">
    <div class="card p-4">
      <div class="card-body text-center">
        <h5 class="card-title">Syarat Pendaftaran</h5>
        <ol>
          <li>Calon peserta didik berusia minimal 6 tahun pada 1 Juli 2025</li>
          <li>Cetak Bukti Pendaftaran Online</li>
          <li>Fotokopi Akte Kelahiran (2 lembar) wajib</li>
          <li>Fotokopi Kartu Keluarga (2 lembar) wajib terbaru dari dukcapil (berbarcode)</li>
          <li>Pas Foto 3x4 2 lembar</li>
          <li>Surat Keterangan Pendidikan Sebelumnya TK/RA/PAUD (NISN Jika ada)</li>
          <li>Mengisi Surat Pernyataan Mentaati Ketentuan dan Tata Tertib PPDB MI Negeri 1 Kota Tangerang Selatan (Format dapat diunduh)</li>
        </ol>
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
