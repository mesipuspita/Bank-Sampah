
@extends('master')
@section('content')
  <div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">

          <div class="card">
            <div class="card-body">
              <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                      <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                    </div>
                      <div class="new-arrival-content text-center mt-3">
                        <h4>Kerdus/Kertas/Buku</h4>
                        <span class="price">$761.00</span>
                      </div>
                      </div>
                    </div>
               </div>
            </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{asset('asset/image/Botol Palastik.jpg')}}"alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Botol Plastik</h4>
                                        
                                        <span class="price">$159.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Besi</h4>
                                        <span class="price">$357.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{asset('asset/image/Besi.jpg')}}" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Botol Kaca</h4>
                                        <span class="price"><select name="harga" id="id"></select></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
                    
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <a class="btn btn-success" href="{{ route('sampah.create') }}"> Input Data</a>
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
                    <div class="card-body table-responsive">
                      <table class="table"> 
                        <thead>
                          <tr>
                            <th scope="col">No </th>
                            <!-- <th scope="col">Nama</th> -->
                            <th scope="col">Kategori Sampah</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            <!-- <th scope="col">Id Satuan</th>          -->
                          </tr>
                        </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <th scope="row">{{ $no+1}}</th>
                        <!-- <td>{{$item->nama_sampah}}</td> -->
                        <td>{{$item->jenis_sampah}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->keterangan}}</td>
                        <td>
                        <div class="ml-auto">
                              <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-check "></i></a>
                             
                            </div>
                        </td>
                        <td>
                            <div class="ml-auto">
                              <a href="{{ route('sampah.edit',$item->id_sampah) }}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('delete-sampah',$item->id_sampah) }}" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                         </td>
                      </tr>
                          @endforeach
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
              </div>
              </div>
            </form>
          </div> 
        </div> 
  </div> 
    
@endsection
