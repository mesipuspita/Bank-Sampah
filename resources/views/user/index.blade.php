@extends('master')
@section('content')
<a href="/data-akun-pdf" align="center" target="_blank"class="btn btn-primary">Cetak data Akun </a><br>

<div>
<table class="table">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="form-validation">
              <form class="form-valide" action="#" method="post">
                <div class="row">
                  <div class="card-header"
                    <h4>Data User</h4>
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
                </div>
              </div>
            </div>
         </div>
        </div>
  </table>
  @endsection