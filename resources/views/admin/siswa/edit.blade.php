@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="display: block;margin-left: auto;margin-right: auto">
                <div class="card">
                    <div class="card-header">Edit siswa #{{ $siswa->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/dashboard/siswa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/dashboard/siswa/' . $siswa->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.siswa.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
