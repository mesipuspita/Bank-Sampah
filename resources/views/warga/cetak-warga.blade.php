
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
        <title> CETAK </title>
    </head>
    <body>
        <div class="form-group">
          <p align="center"><b>DATA WARGA BANK SAMPAH</b></p>
          <!-- <center><h1>BANK SAMPAH<h1></center> -->
             <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            
                <tr>
                    <th> NO</th>
                    <th> No KK </th>
                    <th> NIK</th>
                    <th> Nama</th>
                    <th >Gender</th>
                    <th >Tanggal Lahir</th>
                    <th >NO Telepon</th>
                    <th >Agama</th>
                    <th >Pendidikan</th>
                    <th >Pekerjaan</th>
                    <th >Alamat</th>
                </tr>
                @foreach($cetakdata as $item)
                 <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nokk}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama_warga}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->tgllahir}}</td>
                    <td>{{$item->notelepon}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->pendidikan}}</td>
                    <td>{{$item->pekerjaan}}</td>
                     <td>{{$item->statustinggal}}</td>
                </tr>
                    @endforeach
             </table>
        </div>
        <script type="text/javascript">
            window.print();
            </script>
    </body>
</html>
