<!-- resources/views/data_wali_siswa/create.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilihan Program</title>
  <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #e9ecef;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    h2 {
      color: #343a40;
    }

    .form-check-label {
      margin-left: 10px;
    }

    .alert {
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="card p-4">
      <h2 class="text-center mb-4"><i class="fas fa-user-plus"></i>Form Pengisian Program Kelas</h2>
      @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{ route('pendaftaran.store.program') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="kelas">Kelas : </label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="reguler" name="kelas" value="REGULER">
            <label class="form-check-label" for="reguler">REGULER</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="billingual" name="kelas" value="BILLINGUAL">
            <label class="form-check-label" for="kelas">BILLINGUAL</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</body>

</html>