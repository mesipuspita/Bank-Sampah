@extends('master')
@section('content')
<form action="#" method="POST">
    @csrf
    <div class="col-xl-6 col-lg-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h4 class="card-title">Cetak Laporan / Tanggal</h4>
            </div>

            <div class="card-body">
                <div class="input-group mb-3"></div>
                    <label for="label">Tanggal Awal</label>
                    <input type="date" name="tglawal" id="tglawal" class="form-control"/>
                 
                 <div class="input-group mb-3"></div>
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
                 </div>
        </div>
           </div>
           <div class="input-group mb-3">
            <a href="#" onclick="window.open('/CetakPegawaiPertanggalDetail/' + document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value, '_blank');" class="btn btn-primary col-md-12"> Cetak Laporan Pertanggal<i class="fa fa-print"></i></a>

           </div>
                {{-- <div class="basic-form">
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <strong>Mulai Tanggal</strong>
                                <input type="date" class="form-control" placeholder="Mulai Tanggal">
                            </div>

                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <strong>Sampai Tanggal</strong>
                                <input type="date" class="form-control" placeholder="Sampai Tanggal">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-warning">Tampilkan</button>
                              
                            </div>
                        </div>
                    </form>
                   
                </div> --}}
            </div>
            
        </div>
    </div>
    {{-- <form>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cetak Laporan / Tanggal</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>No</strong></th>
                                        <th><strong>Nama</strong></th>
                                        <th><strong>Jenis Transaksi</strong></th>
                                        <th><strong>Nama Barang</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th><strong>Harga</strong></th>
                                        <th><strong>Jumlah Kg</strong></th>
                                        <th><strong>total Tabungan</strong></th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>01</strong></td>
                                        <td>Mr. Bobby</td>
                                        <td>Dr. Jackson</td>
                                        <td>01 August 2020</td>
                                        <td><span class="badge light badge-success">Successful</span></td>
                                        <td>$21.56</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>02</strong></td>
                                        <td>Mr. Bobby</td>
                                        <td>Dr. Jackson</td>
                                        <td>01 August 2020</td>
                                        <td><span class="badge light badge-danger">Canceled</span></td>
                                        <td>$21.56</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>03</strong></td>
                                        <td>Mr. Bobby</td>
                                        <td>Dr. Jackson</td>
                                        <td>01 August 2020</td>
                                        <td><span class="badge light badge-warning">Pending</span></td>
                                        <td>$21.56</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </form> --}}
</form>

@endsection