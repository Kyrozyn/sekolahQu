@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Siswa {{ $siswa->Nama }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dashboard/siswa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/dashboard/siswa/' . $siswa->id . '/edit') }}" title="Edit Siswa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dashboard/siswa' . '/' . $siswa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Siswa" onclick="return confirm(&quot;Anda yakin akan menghapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $siswa->id }}</td>
                                    </tr>
                                    <tr><th> NIS </th><td> {{ $siswa->NIS }} </td></tr><tr><th> Nama </th><td> {{ $siswa->Nama }} </td></tr><tr><th> Jenis Kelamin </th><td> @if($siswa->JenisKelamin == 'l') Laki Laki @else Perempuan @endif  </td></tr></tr><tr><th> Tanggal Lahir </th><td> {{ $siswa->TanggalLahir }} </td></tr><tr><th> Alamat </th><td> {{ $siswa->Alamat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
