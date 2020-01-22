@extends('layouts.app')
@section('title','Garuda Indonesia')

@section('content')   
    <!-- Content -->
    <div class="section-1 container-fluid py-5">
        <div class="pendaftaran">
            <div class="row text-justify-center">
                <div class="col-sm-6">
                    <img src="img/service-banner.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="desc">
                        <h6 class="pt-3">PENDAFTARAN KARYAWAN GARUDA INDONESIA</h6>
                        <p>Bagi Karyawan PT.GARUDA INDONESIA diharapkan mendaftarkan diri terlebih dahulu.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftarModal">
                            Daftar Disini
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bawah"></div>
@endsection
    
