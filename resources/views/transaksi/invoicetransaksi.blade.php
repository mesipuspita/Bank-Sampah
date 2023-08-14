@extends('master')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                      <div class="pull-left">
                        <a class="btn btn-success" href={{  'transaksi.createdata'  }}"> Input Data</a>
                        <a href="/data-invoice-pdf" target="_blank"class="btn btn-primary">export PDF </a>
                      
                      </div>
                    </div>
                  </div>
                  
                @foreach($warga as $key => $item)
                <div class="card mt-3">
                    <div class="card-header"> Invoice Transaksi <strong>{{$today }} </strong> <span class="float-right">
                        <strong>Status:</strong>Yes </span> 
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mt-4">
                                <h6>Untuk :</h6>
                                <div> <strong>{{ $item->nama_warga}}</strong> </div>
                                <div>{{ $item->nik}}</div>
                                <div>{{ $item->notelepon}}</div>
                                <div>{{ $item->pekerjaan}}</div>
                                <div>{{ $item->statustinggal}}</div>
                            </div>
                            <div class="mt-4 col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-xs-start">
                                <div class="row align-items-center">
                                    <div class="col-sm-9"> 
                                        {{-- <div class="brand-logo mb-3">
                                            <img class="logo-compact" width="110" src="{{asset('asset/image/L.png')}}" alt="">
                                        </div> --}}
                                        <span>kecamatan Patamuan<strong class="d-block">Nagari Tandikat</strong>
                                            <strong>Padang Pariaman</strong></span><br>
                                        <small class="text-muted">Sumatera Barat</small>
                                    </div>
                                    <div class="col-sm-3 mt-3" width="200">  <img src="{{asset('asset/image/L.png')}}" class="img-fluid width110"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Warga</th>
                                     <th scope="col">Jenis Sampah</th>
                                      {{-- <th scope="col">Satuan</th> --}}
                                      <th scope="col">Jumlah Kg</th>
                                      <th scope="col">Harga/kg</th>
                                      <th scope="col">Total Jumlah</th>
                                      {{-- <th scope="col">Bukti Transaksi</th> --}}
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtdetail as $no =>$item)
                                    <tr> 
                                    <th scope="row">{{ $no+1}}</th>
                                        <td>{{$item->nama_warga}}</td>
                                        <td>{{$item->jenis_sampah}}</td>
                                        {{-- <td>{{$item->satuan}}</td> --}}
                                        <td>{{$item->total}}</td>
                                        <td>{{formatRupiah($item->harga,true)}}</td>
                                        <td>{{formatRupiah($item->total_jumlah,true)}}</td>
                                        {{-- <td><img width=50 height= 50 src="{{asset('gambardetail/')}}/{{$item->gambar}}"/></td> --}}
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"> </div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Subtotal</strong></td>
                                            <td class="right"> {{formatRupiah($detail,true)}}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>$7.477,36</strong><br>
                                                <strong>0.15050000 BTC</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pull-left">
        <a href="{{ route('transaksi.index') }}" class="btn">Kembali</a>
    </div>
</div>

@endsection