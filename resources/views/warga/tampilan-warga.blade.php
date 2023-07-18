@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Warga</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('warga.index') }}"> Kembali</a>
            </div>
        </div>
        <div class="row">
            <table>
                <tr>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        
                        <div class="form-group">
                            <strong>Nama</strong>
                            {{$tampilan->nama_sampah}}
                        </div>
                    </div>
                 </tr>
            </table>
    </div>

</table>
    </div>
@endsection