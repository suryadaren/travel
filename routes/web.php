<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/jadwal', 'HomeController@jadwal');
Route::get('/pesan', 'HomeController@pesan');
Route::get('/bayar', 'HomeController@bayar');
Route::get('/thankyou', 'HomeController@thankyou');

Route::get('/login', 'LoginController@login');
Route::get('/register', 'LoginController@register');

Route::group(['prefix' => 'operators'], function(){
	Route::get('/', 'OperatorController@index');

	Route::get('/kota_asal', 'OperatorController@kota_asal');
	Route::get('/tambah_kota_asal', 'OperatorController@tambah_kota_asal');
	Route::get('/edit_kota_asal/{id}', 'OperatorController@edit_kota_asal');

	Route::get('/kota_tujuan', 'OperatorController@kota_tujuan');
	Route::get('/tambah_kota_tujuan', 'OperatorController@tambah_kota_tujuan');
	Route::get('/edit_kota_tujuan/{id}', 'OperatorController@edit_kota_tujuan');

	Route::get('/pemesanan', 'OperatorController@pemesanan');
	Route::get('/lihat_pemesanan/{id}', 'OperatorController@lihat_pemesanan');

	Route::get('/mobil', 'OperatorController@mobil');
	Route::get('/tambah_mobil', 'OperatorController@tambah_mobil');
	Route::get('/lihat_mobil/{id}', 'OperatorController@lihat_mobil');
	Route::get('/edit_mobil/{id}', 'OperatorController@edit_mobil');

	Route::get('/sopir', 'OperatorController@sopir');
	Route::get('/tambah_sopir', 'OperatorController@tambah_sopir');
	Route::get('/lihat_sopir/{id}', 'OperatorController@lihat_sopir');
	Route::get('/edit_sopir/{id}', 'OperatorController@edit_sopir');

	Route::get('/jadwal', 'OperatorController@jadwal');
	Route::get('/tambah_jadwal', 'OperatorController@tambah_jadwal');
	Route::get('/edit_jadwal/{id}', 'OperatorController@edit_jadwal');

	Route::get('/riwayat', 'OperatorController@riwayat');
	Route::get('/lihat_riwayat/{id}', 'OperatorController@lihat_riwayat');

});

Route::group(['prefix' => 'drivers'], function(){

	Route::get('/', 'DriverController@index');
	Route::get('/riwayat', 'DriverController@riwayat');
	Route::get('/lihat_riwayat/{id}', 'DriverController@lihat_riwayat');

});

Route::group(['prefix' => 'owners'], function(){

	Route::get('/', 'OwnerController@index');
	Route::get('/operator', 'OwnerController@operator');
	Route::get('/tambah_operator', 'OwnerController@tambah_operator');
	Route::get('/lihat_operator/{id}', 'OwnerController@lihat_operator');
	Route::get('/edit_operator/{id}', 'OwnerController@edit_operator');

});
