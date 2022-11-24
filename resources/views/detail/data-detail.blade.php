@extends('master')
@section('content')

@include('sweetalert::alert')
<div class="container-fluid">
</div>

</div>
     <div class="row">
         <div class="col-12">
             <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Detail Transaksi</h4>
                </div>
                    <div class="card-body table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Warga</th>
                          <th scope="col">TGL</th>
                           <th scope="col">Jenis Sampah</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Jumlah Kg</th>
                            <th scope="col">Harga/kg</th>
                            <th scope="col">Total Jumlah</th>
                            <th scope="col">Bukti Transaksi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                            @foreach($dtdetail as $no =>$item)
                        <tr> 
                        <th scope="row">{{ $no+1}}</th>
                            <td>{{$item->nama_warga}}</td>
                            <td>{{$item->tgltransaksi}}</td>
                            <td>{{$item->jenis_sampah}}</td>
                            <td>{{$item->satuan}}</td>
                            <td>{{$item->total}}</td>
                            <td>{{$item->harga}}</td>
                            <td>-</td>
                            <td><img width=100 height= 100 src="{{asset('gambardetail/')}}/{{$item->gambar}}"/></td>
                            <td>
                            <a href="{{ url('delete-detail',$item->id_detail)}}" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                      </table>
                    </div>
            </div>
          </div>
      </div>

     

@endsection