@extends('master')
@section('content')
    <div class="row">
    <div class="card-header">
                    <h4 class="card-title">Data Sampah</h4>
                   </div>
                    <div class="card-body table-responsive">
                      <table class="table"> 
                        <thead>
                          <tr>
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
                      
                      <tr>
                        
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                        <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             
                            </div>
                        </td>
                        <td>
                            <div class="ml-auto">
                              <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                              <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                         </td>
                      </tr>
                  </table>
    </div>
@endsection