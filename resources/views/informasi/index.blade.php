@extends('master')
@section('content')
<!-- <div class="index" style="background-color: #191970 !important;"> -->
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
                        <h4 class="text-white">Rp.{{ $detail}}</h5>
					</div>
				</div>
		    </div>
		</div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
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
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-primary">
			<div class="card-body p-4">
				<div class="media">
					<span class="mr-3">
						<i class="flaticon-381-user-7"></i>
					</span>
				    <div class="media-body text-white text-right">
				        <p class="mb-1">Total Tarik</p>
					    <h4 class="text-white">Rp.{{$tabungan}}</h4>
				    </div>
			    </div>
	        </div>
	    </div>
    </div>
    
    <a href="index.html" class="brand-logo">
             <img src="{{asset('asset/image/bspancadaya.PNG')}}" style="center" width="1400" height="600" alt="" title="">
		</a>
    <!-- <div class="container-fluid"> -->
				<!-- <div class="row"> -->
					<div class="col-xl-12">
						<div class="widget-stat rounded pl-5 pt-5 pb-4 mt-3 position-relative mb-5">
							<h4 class="text-warning">Welcome to Website Resmi Bank Sampah</h4>
							<p>ini adalah aplikasi yang di rancang sedemikian supa semoga mempermudah dalam urusah perkuliahan dan ssoga ide website ini bisa dijadikan Tugas Akhr</p>
							<a class="btn btn-warning btn-rounded" href="{{('biodata')}}">Lanjutkan  <i class="las la-long-arrow-alt-right ml-sm-4 ml-2"></i></a>
							<a class="btn-link text-dark ml-3" href="{{('informasi')}}">Remind Me Later</a>
							<img src="images/svg/welcom-card.svg" alt="" class="position-absolute">
						</div>
					</div>
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
                                            <h4>Kertas</h4>
                                            <span>{{$tabungan}}</span>
                                            <span><p>Kerdus/koran/Buku adalah jenis kertas - kertasan yang bisa didaurulang, 
                                              kertas termasuk kedalam daftar yang bisa ditukarkan ke Bank sampah ini, harga untuk penukaran 
                                              sampah menjadi uang untuk kertas ini sudah ditentukan dalam table data sampah dibawah ini.
                                            </p></span>
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
                                                            <span> <p>Botol plastik merupakan suatu barang yang bisa didaur ulang, botol plastik 
                                                              yang masuk kriteria yang bisa dijual sudah ditentukan pada SOP penjualan barang dihalaman 
                                                              utama , harga penjualan dapat berubah - ubah sesuai pesanan dan penjualan pasar.
                                                            </p></span>
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
                                                          <h4>Botol Plastik</h4>
                                                          <span> <p>Botol plastik merupakan suatu barang yang bisa didaur ulang, botol plastik 
                                                            yang masuk kriteria yang bisa dijual sudah ditentukan pada SOP penjualan barang dihalaman 
                                                            utama , harga penjualan dapat berubah - ubah sesuai pesanan dan penjualan pasar.
                                                          </p></span>
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
                                                            <h <h4>Botol Plastik</h4>
                                                              <span> <p>Botol plastik merupakan suatu barang yang bisa didaur ulang, botol plastik 
                                                                yang masuk kriteria yang bisa dijual sudah ditentukan pada SOP penjualan barang dihalaman 
                                                                utama , harga penjualan dapat berubah - ubah sesuai pesanan dan penjualan pasar.
                                                              </p></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div> 
        <!-- <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">TATA CARA DAFTAR MENJADI ANGGOTA BANK SAMPAH</h4>
                        
                 </div>
                        <div>
                            <p>1. Pergi kekantor bank sampah terdekat</p>
                            <p>2. Siapkan Kartu Keluarga</p>
                            <p>3. Pendaftaran akan dibantu oleh admin yang bertugas</p>                  
                        </div> 
                 
                <div class="card-body">
                     <div class="table-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PROSES PENUKARAN SAMPAH MENJADI UANG </h4>
                 </div>
                        <div>
                            <p>1. Anggota membawa sampah yang akan ditukarkan</p>
                            <p>2. admin memilah sampah sesuai dengan kategori</p>
                            <p>3. selajutnya masing- masing kategori akan ditimbang secara manual</p>  
                            <p>4. admin menginputkan data kedalam website</p>  
                            <p>5. Sistem akan mengolah data yang dimasukan admin</p>  
                            <p>6. Uang yang dihasilkan dari sampah yang disetorkan akan masuk pada buku anggota</p>               
                         </div> 
                <div class="card-body">
                     <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">KATEGORI SAMPAH </h4>
                    </div>
                        <div>
                            <p>1. Botol Plastik</p>
                            <p>2. Botol Kaca</p>
                            <p>3. Kerdus Semua Ukuran</p>  
                            <p>4. Kertas</p>  
                            <p>5. Gelas Plastik</p>  
                            <p>6. Besi</p>               
                        </div> 
                    <div class="card-body">
                        <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div> -->
@endsection
