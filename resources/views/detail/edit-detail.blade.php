@extends('master')
@section('content')
<form action="{{ route('simpan-detail') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Total</strong>
                        <input type="text" name="total" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Total</strong>
                        <input type="text" name="total_jumlah" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection