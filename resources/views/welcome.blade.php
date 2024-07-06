<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('public/Masyarakat/css/styles.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Gaya yang sudah ada */
        body {
            font-family: Arial, sans-serif;
            font-weight: 200;
            background-image: url('{{ asset('Masyarakat/img/banner/Namane.png') }}'); /* Link ke gambar latar belakang */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-color: rgba(255, 255, 255, 0.7); /* Background lebih terang */
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3); /* Overlay hitam transparan, lebih terang */
            z-index: 1;
        }
        .login-container {
            max-width: 400px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
            z-index: 2;
            position: relative;
        }
        .login-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333333;
        }
        .login-container .form-group {
            margin-bottom: 20px;
        }
        .login-container .btn-block {
            padding: 12px;
            font-size: 18px;
            border-radius: 30px;
            background-color: #007bff;
            border: none;
        }
        .login-container .btn-block:hover {
            background-color: #0056b3;
        }
        .login-container .mt-3 {
            font-size: 12px;
            color: #666666;
        }
    
        /* Menambahkan border-radius untuk input form */
        .form-control {
            border-radius: 20px; /* Atur radius untuk membuat sudut input lebih bulat */
        }

        /* Teks besar di tengah halaman */
        .center-text {
            position: absolute;
            top: 50%;
            right: 20%; /* Pindahkan ke kanan sejauh 20% dari tepi kanan */
            transform: translateY(-50%);
            color: #ffffff;
            text-align: center; /* Teks rata tengah */
            z-index: 3; /* Menempatkan teks di atas konten lain */
        }

        .center-text h1 {
            font-size: 72px; /* Ukuran teks besar */
            margin-bottom: 10px; /* Jarak bawah antara judul dan deskripsi */
        }

        .center-text p {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        /* Media queries untuk responsivitas */
        @media (max-width: 767px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }

            .center-text {
                position: static;
                transform: none;
                margin-top: 20px;
            }

            .center-text h1 {
                font-size: 48px;
            }

            .center-text p {
                font-size: 18px;
            }

            body {
                flex-direction: column;
                justify-content: center;
            }
        }
    </style>
    
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <!-- Login Form -->
        <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Masukan Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('register') }}">Belum Memiliki Akun? Register</a>
            </div>
        </div>
    </div>

    <!-- Teks besar di sebelah kanan halaman -->
    <div class="center-text">
        <h1>PEFADES</h1>
        <p>Pengaduan Fasilitas Desa</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
