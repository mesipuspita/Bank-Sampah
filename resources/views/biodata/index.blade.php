@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
    
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('biodata.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
    <br>        
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Data Anggota Bank</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        @foreach ($biodata as $bio)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $bio->nama }}</td>
                                                <td>{{ $bio->alamat }}</td>
                                                <td>
                                                    <a class="btn btn-info" href="{{ route('biodata.show',$bio->id) }}" btn-size='10px'>Tampil</a>
                                                    <a class="btn btn-primary" href="{{ route('biodata.edit',$bio->id) }}">Edit</a>
                                                    <form action="{{ route('biodata.destroy',$bio->id) }}" method="POST">   
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>  
    </div>
    {!! $biodata->links() !!}
@endsection