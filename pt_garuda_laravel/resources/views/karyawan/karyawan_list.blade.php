@extends('layouts.admin')

@section('karyawan-list')
<div class="container">
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
        <th scope="col">Foto</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Divisi</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Opsi</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($karyawan as $employ)
      <tr>
        <td>{{$employ->id}}</td>
        <td>{{$employ->nama_karyawan}}</td>
        <td>{{$employ->status_karyawan}}</td>
        <td>
          <img src="/fotokaryawan/{{$employ->foto_karyawan}}" alt="?" style="height:60px;width:60px;">
        </td>
        <td>{{$employ->alamat_karyawan}}</td>
        <td>{{$employ->email_karyawan}}</td>
        <td>{{$employ->divisi}}</td>
        <td>{{$employ->tanggal_masuk}}</td>
        <td>
          <a href="{{ route('karyawan.edit', $employ->id) }}">
            <i class='far fa-edit' style='font-size:24px'></i>
          </a>
        </td>
        <td>
          <form class="" action="{{ route('karyawan.destroy', $employ->id) }}" method="post">
            @csrf
            @method('delete')
            <button name="button" class="btn btn-danger">
              <i class="fa fa-trash"></i>
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center">Data Kosong</td>
      </tr>
    </tbody>
    @endforelse
  </table>
  <a href="{{ route('karyawan.create') }}"><button type="button" class="btn btn-outline-secondary">Tambah Data</button></a>
</div>
@endsection
