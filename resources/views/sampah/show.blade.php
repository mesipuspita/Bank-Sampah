@extends('master')
@section('content')

<div class="col-xl-6">
  <div class="card mb-3">
      <img class="card-img-top img-fluid" src="{{asset('asset/image/pp.png')}}" alt="Card image cap">
      <div class="card-header">
          <h5 class="card-title">Card title</h5>
      </div>
      <div class="card-body">
        <div class="new-arrival-content text-left mt-8">
          <h4>{{ $data->id_sampah}}</h4>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama</strong>
                  {{ $data->nama_sampah}}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>jenis Sampah</strong>
                  {{ $data->jenis_sampah }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Harga Sampah</strong>
                  {{ $data->harga}}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Keterangan</strong>
                  {{ $data->keterangan}}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Satuan Sampah/Kg</strong>
                  {{ $data->id_satuan}}
              </div>
          </div>
          <span><p>Kerdus/koran/Buku adalah jenis kertas - kertasan yang bisa didaurulang, 
            kertas termasuk kedalam daftar yang bisa ditukarkan ke Bank sampah ini, harga untuk penukaran 
            sampah menjadi uang untuk kertas ini sudah ditentukan dalam table data sampah dibawah ini.
          </p></span>
        </div>
        </div>
      </div>
 </div>
</div>
     

<div class="pull-left">
<a href="{{ route('informasi.index') }}" class="btn">Kembali</a>
</div>
@endsection