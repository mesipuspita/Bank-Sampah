@extends('master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h4>Data Penduduk</h4></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('datasampah.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>kategori</th>
            <th>harga Kilo </th>
            <th>katerangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($datasampah as $sam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $sam->nama }}</td>
            <td>{{ $sam->kategori}}</td>
            <td>{{ $sam->hargakilo}}</td>
            <td>{{ $sam->keterangan}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('datasampah.show',$sam->id) }}">Tampil</a>
                <a class="btn btn-primary" href="{{ route('datasampah.edit',$sam->id) }}">Edit</a>
                <form action="{{ route('datasampah.destroy',$sam->id) }}" method="POST">   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $datasampah->links() !!}
      
@endsection