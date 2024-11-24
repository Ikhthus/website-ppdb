<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
  <title>Reset Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 400px;
      margin: 100px auto;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
      outline: none;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Lupa Password</h2>
    <form action="{{ route('password.update') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" class="form-control" required>
        @error('nik')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password">Password Baru</label>
        <input type="password" name="password" id="password" class="form-control" required>
        @error('password')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        @error('password_confirmation')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn">Reset Password</button>
    </form>
  </div>
</body>

</html>