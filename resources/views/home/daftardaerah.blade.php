@extends('home.daftarlayout')

@section('daftar')
    <div id="daftardaerah" daerah="{{$daerah}}"></div>
    <div style="margin-top: 30px" class="alert-link"><a href="{{url('daftar/manual')}}">Klik disini jika anda ingin mendaftar secara manual.</a> </div>
@endsection
