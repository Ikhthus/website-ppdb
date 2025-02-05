<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 576px) {
            .login-container {
                margin: 20px;
                padding: 20px;
                box-shadow: none;
                /* Hilangkan bayangan di perangkat kecil */
            }

            h2 {
                font-size: 20px;
                /* Sesuaikan ukuran font untuk layar kecil */
            }
        }

        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: seagreen;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: seagreen;
            border: none;
        }

        .btn-primary:hover {
            background-color: darkgreen;
        }

        .register-link {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
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
        <form action="{{ route('user.login') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="register-link">
            <p>Belum punya akun? <a href="{{ route('user.register') }}">Daftar di sini</a></p>
        </div>
        <div class="register-link">
            <p><a href="{{ route('password.request') }}">Lupa password</a></p>
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <button onclick="window.history.back()" class="btn btn-secondary">Kembali</button>
        </div>
    </div>

    <!-- Link ke JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>