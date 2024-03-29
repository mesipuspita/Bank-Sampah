<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('public.masterpublic');
});

//HALAMAN DEPAN
    Route :: group(['middleware' =>['auth']], function(){
    Route::resource('informasi','InfromasiController');
});
Route::get('/admin', function () {
    return view('master');
});

Route::get('user','UserController@index');
Route::resource('dashboard','ControllerDashboard');
Route::resource('biodata','BiodataController');

//Halaman Dat Sampah
Route::resource('sampah','SampahController');
Route::get('/delete-sampah/{id}','SampahController@destroy')->name('delete-sampah');
Route::get('/showsampah/{id}','SampahController@show')->name('showsampah');
Route::post('/editstatus/{id}','SampahController@editstatus')->name('editstatus');
Route::resource('datasampah','DataSampahController');
Route::get('/delete-sampah/{id_sampah}','DataSampahController@destroy')->name('delete-sampah');
Route::get('/show-sampah/{id_sampah}','DataSampahController@destroy')->name('delete-sampah');
Route::get('/Grafiksampah','SampahController@grafik');


// Halaman Data Transaksi
Route::resource('transaksi','TransaksiController');
Route::get('/indexdata/{id_warga}/{id_transaksi}','TransaksiController@indexdata')->name('indexdata');
Route::get('/createdata/{id_warga}/{id_transaksi}','TransaksiController@createdata')->name('createdata');
Route::post('/simpandata','TransaksiController@storedata')->name('simpandata');
Route::get('transaksi/bukti/{id_transaksi}', 'TransaksiController@bukti')->name('transaksi.bukti');
Route::post('transaksi/storee/{id_transaksi}','TransaksiController@storee')->name('transaksi.storee');
Route::get('transaksi/invo','TransaksiController@invo')->name('invo');
Route::get('/delete-transaksi/{id}','TransaksiController@destroy')->name('delete-transaksi');
Route::post('transaksi/{id}','TransaksiController@storee')->name('transaksi');
Route::post('transaksi/store/{id}','TransaksiController@storee');
Route::get('/cetak-transaksi','TransaksiController@cetaktransaksi')->name('cetak-transaksi');
Route::get('/cetaktransaksitanggal/{tglawal}/{tglakhir}','TransaksiController@cetaktransaksitanggal')->name('cetaktransaksitanggal');

Route::get('/invoicetransaksi/{id_warga}/{id_transaksi}','TransaksiController@invoicetransaksi')->name('invoicetransaksi');
// Halaman Detail
Route::resource('detail','DetailController');

// Route::resource('jual','JualController');
// Route::resource('penduduk','PendudukController');

//Halaman Data Warga
Route::resource('warga','WargaController');
Route::get('/cetak-warga','WargaController@cetakwarga')->name('cetak-warga');
Route::get('/tampilan-warga','WargaController@tampilanwarga')->name('tampilan-warga');
Route::get('/card-warga','WargaController@cardwarga')->name('card-warga');
Route::get('/delete-warga/{id}','WargaController@destroy')->name('delete-warga');

//Halaman Data Tabungan
Route::resource('tabungan','TabunganController');
Route::get('/detail-tarik','TabunganController@detailtarik')->name('detail-tarik');
Route::get('/invoice','TabunganController@invoice')->name('invoice');


//Halaman Penjualan
Route::resource('pengajuanharga','PengajuanController');

//Halaman Login Dan Register
Route::get('login','LoginController@index');
Route::post('login','LoginController@login');
Route::post('simpanregister','LoginController@simpanregister')->name('simpanregister');
Route::get('register','LoginController@register')->name('register');


//Halaman Transaksi
Route::get('/edit/{id}','TransaksiController@edit')->name('edit');
Route::post('/update/{id}','TransaksiController@update')->name('update');
Route::resource('detail','DetailController');
Route::get('/data-detail/{id_warga}/{id_transaksi}','DetailController@index')->name('data-detail');
Route::get('/create-detail/{id_warga}/{id_transaksi}','DetailController@create')->name('create-detail');
Route::post('/simpan-detail','DetailController@store')->name('simpan-detail');

//Halaman Detail
Route::get('edit-detail','DetailController@edit')->name('edit-detail');
Route::get('/delete-detail/{id_detail}','DetailController@destroy')->name('delete-detail');
Route::get('/cetak-detail','DetailController@cetakdetail')->name('cetak-detail');
Route::get('/cetak-laporantransaksi','DetailController@cetaklaporantransaksi')->name('cetak-laporantransaksi');
Route::get('/CetakPegawaiPertanggalDetail/{tglawal}/{tglakhir}','DetailController@CetakPegawaiPertanggalDetail')->name('CetakPegawaiPertanggalDetail');

//Halaman Penarikan
// Route::resource('penarikan','PenarikanController ');
Route::get('/data-penarikan','PenarikanController@index')->name('data-penarikan');
Route::get('/create-penarikan','PenarikanController@create')->name('create-penarikan');


// HALAMAN USER
Route::get('/transaksiuser','DetailController@transaksiuser')->name('transaksiuser');
Route::get('/datasampahuser','SampahControllerr@user')->name('datasampahuser');
Route::get('/halamanuser', [RegisterController::class, 'sampahuser']);


//Export
Route::get('/exportpdf','WargaController@exportpdf')->name('exportpdf');


//MEMBAGI HALAMAN
// Route::get('/halamansatu','InfromasiController@halamansatu')->name('halamansatu');
 Route::get('/profil','InfromasiController@profil')->name('profil');
 Route::get('/usertransaksi','TransaksiController@usertransaksi')->name('usertransaksi');

 Route::get('/transaksiuser','halamanuserController@index')->name('transaksiuser');

 //HALAMAN LAPORAN DOMPDF 
 Route::get('/data-warga-pdf','WargaController@downloadpdf')->name('data-warga-pdf');
 Route::get('/data-sampah-pdf','SampahController@downloadpdf')->name('data-sampah-pdf');
 Route::get('/data-invoice-pdf','TransaksiController@pdf')->name('data-invoice-pdf');
 Route::get('/data-akun-pdf','UserController@downloaddataakun')->name('data-akun-pdf');

 
 Route::get('analisa','AnalisaController@index')->name('analisa');

 //HALAMAN PETUGAS JEMPUT
 Route::resource('petugasjemput', 'PetugasjemputController');
 Route::get('/show/{id}','PetugasjemputController@show')->name('show');
 Route::get('/delete-sampah/{id}','PetugasjemputController@destroy')->name('delete-sampah');
 Route::post('/edit/{id}','PetugasjemputController@update')->name('edit');

 Route::get('/createdetail{id}','PetugasjemputController@createdetail')->name('createdetail');
 Route::get('/indexdetail{id}','PetugasjemputController@indexdetail')->name('indexdetail');
 Route::post('/createdetaill','PetugasjemputController@storee')->name('createdetaill');

 //Halaman Data Bank sampah
 Route::resource('Banksampah','KantorCabangController');
 Route::post('/edit/{id}','KantorCabangController@update')->name('edit');
 Route::get('/delete-bank/{id}','KantorCabangController@destroy')->name('delete-bank');
 Route::get('/showdata','KantorCabangController@show')->name('showdata');
 