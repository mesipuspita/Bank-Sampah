@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Detail  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sampah.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <table>
        <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">
                <strong>Nama</strong>
                {{ $data->nama_sampah}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jenis Sampah</strong>
                {{ $data->jenis_sampah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Sampah</strong>
                {{ $data->harga}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                {{ $data->keterangan}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Satuan Sampah/Kg</strong>
                {{ $data->id_satuan}}
            </div>
        </div>
        
</tr>
</table>
    </div>
@endsection