@extends('layout')

@section('content')
    <h2>{{$namasekolah}}</h2>
    <table class="table">
        <tr>
            <td>NPSN</td><td>{{$NPSN}}</td>
        </tr>
        <tr>
            <td>Alamat</td><td>{{$alamat}}</td>
        </tr>
        <tr>
            <td>Status</td><td>{{$status}}</td>
        </tr>
    </table>
    @endsection
