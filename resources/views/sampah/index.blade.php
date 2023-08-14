
@extends('master')
@section('content')

</div>
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <div class="form-validation">
                  <form class="form-valide" action="{{ route('transaksi.store') }}" method="post">
                      @csrf
                      <div class="row">
                          
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <a class="btn btn-success" href="{{ route('sampah.create') }}"> Input Data</a>
          <a href="/data-sampah-pdf" target="_blank"class="btn btn-primary">export PDF </a>
        
        </div>
      </div>
    </div>
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
                    <h4 class="card-title">Data Sampah</h4>
                   </div>
                    <div class="card-body table-responsive ">
                      <table class="table data-tables"> 
                        <thead>
                          <tr>
                            <th scope="col">No </th>
                            <!-- <th scope="col">Nama</th> -->
                            <th scope="col">Kategori Sampah</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                            <!-- <th scope="col">Id Satuan</th>          -->
                          </tr>
                        </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <th scope="row">{{ $no+1}}</th>
                        <!-- <td>{{$item->nama_sampah}}</td> -->
                        <td>{{$item->jenis_sampah}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{formatRupiah($item->harga,true)}}</td>
                        <td>{{$item->keterangan}}</td>
                        {{-- @if($item->status==1)
                        <td> 
                        <span class="btn btn-success btn-sm"> Yes <i class="fa fa-check"></i></span> 
                        </td>
                        @else
                        <td> 
                            <span class="btn btn-warning btn-sm"> No <i class="fa-solid fa-X"></i></span> 
                        </td>
                        @endif  --}}
                        <td>
                            <div class="ml-auto">
                              {{-- <a href="{{ route('sampah.edit',$item->id_sampah) }}" class="btn btn-warning btn-xs sharp mr-1"><i class="fa fa-book"></i></a> --}}
                              <a href="{{ route('sampah.edit',$item->id_sampah) }}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('delete-sampah',$item->id_sampah) }}" onclick="return confirm('yakin?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                              <a href="{{ route('showsampah',$item->id_sampah)}}" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             
                            </div>
                         </td>
                      </tr>
                          @endforeach
                  </table>
                  <!-- <div class="pull-left">
                        Showing
                        {{ $data->firstItem() }}
                        to
                        {{ $data->lastItem() }}
                        of
                        {{ $data->total() }}
                        entries
                    </div>
                    <div class="pull-right">
                        {{ $data->links() }}
                    </div> -->

                            </div>
                </div>
              </div>
              </div>
            </form>
          </div> 
        </div> 
  </div> 
    
  {{-- <div class="pull-left">
    <a href="{{ route('informasi.index') }}" class="btn">Kembali</a>
</div> --}}

@endsection

