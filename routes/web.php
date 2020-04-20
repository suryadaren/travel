<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/cari_jadwal', 'HomeController@cari_jadwal');

Route::get('/login', 'LoginController@login');
Route::post('/checkLogin', 'LoginController@checkLogin');
Route::get('/register', 'LoginController@register');
Route::post('/simpan_register', 'LoginController@simpan_register');
Route::get('/verify', 'LoginController@verify')->name('verify');
Route::get('/verifySuccess', 'LoginController@verifySuccess');

Route::group(['prefix' => 'customers', 'middleware' => 'customer'], function(){

	Route::get('/', 'CustomerController@index');
	Route::get('/lihat_pemesanan/{id}', 'CustomerController@lihat_pemesanan');
	Route::post('/simpan_bukti_pembayaran', 'CustomerController@simpan_bukti_pembayaran');
	Route::get('/download_tiket/{id}', 'CustomerController@download_tiket');

	Route::get('/pesan/{id}/{jumlah}', 'CustomerController@pesan');
	Route::get('/informasi_pemesanan', 'CustomerController@informasi_pemesanan');
	Route::post('/buat_pemesanan', 'CustomerController@buat_pemesanan');
	Route::get('/thankyou', 'CustomerController@thankyou');
	Route::get('/logout', 'CustomerController@logout');

});

Route::group(['prefix' => 'owners', 'middleware' => 'owner'], function(){

	Route::get('/', 'OwnerController@index');
	Route::put('/edit_profil', 'OwnerController@edit_profil');

	Route::get('/pendapatan', 'OwnerController@pendapatan');

	Route::get('/operator', 'OwnerController@operator');
	Route::post('/simpan_operator', 'OwnerController@simpan_operator');
	Route::get('/tambah_operator', 'OwnerController@tambah_operator');
	Route::get('/lihat_operator/{id}', 'OwnerController@lihat_operator');
	Route::get('/edit_operator/{id}', 'OwnerController@edit_operator');
	Route::put('/update_operator', 'OwnerController@update_operator');
	Route::post('/hapus_operator', 'OwnerController@hapus_operator');

	Route::get('/logout', 'OwnerController@logout');

});


Route::group(['prefix' => 'operators', "middleware" => 'operator'], function(){
	Route::get('/', 'OperatorController@index');
	Route::put('/edit_profil', 'OperatorController@edit_profil');

	Route::get('/kota', 'OperatorController@kota');
	Route::get('/tambah_kota', 'OperatorController@tambah_kota');
	Route::post('/simpan_kota', 'OperatorController@simpan_kota');
	Route::get('/edit_kota/{id}', 'OperatorController@edit_kota');
	Route::put('/update_kota', 'OperatorController@update_kota');
	Route::post('/hapus_kota', 'OperatorController@hapus_kota');

	Route::get('/pemesanan', 'OperatorController@pemesanan');
	Route::get('/lihat_pemesanan/{id}', 'OperatorController@lihat_pemesanan');
	Route::post('/verifikasi_pembayaran', 'OperatorController@verifikasi_pembayaran');

	Route::get('/mobil', 'OperatorController@mobil');
	Route::get('/tambah_mobil', 'OperatorController@tambah_mobil');
	Route::post('/simpan_mobil', 'OperatorController@simpan_mobil');
	Route::get('/lihat_mobil/{id}', 'OperatorController@lihat_mobil');
	Route::get('/edit_mobil/{id}', 'OperatorController@edit_mobil');
	Route::put('/update_mobil', 'OperatorController@update_mobil');
	Route::post('/hapus_mobil', 'OperatorController@hapus_mobil');

	Route::get('/sopir', 'OperatorController@sopir');
	Route::get('/tambah_sopir', 'OperatorController@tambah_sopir');
	Route::post('/simpan_sopir', 'OperatorController@simpan_sopir');
	Route::get('/lihat_sopir/{id}', 'OperatorController@lihat_sopir');
	Route::get('/edit_sopir/{id}', 'OperatorController@edit_sopir');
	Route::put('/update_sopir', 'OperatorController@update_sopir');
	Route::post('/hapus_sopir', 'OperatorController@hapus_sopir');

	Route::get('/jadwal', 'OperatorController@jadwal');
	Route::get('/lihat_jadwal/{id}', 'OperatorController@lihat_jadwal');
	Route::get('/tambah_jadwal', 'OperatorController@tambah_jadwal');
	Route::post('/simpan_jadwal', 'OperatorController@simpan_jadwal');
	Route::get('/edit_jadwal/{id}', 'OperatorController@edit_jadwal');
	Route::put('/update_jadwal', 'OperatorController@update_jadwal');
	Route::post('/hapus_jadwal', 'OperatorController@hapus_jadwal');
	Route::post('/travel_berangkat', 'OperatorController@travel_berangkat');

	Route::get('/riwayat', 'OperatorController@riwayat');
	Route::get('/lihat_riwayat/{id}', 'OperatorController@lihat_riwayat');
	
	Route::get('/logout', 'OperatorController@logout');


});

Route::group(['prefix' => 'drivers'], function(){

	Route::get('/', 'DriverController@index');
	Route::post('/update_kota_terkini', 'DriverController@update_kota_terkini');
	Route::post('/sampai_tujuan', 'DriverController@sampai_tujuan');

	Route::get('/jadwal', 'DriverController@jadwal');
	Route::get('/lihat_jadwal/{id}', 'DriverController@lihat_jadwal');
	Route::get('/riwayat', 'DriverController@riwayat');
	Route::get('/lihat_riwayat/{id}', 'DriverController@lihat_riwayat');

});
