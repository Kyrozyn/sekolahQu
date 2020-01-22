@extends('layout')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pegawai</div>
                    <div class="card-body">
                        <a href="{{ url('/dashboard/pegawai/create') }}" class="btn btn-success btn-sm" title="Add New Pegawai">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Pegawai
                        </a>

                        <form method="GET" action="{{ url('/dashboard/pegawai') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Cari..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>NIP</th><th>Nama</th><th>Jenis Kelamin</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pegawai as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->NIP }}</td><td>{{ $item->Nama }}</td><td>@if($item->JenisKelamin == 'l') Laki Laki @else Perempuan @endif</td>
                                        <td>
                                            <a href="{{ url('/dashboard/pegawai/' . $item->id) }}" title="View Pegawai"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detail</button></a>
                                            <a href="{{ url('/dashboard/pegawai/' . $item->id . '/edit') }}" title="Edit Pegawai"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/dashboard/pegawai' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pegawai" onclick="return confirm(&quot;Yakin ingin menghapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pegawai->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
