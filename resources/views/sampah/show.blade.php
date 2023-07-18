@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                  <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                                </div>
                                  <div class="new-arrival-content text-center mt-8">
                                    <h4>{{ $data->nama_sampah}}</h4>
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
                                    <span><p>Kerdus/koran/Buku adalah jenis kertas - kertasan yang bisa didaurulang, 
                                      kertas termasuk kedalam daftar yang bisa ditukarkan ke Bank sampah ini, harga untuk penukaran 
                                      sampah menjadi uang untuk kertas ini sudah ditentukan dalam table data sampah dibawah ini.
                                    </p></span>
                                  </div>
                                  </div>
                                </div>
                           </div>
                    </div>
            
        </div>
    </div>
       
    </div>
    </div>
  </form>
</div> 
</div> 
</div> 

<div class="pull-left">
<a href="{{ route('informasi.index') }}" class="btn">Kembali</a>
</div>
@endsection