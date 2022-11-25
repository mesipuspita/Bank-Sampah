@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Update</h2>
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
  
    <form action="{{ route('sampah.update',$sampah->id_sampah) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
             <div class="col-12">
                <div class="card">
                      <div class="card-body">
                          <div class="form-validation">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Sampah:</strong>
                                        <input type="text" name="nama_sampah" value="{{ $sampah->nama_sampah }}" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jenis Sampah:</strong>
                                        <input type="text" name="jenis_sampah" value="{{ $sampah->jenis_sampah }}" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Harga:</strong>
                                        <input type="text" name="harga" value="{{ $sampah->harga }}" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Deskripsi :</strong>
                                        <input type="text" name="keterangan" value="{{ $sampah->keterangan }}" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>satuan:</strong>
                                        <input type="text" name="id_satuan" value="{{ $sampah->id_satuan }}" class="form-control" placeholder="Harga">
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