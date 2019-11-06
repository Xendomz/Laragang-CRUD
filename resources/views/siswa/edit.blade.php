@extends('layouts.app', ['title' => __('Tambah siswa')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Siswa')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Siswa</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="/siswa" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach ($students as $student)
                        <form method="post" action="/siswa/update" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Informasi Siswa</h6>
                            <div class="pl-lg-4">
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Nama</label>
                                <input type="text" name="nama" id="input-nama" class="form-control form-control-alternative{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama" value="{{$student->nama}}" required autofocus>
                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-alamat">Alamat</label>
                                <input type="text" name="contact" id="input-alamat" class="form-control form-control-alternative{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="alamat" value="{{$student->contact}}" required>
                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4 btn-block">Tambah</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
