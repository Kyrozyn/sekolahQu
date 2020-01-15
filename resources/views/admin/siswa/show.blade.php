@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="display: block;margin-left: auto;margin-right: auto">
                <div class="card">
                    <div class="card-header">siswa {{ $siswa->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dashboard/siswa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/dashboard/siswa/' . $siswa->id . '/edit') }}" title="Edit siswa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dashboard/siswa' . '/' . $siswa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete siswa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $siswa->id }}</td>
                                    </tr>
                                    <tr><th> NIS </th><td> {{ $siswa->NIS }} </td></tr><tr><th> Nama </th><td> {{ $siswa->nama }} </td></tr><tr><th> Tempat Lahir </th><td> {{ $siswa->tempat_lahir }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
