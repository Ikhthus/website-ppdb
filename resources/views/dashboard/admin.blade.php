<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

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
        <li class="nav-item">
          <a href="{{ route('admin.export.siswa') }}" class="nav-link"><i class="fas fa-home"></i> Export Data Siswa</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.export.ayah') }}" class="nav-link"><i class="fas fa-home"></i> Export Data Ayah</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.export.ibu') }}" class="nav-link"><i class="fas fa-home"></i> Export Data Ibu</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.export.wali') }}" class="nav-link"><i class="fas fa-home"></i> Export Data Wali</a>
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

      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn logout-button">
          <i class="fas fa-sign-out-alt"></i> Logout
        </button>
      </form>
      <div class="card mt-4">
        <div class="card-header bg-primary text-white">
          <i class="fas fa-users"></i> Recent Users
        </div>
        <div class="card-body">
          <table id="dataTable" class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>NAMA</th>
                <th>NO PENDAFTARAN</th>
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
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->dataSiswa->nama_lengkap }}</td>
                <td>{{ $data->dataSiswa->no_pendaftaran }}</td>
                <td>{{ $data->dataSiswa->nik }}</td>
                <td>{{ $data->dataSiswa->nisn ?? '' }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->verifikasi->status ?? 'Belum diverifikasi' }}</td>
                <td>
                  <form action="{{ route('admin.verifikasi', $data->dataSiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="Lolos Seleksi Berkas">
                    <button type="submit" class="btn-sm btn-info mr-1 mb-1">
                      <i class="fas fa-check"></i> Lolos Seleksi Berkas
                    </button>
                  </form>
                  <form action="{{ route('admin.verifikasi', $data->dataSiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="Lolos Ujian">
                    <button type="submit" class="btn btn-sm btn-info mr-1 mb-1">
                      <i class="fas fa-check"></i> Lolos Ujian
                    </button>
                  </form>
                  <form action="{{ route('admin.verifikasi', $data->dataSiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="Tidak Lolos">
                    <button type="submit" class="btn btn-sm btn-info mr-1 mb-1">
                      <i class="fas fa-times"></i> Tidak Lolos
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- jQuery & DataTables -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "responsive": true,
        "lengthMenu": [10, 25, 50, 100],
        "language": {
          "search": "Cari:",
          "lengthMenu": "Tampilkan _MENU_ data",
          "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          "paginate": {
            "first": "Awal",
            "last": "Akhir",
            "next": "Selanjutnya",
            "previous": "Sebelumnya"
          }
        }
      });
    });
  </script>
</body>

</html>