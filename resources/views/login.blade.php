<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – E-Tugas Tamansiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(/img/4.jpg);
            background-size: cover; /* Menyesuaikan gambar latar belakang ke seluruh ukuran body */
            background-repeat: no-repeat; /* Memastikan gambar latar belakang tidak diulang */
            background-position: center; /* Posisi gambar latar belakang di tengah-tengah */
        }
        .container {
            margin-top: 100px; /* Jarak antara bagian atas halaman dan kotak login */
        }
        .login-form {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang kotak login dengan transparansi */
            padding: 20px;
            border-radius: 10px; /* Sudut bulat pada kotak login */
        }
        .login-heading {
            text-align: center;
            margin-bottom: 30px; /* Jarak bawah antara judul dan formulir */
        }
        .login-btn {
            margin-top: 20px; /* Jarak atas antara tombol login dan link register */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4 login-form">
            <h2 class="login-heading">E-Tugas Tamansiswa</h2>
            <hr>
            @if (session('error'))
            <div class="alert alert-danger"> <b>Opps!</b>
                {{ session('error') }} </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block login-btn">LogIn</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>

</html>
