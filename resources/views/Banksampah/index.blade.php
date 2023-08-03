
@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <a class="btn btn-success" href="{{route('Banksampah.create') }}"> Input Data</a>
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
                                <th scope="col">Nama Kantor Cabang </th>
                                <th scope="col">lamat Kantor Bank Sampah</th>
                                <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $item)
                      <tr>
                        <th scope="row">{{ $no+1}}</th>
                       <td>{{$item->nama_bs}}</td> 
                        <td>{{$item->alamatbs}}</td>
                        <td>{{$item->ket}}</td>
                        <td>
                            <div class="ml-auto">
                              <a href="#" class="btn btn-warning btn-xs sharp mr-1"><i class="fa fa-book"></i></a>
                              <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('delete-bank',$item->id_cabang) }}" onclick="return confirm('yakin?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                              <a href="{{route('showdata') }}" class="btn btn-success btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             
                            </div>
                         </td>
                      </tr>
                          @endforeach
                            </tbody>
                            </table>
                            <div class="pull-left">
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
                          </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>

  <div class="pull-left">
    <a href="{{ route('informasi.index') }}" class="btn">Kembali</a>
</div>
@endsection
