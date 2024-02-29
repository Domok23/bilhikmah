<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bil Hikmah</title>
    <link rel="icon" href="/img/logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style AdminLTE -->
    <link rel="stylesheet" href="/lte/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-pro/css/all.min.css">
    <!-- iCheck -->
    {{-- <link rel="stylesheet" href="/css/icheck-bootstrap.min.css"> --}}
</head>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('loginError') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </div>
        @endif

        <!-- /.login -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="/" class="h1">
                    <img src="/img/logo-login.png" alt="logo-login" width="200px" height="150px">
                </a>
            </div>
            <div class="card-body">
                <p class="text-center">
                    <b>Selamat Datang, Silahkan Login</b>
                </p>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" id="email" autofocus required
                            value="{{ old ('email') }}" placeholder="Masukan email">
                        <div class="input-group-append">
                            @error('email')
                            <div class="invalid feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="togglePasswordContainer">
                                <i class="fa-solid fa-eye" id="togglePassword"></i>
                            </span>
                        </div>
                        @error('password')
                        <div class="invalid feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- AdminLTE App -->
    <script src="/lte/js/adminlte.js"></script>
    <!-- JQuery -->
    <script src="/lte/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="/lte/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('togglePasswordContainer').addEventListener('click', function () {
        var passwordInput = document.getElementById('password');
        var icon = document.getElementById('togglePassword');
        if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
        } else {
        passwordInput.type = "password";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
        }
        });
    </script>
</body>

</html>
