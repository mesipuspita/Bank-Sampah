
<!DOCTYPE html>
<html lang="end">
    <head>
        <title>Laporan data sampah</title>
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

                <thead>
                  <tr>
                    <th scope="col">No </th>
                    <th scope="col">Kategori Sampah</th>
                    <th scope="col">harga/kg</th>
                    <th scope="col">Deskripsi</th>
                   
                   
                  </tr>
                </thead>
            <tbody>
              @foreach($data as $no => $item)
              <tr>
                <th scope="row">{{ $no+1}}</th>
                <!-- <td>{{$item->nama_sampah}}</td> -->
                <td>{{$item->jenis_sampah}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->keterangan}}</td>
                    @endforeach
             </table>
        </div>
        <p align="center"><font face="Arial">
        Terimakasih atas partisipasi anda terhadap bank sampah jambak permai, laporan ini merupakan bukti yang sah data anggota 
        pada kantor bank sampah jambak permai.</font></p><br>

        <font face="Arial" color="black" align="right" size="1">Diketahui Oleh : </font><br>
        </br>
        </br>
        <font face="Arial" color="black" align="right" size="1">Ketua Bank Sampah</font><br>

      

      <script type="text/javascript">
          window.print();
          </script>
  </body>
</html>

    

  
