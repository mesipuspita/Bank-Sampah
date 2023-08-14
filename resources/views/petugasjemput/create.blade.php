@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Petugas Jemput</h2>
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
   
<form action="{{ route('petugasjemput.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama </strong>
                        <input type="text" name="nama_petugas" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No telefon</strong>
                        <input type="text" name="nohp" class="form-control" placeholder="">
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Pengajuan</strong>
                        <select type="text" name="status_pengajuan" class="form-control" placeholder="">
                            <option value="Islam">Angota</option>
                            <option value="Kristen">Admin</option>
                        </select>
                    </div>
                </div> -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat Petugas Jemput</strong>
                        <input type="text" name="alamat_petugas" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary" href="{{ route('petugasjemput.index') }}">Kembali</button>
                </div>
            </div>
            </div>
        </div>
    </div>
   
</form>
@endsection