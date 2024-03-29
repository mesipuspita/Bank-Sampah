@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Sampah</h2>
  
   
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
   
<form action="{{ route('sampah.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama</strong>
                            <input type="text" name="nama_sampah" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Sampah</strong>
                            <input type="text" name="jenis_sampah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>harga</strong>
                            <input type="text" name="harga" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi</strong>
                            <input type="text" name="keterangan" class="form-control" placeholder="">
                        </div>
                    </div>

                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Id Satuan</strong>
                            <input type="text" name="id_satuan" class="form-control" placeholder="">
                        </div>
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="submit" class="btn btn-primary"href="{{ route('sampah.index') }}">Kembali</button>
                        </div>

                   </div>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
@endsection