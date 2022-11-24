
@extends('master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h4>Data warga</h4></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jual.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Warga</th>
      <th scope="col">No KK</th>
      <th scope="col">NIK</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $no => $item)
    <tr>
      <th scope="row">{{ $no+1}}</th>
      <td>{{$item->beratsampah}}</td>
      <td>{{$item->jumlah}}</td>
      <td>-</td>
      <td>
       <a class="btn btn-info" href="{{ route('jual.show',$item->idjual) }}">Tampil</a>
        <a class="btn btn-primary" href="{{ route('jual.edit',$item->idjual) }}">Edit</a>
        <form action="{{ route('jual.destroy',$item->idjual) }}" method="POST">   
            @csrf
            @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
        @endforeach
 </table>    
 
@endsection
