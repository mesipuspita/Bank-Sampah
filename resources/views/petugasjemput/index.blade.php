@extends('master')
@section('content')  
                      <div class="row">
                        <div class="container-fluid">
                          <div class="row mb-3 align-items-left">
                            <div class="col-xl-3 mb-4 mb-xl-0">
                              <a href="{{ route('petugasjemput.create')}}" <i class="btn btn-primary light btn-lg btn-block rounded shadow px-2" class="fa fa-print" aria-hidden="true"></i>+Petugas Jemput</a>
                            </div>
                            {{-- <a href="/data-sampah-pdf" target="_blank"class="btn btn-primary">export PDF </a> --}}
                      <div class="row">
                            </div>
                          </div>
                        </div>
                        <div class="card-header">
                          <h4 class="card-title">Data Jemput</h4>
                         </div>
                          <div class="card-body table-responsive ">
                            <table class="table data-tables"> 
                              <thead>
                                <tr>
                                  <th scope="col">No </th>
                                  <th scope="col">Nama Petugas Jemput</th>
                                  <th scope="col">Nomor Telefon/WA</th>
                                  <th scope="col">Alamat Petugas</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                          <tbody>
                            @foreach($data as $no => $item)
                              <tr>
                                <th scope="row">{{ $no+1}}</th>
                                <td>{{$item->nama_petugas}}</td>
                                <td>{{$item->nohp}}</td>
                                <td>{{$item->alamat_petugas}}</td>
                              <td>
                                <div class="ml-auto">
                                  <a href="#" class="btn btn-warning btn-xs sharp mr-1"><i class="fa fa-book"></i></a>
                                  <a href="{{ route('createdetail',$item->id_petugas)}}" class="btn btn-info btn-xs sharp mr-1"><i class="fa fa-plus"></i></a>
                                  <a href="{{ route('edit',$item->id_petugas)}}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                  <a href="{{ url('delete-sampah',$item->id_petugas) }}" onclick="return confirm('yakin?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                  <a href={{ route('show',$item->id_petugas)}}"  class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                 
                                </div>
                             </td>
                          </tr>
                      @endforeach
                      </div>
                    </div>
                    </div>
                  </form>
                </div> 
              </div> 
        </div> 
          
        <div class="pull-left">
          <a href="{{ route('informasi.index') }}" class="btn">Kembali</a>
      </div>
      @endsection