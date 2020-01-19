@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data OFFICE BOY</h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('officeboy.update', $item->id) }}" method="post" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                         {{-- Nama --}}
                            <div class="form-group">
                              <i class="fa fa-user-circle" aria-hidden="true"></i>
                              <label for="nama">Nama</label>
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama" aria-describedby="helpId" value="{{ $item->nama }}">
                              <small id="helpId" class="text-muted">Nama</small>
                            </div>
                         {{-- STATUS --}}
                         <div class="form-group">
                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" class="form-control" placeholder="Isi Status" aria-describedby="helpId" value="{{ $item->status }}">
                            <small id="helpId" class="text-muted">Status</small>
                          </div>
                          {{-- Foto --}}
                          <div class="form-group">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                            <label for="foto">Foto</label>
                            <img src="/fotoOB/{{ $item->foto }}" width="50" height="50" alt="">
                            <input type="file" name="foto" class="form-control" id="foto" value="{{ $item->foto}}">
                            <small id="helpId" class="text-muted">foto</small>
                          </div>
                          {{-- ALAMAT --}}
                          <div class="form-group">
                              <i class="fa fa-address-book" aria-hidden="true"></i>
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" aria-describedby="helpId" value="{{ $item->alamat }}">
                            <small id="helpId" class="text-muted">alamat</small>
                          </div>
                          {{-- email --}}
                          <div class="form-group">
                              <i class="fas fa-address-card"></i>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Isi Email" aria-describedby="helpId" value="{{ $item->email }}">
                            <small id="helpId" class="text-muted">email</small>
                          </div>
                          {{-- tanggal masuk --}}
                          <div class="form-group">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="text" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Isi Tanggal Masuk" aria-describedby="helpId" value="{{ $item->tanggal_masuk }}">
                            <small id="helpId" class="text-muted">Tanggal Masuk</small>
                          </div>
                           <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                          {{-- save alert --}}
                          {{-- <script>
                            var msg = '{{Session::get('alert')}}';
                            var exist = '{{Session::has('alert')}}';
                            if (exist) {alert(msg);}
                        </script> --}}
                        {{-- end alert  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
