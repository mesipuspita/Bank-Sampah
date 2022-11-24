@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Sampah</h2>
        </div>
                 <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tabungan.index') }}"> Kembali</a>
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
    <form action="{{ route('tabungan.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jumlah Tabungan</strong>
                            <input type="text" name="jumlahtabungan" class="form-control" placeholder="">
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