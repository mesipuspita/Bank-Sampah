<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('public.masterpublic');
});

Route::get('/admin', function () {
    return view('master');
});
Route::get('user','UserController@index');
// 
Route::resource('dashboard','ControllerDashboard');
// 
Route::resource('biodata','BiodataController');
// 
Route::resource('informasi','InfromasiController');
// 
Route::resource('sampah','SampahController');
//


Route::get('/delete-sampah/{id}','SampahController@destroy')->name('delete-sampah');
// TRANSAKSI
Route::resource('transaksi','TransaksiController');

Route::get('tambah-sampah/{id_transaksi}','TransaksiController@tambahSampah')->name('add.sampah');
Route::get('transaksi/bukti/{id_transaksi}', 'TransaksiController@bukti')->name('transaksi.bukti');
Route::post('transaksi/storee/{id_transaksi}','TransaksiController@storee')->name('transaksi.storee');



Route::get('/delete-transaksi/{id}','TransaksiController@destroy')->name('delete-transaksi');
//
Route::post('transaksi/{id}','TransaksiController@storee')->name('transaksi');
//
Route::post('transaksi/store/{id}','TransaksiController@storee');
//laporan
Route::get('/cetak-transaksi','TransaksiController@cetaktransaksi')->name('cetak-transaksi');
Route::get('/cetaktransaksitanggal/{tglawal}/{tglakhir}','TransaksiController@cetaktransaksitanggal')->name('cetaktransaksitanggal');

// 
Route::resource('trans','TransController');
// 
Route::resource('detail','DetailController');

// 
Route::resource('jual','JualController');
// 
Route::resource('penduduk','PendudukController');
// 
Route::resource('warga','WargaController');
Route::get('/cetak-warga','WargaController@cetakwarga')->name('cetak-warga');
Route::get('/card-warga','WargaController@cardwarga')->name('card-warga');
//
Route::get('/detail-tarik','TabunganController@detailtarik')->name('detail-tarik');
//
Route::get('/invoice','TabunganController@invoice')->name('invoice');

// 
Route::resource('datasampah','DataSampahController');
Route::get('/delete-sampah/{id_sampah}','DataSampahController@destroy')->name('delete-sampah');
// 
Route::resource('pengajuanharga','PengajuanController');
// 
Route::resource('tabungan','TabunganController');




Route::get('login','LoginController@index');
Route::post('login','LoginController@login');
Route::post('simpanregister','LoginController@simpanregister')->name('simpanregister');
Route::get('register','LoginController@register')->name('register');

Route::get('/edit/{id}','TransaksiController@edit')->name('edit');
//
Route::post('/update/{id}','TransaksiController@update')->name('update');
//
Route::resource('detail','DetailController');

Route::get('/data-detail/{id_warga}/{id_transaksi}','DetailController@index')->name('data-detail');
Route::get('/create-detail/{id_warga}/{id_transaksi}','DetailController@create')->name('create-detail');
Route::post('/simpan-detail','DetailController@store')->name('simpan-detail');


Route::get('edit-detail','DetailController@edit')->name('edit-detail');
Route::get('/delete-detail/{id_detail}','DetailController@destroy')->name('delete-detail');

Route::get('/cetak-detail','DetailController@cetakdetail')->name('cetak-detail');

// Route::resource('penarikan','PenarikanController ');


Route::get('/data-penarikan','PenarikanController@index')->name('data-penarikan');
Route::get('/create-penarikan','PenarikanController@create')->name('create-penarikan');


