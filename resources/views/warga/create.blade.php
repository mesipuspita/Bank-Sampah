@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Penjual</h2>
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
   
<form action="{{ route('warga.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No KK </strong>
                        <input type="text" name="nokk" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK</strong>
                        <input type="text" name="nik" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama_warga" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Lahir</strong>
                        <input type="date" class="form-control form-control-user" name="tgllahir" aria-describedby="inputTanggal" 
                        value="<?php echo date("Y-m-d"); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Telepon</strong>
                        <input type="text" name="notelepon" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat</strong>
                        <input type="text" name=" statustinggal" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <strong>Nama Kantor Cabang</strong>
                    <select type="text" class="form-control" id="id_cabang" name="id_cabang" placeholder="Enter a username..">
                        <option value="">-Pilih</option>
                        @foreach($kantorcabang as $item)
                        <option value="{{$item->id_cabang}}">{{$item->nama_bs}}</option>
                    @endforeach
                    </select>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary" href="{{ route('warga.index') }}"> Kembali</button>
                </div>
            </div>
        </div>
    </div>
   
</form>
@endsection