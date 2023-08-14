@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
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
<form action="{{route('createdetaill') }}" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="hidden" name="id_warga" value="{{Request()->id_petugas}}">
    @csrf
    <div class="card">
        <div class="card-header">
        <div class="col-12">
             <div class="card">
                 <div class="card-header">
                    <h4 class="card-title">Tambah Jadwal jemput</h4>
                 </div>
                <div class="card-body"class="btn btn-warning">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>Nama Bank Sampah</label>
                                        <select type="text" class="form-control" id="id_cabang" name="id_cabang" placeholder="Enter a username..">
                                            <option value="">-Pilih-</option>
                                            @foreach($kantorcabang as $item)
                                            <option value="{{$item->id_cabang}}">{{$item->nama_bs}}</option>
                                        @endforeach
                                        </select>
                                    </div> 
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>Hari</label>
                                        <select type="text" class="form-control" name="hari" placeholder="Enter a username..">
                                            <option value="">-Pilih-</option>
                                            <option value="">Senin</option>
                                            <option value="">Selasa</option>
                                            <option value="">Rabu</option>
                                            <option value="">Kamis</option>
                                            <option value="">Jum'at</option>
                                        </select>
                                    </div>                                
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <p class="mb-1">Jam Jemput</p>
                                        <select type="text" class="form-control" name="jamjemput" placeholder="Enter a username..">
                                            <option value="">-Pilih-</option>
                                            <option value="">08:00-11:00</option>
                                            <option value="">13:00-16:00</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <p class="mb-1">Berlaku Mulai Tanggal </p>
                                        <input type="date" class="form-control form-control-user" name="tanggal" aria-describedby="inputTanggal" 
                                        value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                    <br>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                     <button type="submit" class="btn btn-warning">Tambah Jadwal</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="pull-left">
                        <a href="{{ route('petugasjemput.index') }}" class="btn">Kembali</a>
                    </div> --}}
                </div>
                
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="$id_detail" method="post">
                            @csrf
                            <div class="row">
                                <div class="card-header">
                                    <h4 class="card-title">Jadwal Jemput</h4>
                                </div>
                                    <div class="card-body table-responsive">
                                    <table class="table data-tables">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Petugas</th>
                                        <th scope="col">Lokasi Jemput</th>
                                        <th scope="col">Alamat Jemput</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Tanggal Berlaku</th>
                                        <th scope="col">Aksi</th>
                                       
                                    </tr>
                                    </thead>
                                    {{-- <tbody>
                                    @foreach($data as $no => $item)
                                        <tr>
                                            <th scope="row">{{ $no+1}}</th>
                                            <td>{{$item->nama_warga}}</td>
                                            <td>{{$item->nik}}</td>
                                            <td>{{ $detail }}</td>
                                            <td>
                                                <a href="{{route('tabungan.create')}}" class="btn btn-danger sharp mr-6"><i class='fa fa-money'></i></a> 
                                                <a href="{{ url('invoice')}}" class="btn btn-info sharp mr-6"><i class="fa fa-eye"></i></a>
                                               
                                            </td> 
                                         </tr>
                                    @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                    </form>
</div>
  
@endsection

   