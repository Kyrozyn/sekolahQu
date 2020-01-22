<nav class="navbar navbar-light navbar-expand bg-light border-primary border rounded-0 navigation-clean">
<div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
    <div class="collapse navbar-collapse" id="navcol-1"><img src="{{asset("assets/img/logo.png")}}" style="width: 100px;margin: -20px;margin-left: 0;padding-right: 30px;" alt="logo">
        <ul class="nav navbar-nav">
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{url("dashboard/siswa")}}">Siswa</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{url("dashboard/pegawai")}}">Pegawai</a></li>
{{--            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Kelas</a></li>--}}
{{--            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Absensi</a></li>--}}
{{--            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Nilai</a></li>--}}
{{--            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Paket layanan</a></li>--}}
{{--            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Pengaturan Sekolah</a></li>--}}
{{--        </ul>--}}
    </div><a class="btn btn-primary ml-auto" role="button" href="{{url("logout")}}" style="background-color: rgb(42,35,35);">Keluar</a></div>
</nav>
