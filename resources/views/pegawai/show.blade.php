@extends('layout')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pegawai {{ $pegawai->NIP }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dashboard/pegawai') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/dashboard/pegawai/' . $pegawai->id . '/edit') }}" title="Edit Pegawai"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dashboard/pegawai' . '/' . $pegawai->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Pegawai" onclick="return confirm(&quot;Yakin ingin menghapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr><th> NIP </th><td> {{ $pegawai->NIP }} </td></tr>
                                    <tr><th> Nama </th><td> {{ $pegawai->Nama }} </td></tr><tr><th> Jenis Kelamin </th><td> @if($pegawai->JenisKelamin == 'l') Laki Laki @else Perempuan @endif </td></tr><tr><th> Tempat Lahir </th><td> {{ $pegawai->TempatLahir }} </td></tr><tr><th> Tanggal Lahir </th><td> {{ $pegawai->TanggalLahir }} </td></tr><tr><th> Alamat </th><td> {{ $pegawai->Alamat }} </td></tr><tr><th> Jenis Pegawai </th><td> {{ $pegawai->JenisPegawai }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
