@extends('master')
@section('content')
<h4>Data User</h4>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $no => $item)
    <tr>
      <th scope="row">{{ $no+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection