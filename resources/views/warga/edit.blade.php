@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Update</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('warga.index') }}"> cencel</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Edit Gagal</strong> Maaf ada kesalahan saat Edit data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{route('warga.update',$warga->id_warga) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
             <div class="col-12">
                <div class="card">
                      <div class="card-body">
                          <div class="form-validation">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gender :</strong>
                                        <input type="text" name="gender" value="{{ $warga->gender }}" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">EDIT</button>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
    </form>
@endsection