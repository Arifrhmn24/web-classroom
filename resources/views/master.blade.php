<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image: url(/img/2.jpg);
            width:100%;
            background-size: cover; /* Menyesuaikan gambar latar belakang ke seluruh ukuran body */
            color: white; /* Mengatur warna teks menjadi putih */
        }

        /* Mengatur gaya navigasi */
        .navbar {
            background-color: rgba(0, 0, 0, 0.5); /* Menambahkan transparansi pada latar belakang navigasi */
            border: none; /* Menghapus border navigasi */
        }

        .navbar-brand,
        .navbar-nav>li>a {
            color: rgb(0, 0, 0) !important; /* Mengatur warna teks menu menjadi putih */
            color: rgb(0, 0, 0) !important; /* Mengatur warna teks menu menjadi putih */
        }

        .navbar-brand:hover,
        .navbar-nav>li>a:hover {
            color: #f2f2f2 !important; /* Mengatur warna teks menu menjadi putih ketika dihover */
        }

        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.7); /* Menambahkan transparansi pada latar belakang dropdown */
        }

        .dropdown-menu>li>a {
            color: black !important; /* Mengatur warna teks dropdown menjadi putih */
        }

        .dropdown-menu>li>a:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Mengatur warna latar belakang item dropdown ketika dihover */
        }

        .dropdown-menu>li>a:focus,
        .dropdown-menu>li>a:hover {
            color: #f2f2f2 !important; /* Mengatur warna teks dropdown menjadi putih ketika dihover */
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study Room</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">

                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('dashboard') }}">E-Tugas Tamansiswa</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-left">
                            @if (Auth::user()->role == 'admin')
                            <li class="nav-item"><a class="nav-link" href="/user">User</a></li>
                            @endif
                            <li class="nav-item"><a class="nav-link" href="/soal">Tugas</a></li>
                            <li class="nav-item"><a class="nav-link" href="/nilai">Nilai</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> {{ Auth::user()->email }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a>Level: {{ Auth::user()->role }}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> LogOut</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            @yield('konten')
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
