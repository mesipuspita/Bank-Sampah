@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Penjual</h2>
        </div>
                 <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pengajuanharga.index') }}"> Kembali</a>
                 </div>
            </div>
    </div>
   
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
   
<form action="{{ route('pengajuanharga.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama </strong>
                        <input type="text" name="id_sampah" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah Pengajuan</strong>
                        <input type="text" name="jumlah_pengajuan" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Pengajuan</strong>
                        <select type="text" name="status_pengajuan" class="form-control" placeholder="">
                            <option value="Islam">Angota</option>
                            <option value="Kristen">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Pengajuan</strong>
                        <input type="date" class="form-control form-control-user" name="tanggal_pengajuan" aria-describedby="inputTanggal" 
                        value="<?php echo date("Y-m-d"); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
   
</form>
@endsection