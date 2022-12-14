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
                    </li>
                    <!-- <li><a class="has-arrow ai-icon" href="{{url('pengajuanharga')}}" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Perubahan Harga Sampah</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{('pengajuanharga')}}">Kelola Harga</a></li>
                        </ul>
                    </li> -->
                    
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
                        <ul aria-expanded="false">
							<li><a href="{{ url('cetak-detail')}}">Laporan Bulanan</a></li>
						</ul>
                        <ul aria-expanded="false">
							<li><a href="{{ route('cetak-warga')}}" target="_blank" > Cetak Data Warga</a></li>
						</ul>
						<ul aria-expanded="false">
							<li><a href="{{ url('cetak-transaksi')}}">Cetak transaksi/Tanggal</a></li>
						</ul>
                        <ul aria-expanded="false">
							<li><a href="{{ url('laporan')}}">Cetak Data Sampah</a></li>
						</ul>
                       
						<ul aria-expanded="false">
							<li><a href="{{ url('cetak-detail')}}" target="_blank">Cetak Detail</a></li>
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
                </ul>
				<div class="copyright">
                <center><p>BANKSAM<br/>Desa Tandikat Kecamatan Patamuan</p></center>
					<p class="op5">Made with <span class="heart"></span> by DexignZone</p>
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
							<li><a href="{{ url('transaksi')}}">Transaksi Stor</a></li>
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