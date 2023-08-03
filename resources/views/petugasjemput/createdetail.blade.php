@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Jadwal Petugas Jemput</h2>
        </div>
                 <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('petugasjemput.index') }}"> Kembali</a>
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
   
<form action="{{ route('createdetaill') }}" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="hidden" name="id_warga" value="{{Request()->id_petugas}}">

    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ID</strong>
                            <input type="text" name="id_petugas" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Kantor Bank Sampah</strong>
                        <select type="text" class="form-control" id="id_cabang" name="id_cabang" placeholder="Enter a username..">
                            <option value="">-Pilih</option>
                            @foreach($kantorcabang as $item)
                            <option value="{{$item->id_cabang}}">{{$item->nama_bs}}</option>
                        @endforeach
                        </select>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Hari</strong>
                        <input type="text" name="hari" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal</strong>
                        <input type="date" class="form-control form-control-user" name="tanggal" aria-describedby="inputTanggal" 
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