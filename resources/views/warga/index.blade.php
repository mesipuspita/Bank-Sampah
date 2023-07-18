@extends('master')
@section('content')

<div class="container-fluid">
  <div class="row mb-3 align-items-left">
		<div class="col-xl-3 mb-4 mb-xl-0">
			<a href="{{ route('warga.create')}}" <i class="btn btn-primary light btn-lg btn-block rounded shadow px-2" class="fa fa-print" aria-hidden="true"></i>+Anggota </a>
    </div>
    
  {{-- <div class="col-auto">
    <a href="/data-warga-pdf" target="_blank"class="btn btn-primary">export PDF </a>
  </div> --}}
</div>


     <div class="row">
         <div class="col-12">
             <div class="card" >
                <div class="card-header">
                  <h4 class="card-title">Table Kelola Data Anggota</h4>
                </div>
                    <div class="card-body table-responsive">
                      <table class="table data-tables">
                        <thead>
                          <tr>
                          <th scope="col">No</th>
                            {{-- <th scope="col">No KK</th> --}}
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">NO Telepon</th>
                            {{-- <th scope="col">Agama</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Alamat</th>   --}}
                            <th scope="col">Kartu</th> 
                            <th scope="col">Aksi</th> 
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $no => $item)
                          <tr>
                            <th scope="row">{{ $no+1}}</th>
                            {{-- <td>{{$item->nokk}}</td> --}}
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama_warga}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->tgllahir}}</td>
                            <td>{{$item->notelepon}}</td>
                            {{-- <td>{{$item->agama}}</td>
                            <td>{{$item->pendidikan}}</td>
                            <td>{{$item->pekerjaan}}</td>
                            <td>{{$item->statustinggal}}</td> --}}
                            <td>
                            <a href="{{ route('card-warga')}}"><i class="btn btn-danger fa fa-id-card" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <div class="ml-auto">
                                <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                <a href="{{ url('delete-warga',$item->id_warga) }}" onclick="return confirm('yakin?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a> 
                                <a href="#" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                <a href="{{route('tampilan-warga')}}" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
   
                              </div>
                           </td>
                           
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
            </div>
          </div>
      </div>
      <div class="pull-left">
        <a href="{{ route('informasi.index') }}" >Kembali</a>
    </div>
  @endsection