
<!DOCTYPE html>
<html lang="end">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
            table.static{
                position: relative;
                border: 1px solid #543535;
            }
        </style>
        <title>Halaman Cetak Data Transaksi</title>
    </head>
    <body>
        <div class="form-group">
          <p align="center"><b>Laporan data transaksi </b></p>
             <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                <tr>
                    <th> No</th>
                    <th> nama </th>
                    <th> nik</th>
                </tr>
                @foreach($cetaktanggaltransaksi as $item)
                    <tr>
                        <td>-</td>
                        <td>{{$item->nama_warga}}</td>
                        <td>{{$item->nik}}</td>
                    </tr>
                    @endforeach
             </table>
        </div>
        <script type="text/javascript">
            window.print('cetak-transaksi-pertanggal.blade', compact(''));
            </script>
    </body>
</html>
