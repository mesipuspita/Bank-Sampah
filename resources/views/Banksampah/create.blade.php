@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Sampah</h2>
        </div>
                 <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Banksampah.index') }}"> Kembali</a>
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
   
<form action="{{ route('Banksampah.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID</strong>
                        <input type="text" name="id_cabang" class="form-control" placeholder="">
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Kantor Cabang </strong>
                            <input type="text" name="nama_bs" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat kantor/strong>
                            <input type="text" name="alamatbs" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>keterangan</strong>
                            <input type="text" name="ket" class="form-control" placeholder="">
                        </div>
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
@endsection