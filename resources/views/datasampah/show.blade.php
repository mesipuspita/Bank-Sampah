@extends('master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Biodata </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('datasampah.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <table>
        <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $data->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $data->alamat }}
            </div>
        </div>
</tr>
</table>
    </div>
@endsection