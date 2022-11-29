@extends('master')
@section('content')

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
    <form action="{{ route('tabungan.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tarik Tabungan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label>Nama Warga</label>
                                    <select type="text" class="form-control" id="nama_warga" name="nama_warga" placeholder="Enter a username..">
                                            @foreach($data as $item)
                                                <option value="{{$item->id_warga}}">{{$item->nama_warga}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>NIK</label>
                                        <select type="text" class="form-control" id="nik" name="nik" placeholder="Enter a username..">
                                            @foreach($data as $item)
                                                <option value="{{$item->id_warga}}">{{$item->nik}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label>Total Tabungan</label>
                                        <input class="form-control" id="timepicker" placeholder="" name="total_jumlah">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Jumlah Tarik</label>
                                        <input type="text" class="form-control"  name="total_jumlah" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                     <button type="submit" class="btn btn-primary"> <i class='fa fa-handshake-o'></i>Tarik</button>
                                 </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            
            </form>
        </div>
    </div>
@endsection