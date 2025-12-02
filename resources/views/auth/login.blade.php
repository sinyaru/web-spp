<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SPP | Login</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" />
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/css/adminlte.min.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100vw !important;
      height: 100vh !important;
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
      background: linear-gradient(135deg, #1d3557, #457b9d);
      font-family: 'Poppins', sans-serif;
    }

    .login-container {
      width: 380px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .header {
      background: #1d3557;
      padding: 30px;
      text-align: center;
      color: white;
    }

    .header h2 {
      margin: 0;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .content {
      padding: 30px;
    }

    .form-control {
      border-radius: 10px;
      height: 45px;
    }

    .input-group-text {
      border-radius: 10px;
    }

    .btn-login {
      width: 100%;
      height: 45px;
      border-radius: 10px;
      background: #1d3557;
      color: white;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #457b9d;
    }

    .login-box-msg {
      text-align: center;
      font-size: 15px;
      color: #555;
      margin-bottom: 15px;
      font-weight: 400;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="header">
      <h2><b>WEB-SPP</b></h2>
    </div>

    <div class="content">
      <p class="login-box-msg">Login untuk Mengakses Layanan SPP</p>

      @error('username')
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @enderror

      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
          <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username" required />
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required />
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>

        <button type="submit" class="btn btn-login">Login</button>
      </form>

    </div>
  </div>

  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/js/adminlte.min.js"></script>
</body>

</html>