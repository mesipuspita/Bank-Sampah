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

<form action="{{ route('transaksi.store') }}" method="POST">
@csrf
<div class="row">
     <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
                 <h4 class="card-title">Tambah Data Penjualan</h4>
             </div>
         <div class="card-body">
         <div class="form-validation">
            <form class="form-valide" action="#" method="post">
                 <div class="row">
                     <div class="col-xl-6">
                         <div class="form-group row">
                             <label class="col-lg-4 col-form-label" for="val-username">Nama Warga
                                <span class="text-danger">*</span>
                            </label>
                        <div class="col-lg-6">
                            <select type="text" class="form-control" id="nama_warga" name="nama_warga" placeholder="Enter a username..">
                            @foreach($data as $item)
                                <option value="{{$item->id_warga}}">{{$item->nama_warga}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                 </div>
                <div class="col-xl-6">            
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-website">Tanggal Transaksi
                             <span class="text-danger">*</span>
                        </label>
                    <div class="col-lg-6">
                       <input type="date" class="form-control form-control-user" name="tgltransaksi" aria-describedby="inputTanggal" 
                           value="<?php echo date("Y-m-d"); ?>">
                    </div>
                 </div>
                                            
                 </div>
              <div class="pull-center">
              <div class="col-lg-8 ml-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 </div>
             </div>
            </form>
         </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
   
@endsection