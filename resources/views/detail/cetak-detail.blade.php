
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

    <body bgcolor="white">
  <font face="Arial" color="black" size="4"><p align="center"> BANK SAMPAH PRUMANAS JAMBAK PERMAI </p></font>
  <font face="Arial" color="black" size="4"><p align="center"> DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU </p></font>
  <font face="Arial" color="black" size="3"> <p align="center"> JL. Padang Bukittinggi Telp.(0231) 123456 Cirebon 45141 </p></font>
  <hr>

  <font face="Arial" color="black" size="3"> <p align="center"> <u> <b> LAPONTRANSAKSI/BULAN </b></u></font><br>

  <p align="center">
   Berdasarkan sUNDANG-UNDANG REPUBLIK INDONESIA NOMOR 18 TAHUN 2008 TENTANGPENGELOLAAN SAMPAH  Nomor 4609/UN404/DT/2014 bahwa pengelolaan sampah selama ini belum sesuai dengan metode dan teknik pengelolaan sampah yang berwawasan lingkungan sehingga menimbulkan dampak negatif terhadap kesehatan masyarakat dan lingkungan; 
  </p>

 </body>
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
                @foreach($dtcetak as $item)
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
        <p align="center"><font face="Arial">
   Telah melakukan penelitian di sekolah kami tanggal<font color="red"> 7 s/d 21 Maret 2015
    
   </font>, dengan judul
  "Penerapan Metode Pembelajaran IMPROVE Berbasis Multimedia Interaktif Untuk Meningkatkan
   Intrapersonal intelegensi siswa dalam Mata Pelajaran TIK"
  </font></p>
        <script type="text/javascript">
            window.print();
            </script>
    </body>
</html>
