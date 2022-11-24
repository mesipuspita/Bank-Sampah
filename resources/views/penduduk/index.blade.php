@extends('master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h4>Data Penduduk</h4></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('penduduk.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIK</th>
      <th scope="col">No KK</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Gender</th>
      <th scope="col">alamat</th>
      <th scope="col">Rt</th>
      <th scope="col">Rw</th>
      <th scope="col">kelurahan</th>
      <th scope="col">kecamatan</th>
      <th scope="col">Kota</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Agama</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $no => $item)
    <tr>
      <th scope="row">{{ $no+1}}</th>
      <td>{{$item->nik}}</td>
      <td>{{$item->no_kk}}</td>
      <td>{{$item->nama}}</td>
      <td>{{$item->tempatLahir}}</td>
      <td>{{$item->tglLahir}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->alamat}}</td>
      <td>{{$item->rt}}</td>
      <td>{{$item->rw}}</td>
      <td>{{$item->kelurahan}}</td>
      <td>{{$item->kecamatan}}</td>
      <td>{{$item->kota}}</td>
      <td>{{$item->provinsi}}</td>
      <td>{{$item->agama}}</td>
      <td>-</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection