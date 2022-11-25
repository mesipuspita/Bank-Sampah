@extends('master')
@section('content')

<div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="form-validation">
                  <div class="row">
                      <div class="col-lg-12 margin-tb">
                          <div class="pull-left">
                              <h2>Tambah Data Penjual</h2>
                          </div>
                          <div class="pull-right">
                              <a class="btn btn-primary" href="{{ route('penduduk.index') }}"> Kembali</a>
                          </div>
                      </div>
                  </div>
   
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('penduduk.store') }}" method="POST">
                        @csrf
                      
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nominal</strong>
                                    <input type="text" name="jumlah_tarikan" class="form-control" placeholder="nik">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alasan</strong>
                                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="no_kk"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">cetak</button>
                            </div>
                        </div>
                      
                    </form>
                  </div>
            </div>
        </div>



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