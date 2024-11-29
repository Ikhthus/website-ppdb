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

    .gmap-area {
      background-image: url("../images/map.jpg");
      background-position: 0 0;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 70px 0;
    }

    .gmap-area .gmap iframe {
      border-radius: 50%;
      height: 280px;
      width: 300px;
    }

    .gmap {
      border: 10px solid #f6f5f0;
      border-radius: 50%;
      height: 300px;
      width: 300px;
      box-shadow: 0px 0px 3px 3px #e7e4dc;
      overflow: hidden;
      position: relative;
      margin: 0 auto;
    }

    .gmap-area .map-content ul {
      list-style: none;
    }

    .gmap-area .map-content address h5 {
      font-weight: 700;
      /* font-size: 16px; */
    }
  </style>
</head>

<body>
  <!-- Header -->
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
    <div class="gmap-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 text-center">
            <div class="gmap">
              <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=106.74530178308488%2C-6.320598384708686%2C106.7487081885338%2C-6.318351021871588&amp;layer=mapnik" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/#map=19/-6.319475/106.747005">Lihat peta lebih besar</a></small>
            </div>
          </div>

          <div class="col-sm-7 map-content">
            <ul class="row">
              <li class="col-sm-9">
                <address>
                  <h5>Panitia PPDB MIN1 TANGSEL</h5>
                  <p>Ruang Humas dan Kesekretariatan <br>
                    MIN1 TANGSEL</p>
                  <p>Jl. Masjid Arriyadh No.48, RT.4/RW.3, Cipayung<br>
                    Kec. Ciputat, Kota Tangerang Selatan, Banten 15411</p>
                  <p>Telp: (0265) 656565<br>
                    Whatsapp: <a href="https://wa.me/085755898691"
                      target="_blank">0857-5589-8691</a><br>
                    Email: ppdb.min1tangsel@gmail.com</p>
                </address>

              </li>



            </ul>
          </div>
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