<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: #fff;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    .content {
      padding: 20px;
    }

    .nav-item {
      margin: 10px 0;
    }

    @media (min-width: 768px) {
      .sidebar {
        width: 250px;
        position: fixed;
      }

      .content {
        margin-left: 250px;
      }
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar p-4 d-none d-md-block">
      <h2 class="text-center">Admin Dashboard</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
        </li>
      </ul>
    </nav>

    <!-- Content -->
    <div class="content">
      <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse d-md-none" id="navbarNav">
        <nav class="sidebar p-4">
          <h2 class="text-center">Admin Dashboard</h2>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
            </li>
          </ul>
        </nav>
      </div>

      <h1>Welcome, Admin!</h1>
      <!-- <p class="lead">This is your admin dashboard. From here, you can manage users, view reports, and perform other administrative tasks.</p> -->

      <div class="card mt-4">
        <div class="card-header bg-primary text-white">
          <i class="fas fa-users"></i> Recent Users
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>NAMA</th>
                <th>NIK</th>
                <th>NISN</th>
                <th>KELAS</th>
                <th>STATUS</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach($siswa as $data)
              <tr>
                <td>{{ $loop->iteration + ($siswa->currentPage() - 1) * $siswa->perPage() }}</td> <!-- Menghitung nomor urut -->
                <td>{{ $data->dataSiswa->nama_lengkap }}</td>
                <td>{{ $data->dataSiswa->nik }}</td>
                <td>{{ $data->dataSiswa->nisn }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->verifikasi->status ?? 'Belum diverifikasi' }}</td>
                <td>
                  <!-- Tombol Lolos -->
                  <form action="{{ route('admin.verifikasi', $data->dataSiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="Lolos">
                    <button type="submit" class="btn btn-sm btn-info">
                      <i class="fas fa-check"></i> Lolos
                    </button>
                  </form>

                  <!-- Tombol Tidak Lolos -->
                  <form action="{{ route('admin.verifikasi', $data->dataSiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="Tidak Lolos">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class="fas fa-times"></i> Tidak Lolos
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- Link Pagination -->
          <div class="d-flex justify-content-center">
            {{ $siswa->links('pagination::bootstrap-4') }} <!-- Menggunakan pagination Bootstrap 4 -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>