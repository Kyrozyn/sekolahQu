<!DOCTYPE html>
<html>

<head>
    @include('head')
</head>

<body>
@include('navhome')
<section class="features-icons bg-light" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">@yield('content')</div>
</section>
<section class="showcase"></section>
<footer class="footer bg-light">
    @include('footer')
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="{{url(asset("assets/js/script.min.js"))}}"></script>
<script src="{{url("js/app.js")}}"></script>
</body>

</html>
