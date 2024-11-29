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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #007c00;
    }

    .navbar .nav-link {
      color: white !important;
    }

    .navbar .nav-link:hover {
      color: #ffe600 !important;
    }

    .hero-banner {
      /* background: url('https://via.placeholder.com/1920x600') center/cover no-repeat; */
      color: white;
      text-align: center;
      padding: 150px 20px;
    }

    .info-section {
      padding: 40px 20px;
      text-align: center;
    }

    .main-content {
      flex: 1;
      /* Memastikan konten utama mengambil ruang fleksibel */
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
    }

    .carousel-caption {
      /* background: white; */
      padding: 15px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <!-- Header -->
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
    <div class="container my-5">
      <h2 class="text-center mb-4">Prosedur Pendaftaran</h2>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">Melihat informasi PPDB dan Sekolah MIN 1 KOTA TANGSEL melalui website: <a href="http://ppdb.min1tangsel.sch.id" target="_blank">http://ppdb.min1tangsel.sch.id</a></li>
            <li class="list-group-item">Mendaftar (membuat akun PPDB) melalui website dengan membuka menu <strong>"Pendaftaran"</strong>.</li>
            <li class="list-group-item">Login di website PPDB dengan memilih menu <strong>"Login"</strong>, masukkan NIK dan Password.</li>
            <li class="list-group-item">Mengisi formulir dengan lengkap, form yang bertanda bintang (*) wajib diisi.</li>
            <li class="list-group-item">Panitia memverifikasi berkas calon peserta didik.</li>
            <li class="list-group-item">Mengikuti tes seleksi sesuai dengan jadwal yang sudah ditentukan.</li>
            <!-- <li class="list-group-item">Melihat hasil tes di website: <a href="http://ppdb.alazhar-bsd.sch.id" target="_blank">http://ppdb.alazhar-bsd.sch.id</a>, pilih menu <strong>"Hasil Tes"</strong>.</li> -->
            <li class="list-group-item">Bagi siswa yang diterima, wajib melakukan daftar ulang.</li>
            <!-- <li class="list-group-item">Siswa dengan hasil tes <strong>"Cadangan"</strong>, harap konfirmasi 8 hari kerja setelah pengumuman untuk mendapat disposisi.</li> -->
          </ol>
        </div>
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
    <i class="fab fa-whatsapp"></i> Hubungi Kami
  </a>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>