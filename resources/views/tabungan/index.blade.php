@extends('master')
@section('content')

<div class="row">
    {{-- <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-danger">
			<div class="card-body  p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-calendar-1"></i>
					</span>
					<div class="media-body text-white text-right">
					    <p class="mb-1">Jumlah Tabungan</p>
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
						<p class="mb-1">Total Dana Tarik</p>
						<h3 class="text-white"></h3>
					</div>
				</div>
		    </div>
		</div>
    </div> --}}
    <br>        
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="$id_detail" method="post">
                            @csrf
                            <div class="row">
                                <div class="card-header">
                                    <h4 class="card-title">Data Transaksi</h4>
                                </div>
                                    <div class="card-body table-responsive">
                                    <table class="table data-tables">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Warga</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Jumlah Tabungan</th>
                                        <th scope="col">Aksi</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $item)
                                        <tr>
                                            <th scope="row">{{ $no+1}}</th>
                                            <td>{{$item->nama_warga}}</td>
                                            <td>{{$item->nik}}</td>
                                            <td>{{formatRupiah($detail,true)}}</td>
                                            <td>
                                                <a href="{{route('tabungan.create')}}" class="btn btn-danger sharp mr-6"><i class='fa fa-money'></i></a> 
                                                <a href="{{ url('invoice')}}" class="btn btn-info sharp mr-6"><i class="fa fa-eye"></i></a>
                                               
                                            </td> 
                                         </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </form>
</div>

@endsection