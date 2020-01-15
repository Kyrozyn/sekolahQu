<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SekolahQu</title>
    <meta name="description" content="Aplikasi Manajemen Sekolah Berbasis Cloud">
    <link rel="stylesheet" href="{{url(asset('assets/bootstrap/css/bootstrap.min.css'))}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{url(asset('assets/css/styles.min.css'))}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: url('{{url(asset('assets/img/wp.jpg'))}}');/*background-size: cover;">
    <form method="post" action="{{url('user/signup')}}" id="form" style="font-family:Quicksand, sans-serif;background-color:rgba(44,40,52,0.73);width:320px;padding:40px;">
        @csrf
        <div><img class="rounded img-fluid" id="image" style="width: auto;height: auto;margin-left: 30px;margin-bottom: -30px;" src="{{url(asset('assets/img/logo.png'))}}">
            <h4 style="text-align: center;color: rgb(104,194,232);">Daftar</h4>
        </div>
        <div class="form-group"><input class="form-control" type="email" name="email" value="{{$email}}" id="formum" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="password" name="password" id="formum2" placeholder="Kata Sandi"></div><input class="form-control" type="text" id="formum" name="namaSekolah" placeholder="Nama Sekolah">
        <div class="form-group"></div><button class="btn btn-light" id="butonas" style="width:100%;height:100%;margin-bottom:10px;background-color:rgb(106,176,209);" type="submit">Daftar</button></form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url(asset("assets/js/script.min.js"))}}"></script>
</body>

</html>
