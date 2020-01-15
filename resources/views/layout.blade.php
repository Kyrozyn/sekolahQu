<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SekolahQu</title>
    <meta name="description" content="Aplikasi Manajemen Sekolah Berbasis Cloud">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <link rel="stylesheet" href="{{url(asset("assets/bootstrap/css/bootstrap.min.css"))}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{url(asset("assets/css/styles.min.css"))}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand bg-light border-primary border rounded-0 navigation-clean">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
        <div class="collapse navbar-collapse" id="navcol-1"><img src="{{url(asset("assets/img/logo.png"))}}" style="width: 100px;margin: -20px;margin-left: 0;padding-right: 30px;" alt="logo">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Penerimaan Siswa Baru</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Siswa</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Pegawai</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Kelas</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Absensi</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Nilai</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Paket layanan</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Pengaturan Sekolah</a></li>
            </ul>
        </div><a class="btn btn-primary ml-auto" role="button" href="{{url("logout")}}" style="background-color: rgb(42,35,35);">Keluar</a></div>
</nav>
<section class="features-icons bg-light text-center" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">@yield('content')</div>
</section>
<section class="showcase"></section>
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#">Harga</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Masuk Manajemen Sekolah</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">© SekolahQu 2020. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="{{url(asset("assets/js/script.min.js"))}}"></script>
</body>

</html>
