@extends('master')
@section('content')
    <div class="container-fluid">
    <div class="row mb-5 align-items-center">

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
                                        <th scope="col">jumlah</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Sampah</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 
                               
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
@endsection