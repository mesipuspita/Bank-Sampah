@extends('master')
@section('content')
<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="row">
        <div class="col-lg-12">
             <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Penjualan</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                         <form class="form-valide" action="#" method="post">
           
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Awal</label>
                        <input type="date" name="tglawal" id="tglawal" class="form-control"/>
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>
                        <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
                    </div>
                    <div class="input-group mb-3">

                        <a href="" onclick="this.href='/cetaktransaksitanggal/'+document.getElementById('tglawal').value +
                        '/'+ document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary col-md-12"> 
                          Cetak Laporan Transaksi <i class="fas fa-print"></i>
                    </a>
                    </div>
                </div>
         </div>
    </div>
@endsection