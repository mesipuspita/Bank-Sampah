@extends('master')
@section('content')
<div class="container-fluid">
  <div class="row mb-5 align-items-center">
		<div class="col-xl-3 mb-4 mb-xl-0">
			<a href="{{ route('transaksi.create') }}" class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Tambah</a>
		</div>
  </div>
  <br>        
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  <div class="row">
    <div class="col-12">
         <div class="card">
             <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="#" method="post">
                        <div class="row">
                             <div class="card-header">
                                 <h4 class="card-title">Data Transaksi</h4>
                             </div>
                                <div class="card-body table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">id</th>
                                        <th scope="col">Nama </th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $item)
                                    <tr>
                                        <th scope="row">{{ $no+1}}</th>
                                        <td>{{$item->id_transaksi}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->tgltransaksi}}</td>

                                         @if($item->status==1)
                                            <td> 
                                            <span class="btn btn-success btn-sm"> Yes </span> 
                                            </td>
                                        @else
                                        <td> 
                                            <span class="btn btn-warning btn-sm"> No </span> 
                                        </td>
                                        @endif

                                        <td>
                                            <a class="btn btn-primary" href="{{ route('transaksi.edit',$item->id_transaksi) }}">Edit</a>
                                                @csrf
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                                </div>
                    </form>
      </div>
  @endsection
        


     