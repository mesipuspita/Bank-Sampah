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
                                    <h4>#</h4>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nama Petugas</strong>
                                            #
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Lokasi jemput</strong>
                                           #
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Sampah</strong>
                                            #
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Tanggal</strong>
                                          #
                                        </div>
                                    </div>
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