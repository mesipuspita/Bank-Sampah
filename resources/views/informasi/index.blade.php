@extends('master')
@section('content')
<!-- <div class="index" style="background-color: #191970 !important;"> -->

<div class="row">
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-warning">
			<div class="card-body  p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-calendar-1"></i>
					</span>
					<div class="media-body text-white text-right">
					    <p class="mb-1">Jumlah Nasabah</p>
					    <h4 class="text-white" style="">{{$warga }}</h4>
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
						<p class="mb-1" style="center">Total Tabungan</p>
                        <h4 class="text-white">{{formatRupiah($detail,true)}}</h5>
					</div>
				</div>
		    </div>
		</div>
    </div>
    {{-- <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-info">
            <div class="card-body p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-heart"></i>
					</span>
					<div class="media-body text-white text-right">
						<p class="mb-1">Kategori Sampah</p>
						<h4 class="text-white">{{ $Sampah }}</h4>
					</div>
				</div>
			</div>
		</div>
    </div> --}}
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-primary">
			<div class="card-body p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-user-7"></i>
					</span>
				    <div class="media-body text-white text-right">
				        <p class="mb-1">Total Tarik</p>
					    <h4 class="text-white"> {{formatRupiah($tabungan,true)}}</h4>
				    </div>
			    </div>
	        </div>
	    </div>
    </div>
    
    {{-- <a href="index.html" class="brand-logo">
             <img src="{{asset('asset/image/bspancadaya.PNG')}}" style="center" width="1400" height="600" alt="" title="">
		</a> --}}
        <div class="col-xl-12">
            <div class="welcome-card rounded pl-5 pt-5 pb-4 mt-3 position-relative mb-5">
                <h4 class="text-warning">Welcome to Website Resmi Bank Sampah</h4>
                <p>ini adalah aplikasi yang di rancang sedemikian supa semoga mempermudah dalam urusah perkuliahan dan ssoga ide website ini bisa dijadikan Tugas Akhr.</p>
                <a class="btn btn-warning btn-rounded" href="javascript:void(0);">Learn More <i class="las la-long-arrow-alt-right ml-sm-4 ml-2"></i></a>
                <a class="btn-link text-dark ml-3" href="javascript:void(0);">Remind Me Later</a>
                <img src="images/svg/welcom-card.svg" alt="" class="position-absolute">
            </div>
        </div>
       
        <div class="col-xl-12">
            <div id="user-activity" class="card">
                <div class="card-header border-0 pb-0 d-sm-flex d-block">
                    <div>
                        <h4 class="card-title mb-1">Jumlah Transaksi (table detail Transaksi)</h4>
                    </div>
                    <div class="card-action card-tabs mt-3 mt-sm-0">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-selected="true">
                                    Monthly
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
                                    Weekly
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
                                    Today
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="user" role="tabpanel"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="activityLine" class="chartjs chartjs-render-monitor" height="350" style="display: block; width: 1041px; height: 350px;" width="1041"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-xxxl-12 col-lg-6">
            <div class="card">
                <div class="card-header border-0 pb-3 d-sm-flex d-block ">
                    <h4 class="card-title">Data Jumlah Barang Yang Tersimpan(tabel sampah)</h4>
                    <div class="d-flex mt-3 mt-sm-0">
                        <div class="dropdown ">
                            <button type="button" class="btn btn-primary dropdown-toggle light btn-sm btn-rounded" data-toggle="dropdown" aria-expanded="false">
                                Weekly
                            </button>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                            </div>
                        </div>
                        <div class="dropdown ml-2">
                            <button type="button" class="btn btn-primary dropdown-toggle light btn-sm btn-rounded" data-toggle="dropdown" aria-expanded="false">
                                2020
                            </button>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                <a class="dropdown-item" href="javascript:void(0);">2018</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mx-0 align-items-center">
                        <div class="col-sm-8 col-md-7 col-xxl-7 px-0 text-center mb-3 mb-sm-0">
                            <div id="chart" class="d-inline-block"></div>
                        </div>
                        <div class="col-sm-4 col-md-5 col-xxl-5 px-0">
                            <div class="chart-deta">
                                <div class="col px-0">
                                    <span class="bg-warning"></span>	
                                    <div class="mx-3">
                                        <p class="fs-14">Kategori plastik</p>
                                        <h3>21,512</h3>
                                    </div>
                                </div>
                                <div class="col px-0">
                                    <span class="bg-primary"></span>	
                                    <div class="mx-3">
                                        <p class="fs-14">Kategori Kertas</p>
                                        <h3>456,721</h3>
                                    </div>
                                </div>
                                <div class="col px-0">
                                    <span class="bg-success"></span>	
                                    <div class="mx-3">
                                        <p class="fs-14">Kategori Alumunium</p>
                                        <h3>235</h3>
                                    </div>
                                </div>
                                <div class="col px-0">
                                    <span class="bg-red"></span>	
                                    <div class="mx-3">
                                        <p class="fs-14">Kategori Besi</p>
                                        <h3>115</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xl-6 col-xxxl-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row mx-0">
                        <div class="col-sm-12 col-lg-4 px-0">
                            <h2 class="fs-40 text-black font-w600">862,441 <small class="fs-18 ml-2 font-w600 mb-1">Rp</small></h2>
                            <p class="font-w100 fs-20 text-black"> Nama Bank Sampah yang paling banyak melakukan transaksi(tabel data bank sampah )</p>
                            <div class="justify-content-between border-0 d-flex fs-14 align-items-end">
                                <a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
                                <div class="text-right">
                                    <span class="peity-primary" data-style="width:100%;">0,2,1,4</span>
                                    <h3 class="mt-2 mb-1">+4%</h3>
                                    <span>than last day</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-8 px-0">
                            <canvas id="ticketSold" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
@endsection
