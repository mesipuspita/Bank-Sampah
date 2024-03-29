@extends('master')
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="card-header">
                    <h4 class="card-title">Edit Status Transaksi</h4>
                </div>
                <form action="{{url('update',$trans->id_transaksi)}}" method="POST">
                    @csrf
                     <div class="row">
                     <div class="col-lg-12">
                <div class="card">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status:</strong>
                                <input type="text" name="status" value="{{ $trans->status }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">EDIT</button>
                        </div>
                    </div>
               
                </form>

    </div>
   
  
    
@endsection