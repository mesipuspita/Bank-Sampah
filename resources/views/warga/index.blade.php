@extends('master')
@section('content')

<div class="container-fluid">
  <div class="row mb-5 align-items-center">
		<div class="col-xl-3 mb-4 mb-xl-0">
			<a href="{{ route('warga.create')}}" class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Anggota </a>
     </div>
     <!-- <div class="col-xl-3 mb-4 mb-xl-0">
			<a href="{{ url('cetak-warga')}}" target="_blank" class="btn btn-success light btn-lg btn-block rounded shadow px-2">+Print </a>
     </div> -->
  </div>
     <div class="row">
         <div class="col-12">
             <div class="card" >
                <div class="card-header">
                  <h4 class="card-title">Table Kelola Data Anggota</h4>
                </div>
                    <div class="card-body table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th scope="col">No</th>
                            <th scope="col">No KK</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">NO Telepon</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Alamat</th>  
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $no => $item)
                          <tr>
                            <th scope="row">{{ $no+1}}</th>
                            <td>{{$item->nokk}}</td>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama_warga}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->tgllahir}}</td>
                            <td>{{$item->notelepon}}</td>
                            <td>{{$item->agama}}</td>
                            <td>{{$item->pendidikan}}</td>
                            <td>{{$item->pekerjaan}}</td>
                            <td>{{$item->statustinggal}}</td>
                           
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
            </div>
          </div>
      </div>
  @endsection