@extends('master')
@section('content')
 
        <div class="row mb-5 align-items-center">
            <div class="col-xl-3 mb-4 mb-xl-0">
                <a href="{{ route('transaksi.create') }}" class="btn btn-success light btn-lg btn-block rounded shadow px-2">+Add</a>
            </div>
   
</div>
          
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @include('sweetalert::alert')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ route('transaksi.store') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="card-header">
                                                <h4 class="card-title">Data Transaksi</h4>
                                            </div>
                                                <div class="card-body table-responsive">
                                                <table class="table data-tables">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Warga</th>
                                                    <th scope="col">Total Tabungan</th>
                                                    <th scope="col">Status</th> 
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $key => $item)
                                                <tr>
                                                <td>{{$data->firstItem() + $key }}</td>
                                                    <td>{{$item->nama_warga}}</td>
                                                    <td>Rp</td>
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
                                                    <a href="{{ route('transaksi.edit',$item->id_transaksi) }}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('createdata',[$item->id_warga, $item->id_transaksi])}}" class="btn btn-info btn-xs sharp mr-1"><i class="fa fa-plus"></i></a>
                                                    <a href="{{ route('indexdata',[$item->id_warga, $item->id_transaksi])}}" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ route('invoicetransaksi',[$item->id_warga, $item->id_transaksi])}}" class="btn btn-warning btn-xs sharp mr-1"><i class="fa fa-file" style='color: white'></i></a> 

                                                    {{-- <a href="{{ url('create-detail',[$item->id_warga, $item->id_transaksi])}}"class="btn btn-info btn-xs sharp mr-1"><i class="fa fa-plus"></i></a>
                                                    <a href="{{ route('data-detail',[$item->id_warga, $item->id_transaksi])}}" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a> --}}
                                                    <a href="{{ url('delete-transaksi',$item->id_transaksi) }}"onclick="return confirm('yakin?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    
                                                    
                                                    
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                               
                            </div>
                    </form>
      </div>
      
@endsection
