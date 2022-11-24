@extends('master')
@section('content')
<div class="container-fluid">
  <div class="row mb-5 align-items-center">
		<div class="col-xl-3 mb-4 mb-xl-0">
			<a href="{{ route('pengajuanharga.create') }}" class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Pengajuan</a>
    </div>
     <!-- <div class="col-md-7 text-md-right">
        <a href="{{('/pengajuanharga.show') }}" class="btn btn-secondary rounded ml-2 btn-sm px-4">Show</a>
        <a href="{{('/pengajuanharga.delete') }}"class="btn btn-danger rounded ml-2 btn-sm px-4">Delete</a>
			</div> -->
   
  </div>
     <div class="row">
         <div class="col-12">
             <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Table Kelola Data Penajuan perubahan Harga Sampah test</h4>
                </div>
                    <div class="card-body table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jenis Sampah</th>
                            <th scope="col">Tanggal Pengajuan</th>
                            <th scope="col">Jumlah Pengajuan</th>
                            <th scope="col">Status Pengajuan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $no => $item)
                          <tr>
                            <th scope="row">{{ $no+1}}</th>
                            <td>{{$item->id_sampah}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis_sampah}}</td>
                            <td>{{$item->tanggal_pengajuan}}</td>
                            <td>{{$item->jumlah_pengajuan}}</td>
                            <td>{{$item->status_pengajuan}}</td>

                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
            </div>
          </div>
      </div>
  @endsection