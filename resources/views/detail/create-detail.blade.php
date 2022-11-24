@extends('master')
@section('content')
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
<form action="{{ route('simpan-detail') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="{{Request()->id_warga}}">
    <input type="hidden" name="id_transaksi" value="{{Request()->id_transaksi}}">
    
    <div class="row">
        <div class="col-lg-12">
        <h2 class="m-b-15"> Form Tambah Transaksi</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                                <li role="presentation" class="show">
                                                    <a href="#first" role="tab" data-toggle="tab">
                                                        <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}"alt="" width="50">
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#second" role="tab" data-toggle="tab"><img class="img-fluid" src="{{asset('asset/image/Botol Palastik.jpg')}}" alt="" width="50"></a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#third" role="tab" data-toggle="tab"><img class="img-fluid" src="{{asset('asset/image/Botol Palastik.jpg')}}" alt="" width="50"></a>
                                                </li>
												<li role="presentation">
                                                    <a href="#for" role="tab" data-toggle="tab"><img class="img-fluid" src="{{asset('asset/image/Botol Palastik.jpg')}}" alt="" width="50"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                            
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                    <h4 class="m-b-15">Satuan</h4>
													<input type="text" name="id_satuan" class="form-control input-btn input-number" value="1">
												    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                    <h4 class="m-b-15">Jumlah Kilo</h4>
													<input type="number" name="total" class="form-control input-btn input-number" value="1">
												    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h4 class="m-b-15">Bukti Transaksi</h4>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="gambar" class="custom-file-input">
                                                            <label class="custom-file-label">Masukan gambar(png,jpg,jpeg)</label>		
                                                    </div> 				
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" <a class="btn btn-primary fa fa-plus"> Add</a>

                                            </button>
                                        </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
@endsection