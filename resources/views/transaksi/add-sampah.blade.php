@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Transaksi</h2>
            </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('detail.index') }}"> Kembali</a>
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
    <form action="{{url('transaksi/storee/'.$transaksi->id_transaksi)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_warga" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Jenis Sampah</label>
                            <select type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" placeholder="Enter a username..">
                                @foreach($data as $item)
                                        <option value="{{$item->jenis_sampah}}">{{$item->jenis_sampah}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
							<h5>File</h5>
							<div class="form-group">
								<div class="custom-file">
									<input type="file" name="gambar" class="custom-file-input">
										<label class="custom-file-label">Choose file</label>		
								</div> 				
							</div>
						</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-danger btn-xs sharp"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection