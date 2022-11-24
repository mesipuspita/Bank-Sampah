@extends('master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h4>Data Penduduk</h4></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create-penarikan') }}"> Input Data</a>
            </div>
        </div>
    </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Warga</th>
      <th scope="col">NIK</th>
      <th scope="col">Jumlah Tabungan</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
 
    <tr>
      <th>-</th>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    
    </tr>
   
    
  </tbody>
</table>
@endsection