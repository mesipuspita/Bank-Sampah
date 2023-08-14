<!DOCTYPE html>
<html lang="end">
    <head>
        <title>Laporan Transaksi</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                {{-- <td width="30" align="center"><img src="/asset/image/LogoT.png" width="100%"></td> --}}
                <td width="50" align="center"><h4>BANK SAMPAH PANCADAYA</h4>
                                        <h5>DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU</h5> 
                                        <h6>JL. Padang Bukittinggi Telp.(0231) 123456 Cirebon 45141</h6></td>
            </tr>
        </table>
        <font face="Arial" color="black" size="3">Yth : Kepada Bidang Bank Jambak Permai </font><br>
        <font face="Arial" color="black" size="3">Hal : Data Anggota Bank Sampah Jambak Permai </font>

        <div class="form-group">
            <p><b>Tabel berikut berisi data anggota bank sampah jambak permai </b></p>
               <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                  <tr align="center">
                      <th> NO</th>
                      <th> Nama</th>
                      <th> Jenis Sampah</th>
                      <th> Harga</th>
                      <th> Satuan</th>
                      <th> Tanggal Transaksi</th>
                      <th >Jumlah KIlo</th>
                      <th >Total Jumlah</th>
                  </tr>
                  @foreach($CetakPertanggal as $item)
                   <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->nama_warga}}</td>
                      <td>{{$item->jenis_sampah}}</td>
                      <td>{{formatRupiah($item->harga,true)}}</td>
                      <td>{{$item->id_satuan}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->total}}</td>
                      <td>{{$item->total_jumlah}}</td>
    
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


    

  
