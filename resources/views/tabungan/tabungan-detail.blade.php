@extends('master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                  <form class="form-valide" action="#" method="post">
                    <div class="row">
                        <div class="card-header">
                            <h4 class="card-title">Detail Dana Tarik</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table data-tables">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Warga</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Tanggal Tarik</th> 
                                    <th scope="col">Jumlah Tarik</th> 
                                    <th scope="col">Sisa Tabungan</th>
                                    <th scope="col">QR Code</th> 
                                    <th scope="col">Aksi</th> 
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $no => $item)
                                    <tr>
                                        <th scope="row">{{ $no+1}}</th>
                                        <td>{{$item->nama_warga}}</td>
                                        <td>{{$item->nik}}</td>
                                        <td>-</td> 
                                        <td>-</td> 
                                        <td>-</td> 
                                        <td>-</td> 
                                        <td>
                                            <a href="{{ route('detail-tarik')}}" class="btn btn-success sharp mr-6"><i class='fa fa-print'> invoice</i></a> 
                                            <a href="{{ route('invoice')}}"class="btn btn-primary sharp mr-6"><i class='fa fa-invoice'></i></a>   
                                        </td> 
                                     </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </form>
</div>

@endsection