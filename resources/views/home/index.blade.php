<!DOCTYPE html>
<html>

<head>
    @include('head')
</head>

<body>
    @include('navhome')
    <header class="masthead text-white text-center" style="background: url('https://smpuabantul.sch.id/wp-content/themes/study-circle/images/slides/slider-default.jpg')no-repeat center center;background-size: cover;//*background-repeat: no-repeat;*/">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Nikmati Kemudahan Manajemen Sekolah dimanapun anda berada.</h1>
                </div>
                <div class="col-xl-9 mx-auto">
                    <div><a href="{{url('daftar')}}" class="btn btn-primary btn-block btn-lg">Daftar</a></div>
                </div>
            </div>
        </div>
    </header>
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Komputasi</h3>
                        <p class="lead mb-0">SekolahQu menyediakan layanan komputasi untuk mendukung proses bisnis di dalam sekolah anda.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-folder m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Penyimpanan</h3>
                        <p class="lead mb-0">SekolahQu menjamin penyimpanan data sekolah yang aman, tanpa khawatir data yang anda olah hilang.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-speedometer m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Analitik</h3>
                        <p class="lead mb-0">SekolahQu menyediakan layanan yang membantu proses analisis dan pengambilan keputusan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters" style="background-color: rgb(255,255,255);">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:url(&quot;assets/img/biaya.jpg&quot;);"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Hemat Biaya</h2>
                    <p class="lead mb-0">Dengan model pembayaran pay-as-you-go, atau bayar yang sesuai apa yang diinginkan, anda bisa menghemat biaya proses pengelolaan sekolah anda.</p>
                </div>
            </div>
            <div class="row no-gutters" style="background-color: rgb(255,255,255);">
                <div class="col-lg-6 text-white showcase-img" style="background-image:url(&quot;assets/img/data-integrity.png&quot;);"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Bisa diandalkan</h2>
                    <p class="lead mb-0">SekolahQu menjamin bisa diakses dimana saja dan kapanpun. Setiap data<br>yang disimpan akan tetap aman.</p>
                </div>
            </div>
            <div class="row no-gutters" style="background-color: rgb(255,255,255);">
                <div class="col" style="margin-top: 20px;">
                    <h1 class="text-center d-block">Paket Layanan</h1>
                </div>
            </div>
            <div class="row no-gutters" style="background-color: rgb(255,255,255);">
                <div class="col">
                    <div class="text-center border rounded border-dark d-block" data-bs-hover-animate="bounce" id="price-table-block-bear" style="background-color: rgba(33,33,33,0.94);width: 299px;margin-left: auto;margin-right: auto;">
                        <h1 class="text-center" style="background-color: #516651;padding: 10px;color: rgb(255,255,255);">Bronze</h1>
                        <div id="price-table-list-bear">
                            <div class="text-center" id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-home" style="font-size: 25px;margin-right: 10px;"></i><span class="text-left" style="color: rgb(255,255,255);font-size: 25px;">6 Kelas</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-user" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">300 Siswa</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div class="text-center" id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-users" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">15 Pegawai</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <div id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-money" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">Gratis</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border rounded border-dark d-block" data-bs-hover-animate="bounce" id="price-table-block-bear" style="background-color: rgba(33,33,33,0.94);width: 299px;margin-left: auto;margin-right: auto;">
                        <h1 class="text-center" style="background-color: #77797b;padding: 10px;color: rgb(255,255,255);">Silver</h1>
                        <div id="price-table-list-bear">
                            <div class="text-center" id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-home" style="font-size: 25px;margin-right: 10px;"></i><span class="text-left" style="color: rgb(255,255,255);font-size: 25px;">30 Kelas</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-user" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">1500 Siswa</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div class="text-center" id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-users" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">60 Pegawai</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <div id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-money" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">Rp. 300.000 / Semester</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border rounded border-dark d-block" data-bs-hover-animate="bounce" id="price-table-block-bear" style="background-color: rgba(33,33,33,0.94);width: 299px;margin-left: auto;margin-right: auto;">
                        <h1 class="text-center" style="background-color: #d4af37;padding: 10px;color: rgb(255,255,255);">Gold</h1>
                        <div id="price-table-list-bear">
                            <div class="text-center" id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-home" style="font-size: 25px;margin-right: 10px;"></i><span class="text-left" style="color: rgb(255,255,255);font-size: 25px;">60 Kelas</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-user" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">3000 Siswa</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div class="text-center" id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-users" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">120 Pegawai</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <div id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-money" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">Rp. 600.000 / Semester</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border rounded border-dark d-block" data-bs-hover-animate="bounce" id="price-table-block-bear" style="background-color: rgba(33,33,33,0.94);width: 299px;margin-left: auto;margin-right: auto;">
                        <h1 class="text-center" style="background-color: #516651;padding: 10px;color: rgb(255,255,255);">Platinum</h1>
                        <div id="price-table-list-bear">
                            <div class="text-center" id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-home" style="font-size: 25px;margin-right: 10px;"></i><span class="text-left" style="color: rgb(255,255,255);font-size: 25px;"><a href="https://www.infinitysymbol.net/">∞</a>&nbsp;Kelas</span></div>
                            <hr id="price-table-hr-bear">
                        </div>
                        <div>
                            <div id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-user" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;"><a href="https://www.infinitysymbol.net/">∞</a>&nbsp;Siswa</span></div>
                            <hr
                                id="price-table-hr-bear">
                        </div>
                        <div>
                            <div class="text-center" id="price-table-list-internal" style="margin-right: 20px;margin-left: 20px;"><i class="fa fa-users" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;"><a href="https://www.infinitysymbol.net/">∞</a>&nbsp;Pegawai</span></div>
                            <hr
                                id="price-table-hr-bear">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <div id="price-table-list-internal" style="margin-left: 20px;margin-right: 20px;"><i class="fa fa-money" style="color: rgb(255,255,255);margin-left: 0px;margin-right: 10px;font-size: 25px;"></i><span style="color: rgb(255,255,255);font-size: 25px;">Rp. 1.200.000 / Semester</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="assets/js/script.min.js"></script>
</body>

</html>
