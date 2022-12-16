@extends('master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card" >
           <div class="card-header">
             <h4 class="card-title">Table Kelola Data Anggota</h4>
           </div>
               <div class="card-body table-responsive">
                 <table class="table data-tables">
                   <thead>
                     <tr>
                     <th scope="col">No</th>
                       <th scope="col">No KK</th>
                       <th scope="col">NIK</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Gender</th>
                       <th scope="col">Tanggal Lahir</th>
                       <th scope="col">NO Telepon</th>
                       <th scope="col">Agama</th>
                       <th scope="col">Pendidikan</th>
                       <th scope="col">Pekerjaan</th>
                       <th scope="col">Alamat</th>  
                       <th scope="col">Kartu</th> 
                     </tr>
                   </thead>
                   <tbody>
                     
                   </tbody>
                 </table>
               </div>
       </div>
     </div>
 </div>
@endsection
