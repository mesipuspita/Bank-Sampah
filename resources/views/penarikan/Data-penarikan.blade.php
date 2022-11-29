@extends('master')
@section('content')


<div class="row">
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-danger">
			<div class="card-body  p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-calendar-1"></i>
					</span>
					<div class="media-body text-white text-right">
					    <p class="mb-1">Jumlah Nasabah</p>
					    <h3 class="text-white"></h3>
				    </div>
			    </div>
		    </div>
	     </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-success">
			<div class="card-body p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-diamond"></i>
					</span>
					<div class="media-body text-white text-right">
						<p class="mb-1">Total Tabungan</p>
						<h3 class="text-white"></h3>
					</div>
				</div>
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

<div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="form-validation">
   
                   
                    <form action="{{ route('penduduk.store') }}" method="POST">
                        @csrf
                      
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
                                <td>
                                    
                                </td>
                                
                                </tr>
                            
                                
                            </tbody>
                    </form>
                            </table>
                    @endsection
                           

                   