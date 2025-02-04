<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Pegawai</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/SourceSansPro.css') }}" type="text/css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #00598B 30%, #89C9D8 100%);
            font-family: 'Source Sans Pro', sans-serif;
        }

        .login-wrapper {
            display: flex;
            height: 100vh;
            width: 100vw;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-left {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .login-left-content {
            background: url('/assets/dist/img/tes.png') no-repeat center center;
            background-size: cover;
            width: 60%;
            height: 60%;
            border-radius: 15px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .login-left h1 {
            font-size: 3rem;
            color: #fff;
            position: absolute;
            top: -25%;
            left: 45%;
            transform: translateX(-50%);
            z-index: 2;
            text-align: center;
            width: 100%;
        }

        .login-right {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .card {
            width: 90%;
            max-width: 500px;
            min-height: 400px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-header {
            background-color: #f4f6f9;
            border-bottom: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        .card-header h1 {
            font-size: 2rem;
        }

        .card-body {
            padding: 40px;
        }

        .input-group .form-control {
            border-radius: 10px;
        }

        .btn {
            border-radius: 10px;
            background-color: #000;
            color: #fff;
            border: none;
        }

        .btn:hover {
            background-color: #333;
        }


        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
                height: auto;
            }

            .login-left,
            .login-right {
                width: 100%;
                height: auto;
            }

            .login-left {
                display: none;
            }

            .login-right {
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #00598B 30%, #89C9D8 100%);
                height: 100vh;
            }

            .card {
                width: 90%;
                max-width: 100%;
                margin: 20px auto;
            }
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-wrapper">
        <div class="login-left">
            <div class="login-left-content">
                <h1><b>Pegawai</b></h1>
            </div>
        </div>
        <div class="login-right">
            <div class="card">
                <div class="card-header">
                    <h1><b>Login</b></h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
