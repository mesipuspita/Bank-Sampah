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
                        <h4 class="card-title">ANALISA APRIORI</h4>
                    </div>
                    </div>
                </div>
            </div>

            @csrf
    <div class="row">
        <div class="col-lg-12">
             <div class="card">
                <div class="card-body">
                    <div class="col-xl-9 col-lg-8">
                        <div class="product-detail-content">
                            <!--Product details-->
                            <div class="new-arrival-content pr">  
                                <div class="card">              
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <label for="label">Dari Tanggal </label>
                                        <input type="date" name="tglawal" id="tglawal" class="form-control"/>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <label for="label">Sampai Tanggal </label>
                                        <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
                                    </div>

                                    <div class="col-xl-4 mb-3">
                                        <a href="" onclick="this.href='/cetaktransaksitanggal/'+document.getElementById('tglawal').value +
                                        '/'+ document.getElementById('tglakhir').value" 
                                         class="btn btn-primary col-md-10"> 
                                        Cari Data</i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            
                        </div>


                        <div class="product-detail-content">
                            <!--Product details-->
                            <div class="new-arrival-content pr">  
                                <div class="card">              
                                <div class="row">
                                    <div class="col-xl-4 mb-4">
                                        <label for="label">Min Support</label>
                                        <input type="text" name="tglawal" id="tglawal" class="form-control"/>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <label for="label">Min Confidance</label>
                                        <input type="text" name="tglakhir" id="tglakhir" class="form-control"/>
                                    </div>

                                    <div class="col-xl-4 mb-3">
                                        <a href="" onclick="this.href='/cetaktransaksitanggal/'+document.getElementById('tglawal').value +
                                        '/'+ document.getElementById('tglakhir').value" 
                                         class="btn btn-primary col-md-10"> 
                                        Analisa</i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            
                        </div>
                </div>
         </div>

         <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table id="example5" class="table display mb-4 table-responsive-xl dataTablesCard fs-14">
                  <thead>
                    <tr>
                      <th>
                        <div class="checkbox mr-0 align-self-center">
                          <div class="custom-control custom-checkbox checkbox-info">
                            <input type="checkbox" class="custom-control-input"  id="checkAll" required="">
                            <label class="custom-control-label" for="checkAll"></label>
                          </div>
                        </div>
                         <tr>
                            <th scope="col">NO</th>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">Item Transaksi</th>
                              </tr>
                              @foreach($dataanalisa as $no =>$item)
                        <tr> 
                        <th scope="row">{{ $no+1}}</th>
                            <td>{{$item->nama_warga}}</td>
                            <td>{{$item->jenis_sampah}}</td>
                           
                        </tr>
                        @endforeach

                      </table>
    </div>
        </div>
    </div>




@endsection