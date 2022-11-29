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
        <input type="hidden" name="id_warga" value="{{Request()->id_warga}}">
        <input type="hidden" name="id_transaksi" value="{{Request()->id_transaksi}}">
        <input type="hidden" name="id_satuan" value="{{Request()->id_satuan}}">
    
        <div class="row">
            <div class="col-lg-12">
                <h2 class="card-title"> Form Tambah Transaksi</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                                    </div>
                                </div>
                            <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
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
                    <div class="col-xl-9 col-lg-8">
                        <div class="product-detail-content">
                            <!--Product details-->
                            <div class="new-arrival-content pr">                
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">Kategori Sampah</p>
                                                <select type="text" onchange="detectChange(this)" class="form-control" id="jenis_sampah" name="jenis_sampah" placeholder="Enter a username..">
                                                    @foreach($data as $item)
                                                        <option value="{{$item->id_sampah}}" data-harga="{{$item->harga}}">{{$item->jenis_sampah}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">Berat Sampah</p>
                                            <input type="number"  id="text_berat" name="total"  onchange="hitungTotal(this)" class="form-control input-btn input-number" value="1">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Harga</p>
                                            <input class="form-control" id="text_harga" type="text" name="harga" value="" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Total</h4>
                                            <input name="text" id="text_total" class="form-control"  name="total_jumlah" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5">
                              <h4 class="card-title">Bukti Transaksi</h4>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input">
                                        <label class="custom-file-label">Masukan gambar(png,jpg,jpeg)</label>		
                                    </div> 				
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" <a class="btn btn-primary fa fa-plus"> Add</a></button>
                            </div>  
                    </div>
                </div>
            </div>
        </div>              
    </form>

    <script>
        function detectChange(selectOS) {
            var harga = $("#jenis_sampah").find(':selected').attr('data-harga');
            document.getElementById("text_harga").value = harga;

            var berat = document.getElementById("text_berat").value;
            var total = berat * harga ;
            document.getElementById("text_total").value = total;
        }

        function hitungTotal(selectOS){
            var berat = selectOS.value;
            var harga = $("#jenis_sampah").find(':selected').attr('data-harga');
            var total = berat * harga ;
            document.getElementById("text_total").value = total; 
        }
    </script>
@endsection