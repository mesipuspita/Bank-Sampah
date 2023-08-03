@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Update Status Sampah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sampah.index') }}"> cencel</a>
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
  
    <form action="{{ route('sampah.ubah',$sampah->id_sampah) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
             <div class="col-12">
                <div class="card">
                      <div class="card-body">
                          <div class="form-validation">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Petugas :</strong>
                                        <input type="text" name="nama_petugas" value="{{ $sampah->status}}" class="form-control" placeholder="status">
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