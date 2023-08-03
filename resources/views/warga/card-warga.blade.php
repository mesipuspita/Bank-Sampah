@extends('master')
@section('content')

  <div class="container-fluid">
      <div class="row">
          <div class="col-xl-6">
            <div class="card text-white bg-success">
                <div class="card-header">
                    <h5 class="card-title text-white" style="center">Kartu Kartu Tanda Bank sampah</h5>
                </div>
                <div class="card-body mb-0">
                    <p class="card-text">Nama : </p>
                    <p class="card-text">NIK : </p>
                    <img src="{{asset('asset/image/LogoT.png') }}" style="left" width="200" height="200" alt="" title="">
                    
                </div>
                
            </div>
          </div>

          <div class="col-xl-6">
            <div class="card text-white bg-success">
                <div class="card-header">
                    <h5 class="card-title text-white">Tata cara penukaran sampah</h5>
                </div>
                <div class="card-body mb-0">
                    <p class="card-text">Berikut adalah tata cara yang harus dipenuhi sebgai anggota bank sampah</p>
                    <p class="card-text">1.</p>
                    <p class="card-text">2.</p>
                    <a href="javascript:void()" class="btn btn-warning light btn-card">Go
                        somewhere</a>
                </div>
                <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
                </div>
            </div>
          </div>
          
      </div>
    </div>
</div>



{{-- 
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
                       <th scope="col">Nama</th>
                       <th scope="col">NIk</th>
                       <th scope="col">QRCODE</th>
                     </tr>
                   </thead>
                   <tbody>
                    <tr> 
                        <td>-</td>
                        <td>-</td>
                        <td>-</td> 
                        <td>-</td> 
                     </tr>
                   </tbody>
                 </table>
               </div>
       </div>
     </div>
 </div> --}}
@endsection
