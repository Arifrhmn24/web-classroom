<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        body {
            background-image: url(/img/4.jpg); /* Tambahkan URL gambar latar belakang di sini */
            background-size: cover; /* Menyesuaikan gambar latar belakang ke seluruh ukuran body */
            background-repeat: no-repeat; /* Memastikan gambar latar belakang tidak diulang */
            background-position: center; /* Posisi gambar latar belakang di tengah-tengah */
        }
        .container {
            margin-top: 50px; /* Jarak antara bagian atas halaman dan kotak register */
        }
        .register-form {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang kotak register dengan transparansi */
            padding: 20px;
            border-radius: 10px; /* Sudut bulat pada kotak register */
        }
        .register-heading {
            text-align: center;
            margin-bottom: 30px; /* Jarak bawah antara judul dan formulir */
        }
        .register-btn {
            margin-top: 20px; /* Jarak atas antara tombol register dan link login */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3 register-form">
            <h2 class="register-heading">FORM REGISTER USER</h2>
            <hr>
            @if (session('message'))
            <div class="alert alert-success"> {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('actionregister') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-address-book"></i> Role</label>
                    <input type="text" name="role" class="form-control" value="user" readonly>
                </div>
                <button type="submit" class="btn btn-primary btn-block register-btn">
                    <i class="fa fa-user"></i> Register</button>
                <hr>
                <p class="text-center">Sudah punya akun? Silahkan <a href="/">Login Disini!</a></p>
            </form>
        </div>
    </div>
</body>

</html>
