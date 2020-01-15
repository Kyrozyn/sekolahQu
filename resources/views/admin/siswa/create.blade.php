@extends('layout')

@section('content')
        <div class="row" >
            <div class="col-md-9" style="display: block;margin-left: auto;margin-right: auto">
                <div class="card">
                    <div class="card-header">Create New siswa</div>
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

                        <form method="POST" action="{{ url('/dashboard/siswa') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.siswa.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
