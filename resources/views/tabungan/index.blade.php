@extends('master')
@section('content')
    <div class="row">
        <!-- <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <a class="btn btn-success" href="{{ route('tabungan.create') }}"> Input Data</a>
            </div>
        </div> -->

        <div class="row">
    <div class="col-12">
         <div class="card">
             <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="#" method="post">
                        <div class="row">
                             <div class="card-header">
                                 <h4 class="card-title">Data Tabungan</h4>
                             </div>
                                <div class="card-body table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Warga</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">total Tabungan</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $item)
                                        <tr>
                                            <th scope="row">{{ $no+1}}</th>
                                            <td>{{$item->nama_warga}}</td>
                                            <td>{{$item->nik}}</td>
                                            <td>{{$item->total_jumlah}}</td> 
                                        
                                            
                                         </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                    </form>
</div>

@endsection