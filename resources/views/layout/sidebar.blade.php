<!--**********************************
            Sidebar start
        ***********************************-->
        <!-- role admin -->
        @if(auth()->user()->roleid == 1)
        <div class="deznav" style="background-color: #191970 !important;">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">

                    <li> <a href="{{url('informasi')}}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
					</a>
                    </li>
                    <li><a href="{{ url('warga')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Kelola Data Warga</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Kelola Data Sampah</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('sampah')}}">Kategori Sampah</a></li>
                        </ul>
						<ul aria-expanded="false">
                            <li><a href="{{url('Banksampah')}}">Data Bank Sampah</a></li>
                        </ul>
						
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ url('petugasjemput')}}" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Petugas Jemput</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('petugasjemput')}}">Jadwal Petugas Jemput</a></li>
                        </ul>
                    </li>

                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Transaksi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ url('transaksi')}}">Transaksi Stor</a></li>
						</ul>
                        <ul aria-expanded="false">
							<li><a href="{{ url('tabungan')}}">Transaksi Tarik</a></li>
						</ul>
						
                    </li>
                    
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Laporan</span>
						</a>
                        {{-- <ul aria-expanded="false">
							<li><a href="{{ url('cetak-detail')}}">Laporan Bulanan</a></li>
						</ul> --}}
                        <ul aria-expanded="false">
							<li><a href="{{ url('/data-warga-pdf')}}" target="_blank" >Laporan Data Warga</a></li>
						</ul>
						{{-- <ul aria-expanded="false">
							<li><a href="{{ url('cetak-transaksi')}}">Laporan transaksi/Tanggal</a></li>
						</ul> --}}
                        <ul aria-expanded="false">
							<li><a href="{{ url('/data-sampah-pdf')}}" target="_blank" >Laporan Data Sampah</a></li>
						</ul>
                       
						<ul aria-expanded="false">
							<li><a href="{{ url('cetak-detail')}}" target="_blank">Laporan Detail Transaksi</a></li>
						</ul>
						<ul aria-expanded="false">
							<li><a href="{{ url('cetak-laporantransaksi')}}">Laporan Transaksi</a></li>
						</ul>
						<ul aria-expanded="false">
							<li><a href="/data-akun-pdf" target="_blank">Laporan Data User</a></li>
						</ul>
						
					</li>

                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Data Login</span>
						</a>
                        <ul aria-expanded="false">
                                    <li><a href="{{ url('user')}}">User</a></li>
                                </ul>
				</li>
                    </li>
					{{-- <div <a href="#" class="d-block">{{auth()->user()->name }}</a> </div> --}}
					{{-- </li>

                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">QR CODE</span>
						</a>
                        <ul aria-expanded="false">
                                    <li><a href="{{ url('user')}}">Kategori Sampah</a></li>
                                </ul>
                        </li>
                    </li> --}}
					
                </ul>
				<div class="copyright">
                <center><p>BANK SAMPAH<br/>PANCADAYA KOTA PADANG </p></center>
				<center><p class="op5"> I <span class="heart"></span> Padang</p></center>
				</div>
			</div>
        </div>

        <!-- role user -->
        @else
        <div class="deznav" style="background-color: #191970 !important;">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{{url('informasi')}}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Kelola Data Sampah</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('sampah')}}">Kategori Sampah</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Transaksi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ url('usertransaksi')}}">Transaksi Stor</a></li>
						</ul>
                    </li>	
                    <li><a href="{{ url('tabungan')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Tabungan</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ url('data_detail')}}">Detail Transaksi</a></li>
						</ul>
					</li>

                   
                </ul>
				<div class="copyright">
                <center><p>BANKSAM<br/>Desa Tandikat Kecamatan Patamuan</p></center>
					<p class="op5">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
            
        </div>

        @endif
        <!--**********************************
            Sidebar end
        ***********************************-->