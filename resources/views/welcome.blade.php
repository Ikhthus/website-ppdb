<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB MIN1 TANGSEL</title>
  <link rel="shortcut icon" href="./logo3.png">
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
      padding-top: 56px;
      /* Tinggi navbar */
      padding-bottom: 60px;
      /* Tinggi footer */
    }

    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1030;
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

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1030;
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

  <!-- Banner -->
  <!-- Carousel Section -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button> -->
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="{{asset('slide1.png')}}" class="d-block w-100"
          alt="Banner 1">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h3>Welcome to PPDB Al-Azhar BSD</h3>
          <p>Pendaftaran TK - SD - SMP - SMA Islam Al-Azhar BSD</p> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="{{asset('slide2.png')}}" class="d-block w-100"
          alt="Banner 2">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Buka Pendaftaran Tahun Ajaran 2025/2026</h5>
          <p>Daftar sekarang dan dapatkan pengalaman belajar terbaik!</p> -->
        </div>
      </div>

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <img src="https://ppdb.alazhar-bsd.sch.id/front-assets/images/slider/bg2.jpg" class="d-block w-100"
          alt="Banner 3">
        <div class="carousel-caption d-none d-md-block"> -->
      <!-- <h5>Program Unggulan dan Fasilitas Modern</h5>
          <p>Kami memberikan pendidikan terbaik dengan fasilitas lengkap.</p> -->
      <!-- </div>
      </div> -->
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Informasi -->
  <section class="info-section">
    <div class="container">
      <p>Selamat datang di halaman Penerimaan Peserta Didik Baru (PPDB) 2025-2026</p>
      <p>Untuk memulai pendaftaran silahkan klik Menu <strong>"Pendaftaran"</strong> atau <strong>"Prosedur
          Pendaftaran"</strong>.</p>
      <p>Informasi lebih lanjut, kunjungi kami di:</p>
      <address>
        <strong>Alamat:</strong> Jl. Masjid Arriyadh No.48, RT.4/RW.3, Cipayung, Kec. Ciputat, Kota Tangerang Selatan, Banten<br>
        <strong>Telepon:</strong> (0265) 656565
      </address>
    </div>
  </section>

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

</html>