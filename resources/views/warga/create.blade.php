@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Penjual</h2>
        </div>
         <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('warga.index') }}"> Kembali</a>
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
   
<form action="{{ route('warga.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No KK </strong>
                        <input type="text" name="nokk" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK</strong>
                        <input type="text" name="nik" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Pengguna</strong>
                        <select type="text" name="statuspengguna" class="form-control" placeholder="">
                            <option value="Islam">Angota</option>
                            <option value="Kristen">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama_warga" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <select type="text" name="gender" class="form-control" placeholder="">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select> 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Lahir</strong>
                        <input type="date" class="form-control form-control-user" name="tgllahir" aria-describedby="inputTanggal" 
                        value="<?php echo date("Y-m-d"); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Telepon</strong>
                        <input type="text" name="notelepon" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Agama</strong>
                        <select type="text" name="agama" class="form-control" placeholder="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    </div>    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pendidikan</strong>
                        <select type="text" name="pendidikan" class="form-control" placeholder="">
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/sederajat">SMP/sederajat</option>
                        <option value="SMA/sederajat">SMA/sederajat</option>

                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pekerjaan</strong>
                        <select type="text" name="pekerjaan" class="form-control" placeholder="">
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat </strong>
                        <Select type="text" name="statustinggal" class="form-control" placeholder="">
                        <option value="Jambak 1">Jambak 1</option>
                        <option value="Jambak 2">Jambak 2</option>
                        <option value="Galoro">Galoro</option>
                        <option value="Lubuak Aro">Lubuak Aro</option>
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
   
</form>
@endsection