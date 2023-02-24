
<!DOCTYPE html>
<html lang="end">
    <head>
        <title>Laporan data warga</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td width="50" align="center"><h4>BANK SAMPAH PRUMANAS JAMBAK PERMAI </h4>
                                        <h6>DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU</h5> 
                                        <h5>JL. Padang Bukittinggi Telp.(0231) 123456 Cirebon 45141</h5></td>
            </tr>
        </table>
        <font face="Arial" color="black" size="1">Yth : Kepada Bidang Bank Jambak Permai </font><br>
        <font face="Arial" color="black" size="1">Hal : Data Anggota Bank Sampah Jambak Permai </font>

  
     ` <div class="form-group">
        <p><b>Tabel berikut berisi data anggota bank sampah jambak permai </b></p>
           <table class="static" align="center" rules="all" border="1px" style="width: 85%">
                <tr>
                    <th> NO</th>
                    <th> NIK</th>
                    <th> Nama</th>
                    <th >Tanggal Lahir</th>
                    <th >NO Telepon</th>
                    <th >Pekerjaan</th>
                    <th >Alamat</th>
                </tr>
                @foreach($data as $item)
                 <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama_warga}}</td>
                    <td>{{$item->tgllahir}}</td>
                    <td>{{$item->notelepon}}</td>
                    <td>{{$item->pekerjaan}}</td>
                     <td>{{$item->statustinggal}}</td>
                </tr>
                    @endforeach
             </table>
        </div>
        <p align="center"><font face="Arial">
        Terimakasih atas partisipasi anda terhadap bank sampah jambak permai, laporan ini merupakan bukti yang sah data anggota 
        pada kantor bank sampah jambak permai.</font></p><br>

        <table class="static" align="right" rules="all" border="0px" >
            <tr>
                <td>Kepala Bank sampah</td>
            </tr>
            <br>
      <script type="text/javascript">
          window.print();
          </script>
  </body>
</html>

    

  
