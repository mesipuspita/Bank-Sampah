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
    <form action="{{ route('tabungan.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tarik Tabungan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label>Nama Warga</label>
                                    <select type="text" class="form-control" onchange="detectChange(this)" id="nama_warga" name="nama_warga" placeholder="Enter a username..">
                                            @foreach($data as $item)
                                                <option value="{{$item->id_warga}}"  data-nik="{{$item->nik}}" data-totaltabungan="{{$item->nik}}" > {{$item->nama_warga}} </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>NIK</label>
                                        <input type="text" class="form-control"  id="text_nik" name="nik" placeholder="Enter a username.." readonly>
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>Total Tabungan</label>
                                        <input class="form-control" id="text_total_tabungan"  placeholder="Rp." name="total_tabungan" readonly>
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Jumlah Tarik</label>
                                        <input type="text" class="form-control"  onchange="hitungTotal(this)" name="total_tarik" placeholder="Rp." >
                                    </div>
                                    <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header"> 
                                            <label class="card-title"><h5>Sisa Tabungan</h5></label>
                                            <input name="text" id="text_sisa" class="form-control"  name="sisa" placeholder=" Rp."readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                     <button type="submit" class="btn btn-primary"> <i class='fa fa-handshake-o'></i>Tarik</button>
                                 </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            
            </form>
            <script>
                function detectChange(selectOS)
                {
                    var nik = $("#nama_warga"). find(':selected').attr('data-nik');
                    document.getElementById("text_nik").value = nik;

                    var totaltabungan = $("#nama_warga"). find(':selected').attr('data-nik');
                    document.getElementById("text_total_tabungan").value = totaltabungan;  
                    
                    var berat = document.getElementById("text_berat").value;
                }
                function hitungTotal(selectOS){
                    var berat = selectOS.value;
                    var harga = $("#jenis_sampah").find(':selected').attr('data-harga');
                    var total = berat * harga ;
                    document.getElementById("text_total").value = total; 
                 }
                
        
            </script>
            
        </div>
    </div>
@endsection