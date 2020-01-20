@extends('layouts.admin')

@section('karyawan-create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
              <div class="card-header text-center">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Silakan, Isi Data Karyawan!</div>
              </div>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <form class="" action="{{route('karyawan.create')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row justify-content-center">
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >ID</label></div>
                        <input type="text" name="id" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Contoh: 001</small>
                      </div>
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Nama Karyawan</label></div>
                        <input type="text" name="nama_karyawan" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Contoh: Hasan Ibrahim</small>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Status</label></div>
                        <input type="text" name="status_karyawan" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Contoh: Lajang</small>
                      </div>
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Foto Karyawan</label></div>
                        <input type="file" name="foto_karyawan" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Foto dengan background biru untuk pria dan merah untuk wanita</small>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Alamat</label></div>
                        <input type="text" name="alamat_karyawan" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Masukkan Kecamatan dan Kelurahan</small>
                      </div>
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Email</label></div>
                        <input type="email" name="email_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Contoh: namaanda@contoh.com</small>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Divisi</label></div>
                        <input type="text" name="divisi" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Contoh: Divisi Periklanan</small>
                      </div>
                      <div class="col-sm-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label >Tanggal Masuk</label></div>
                        <input type="date" name="tanggal_masuk" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">MM-DD-YYYY</small>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button style="margin-left:340px;" type="submit" class="btn btn-outline-success">Success</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
