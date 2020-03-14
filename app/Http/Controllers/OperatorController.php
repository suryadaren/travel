<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index(){
    	return view('operator.index');
    }
    public function kota_asal(){
    	return view('operator.kota_asal');
    }
    public function tambah_kota_asal(){
    	return view('operator.tambah_kota_asal');
    }
    public function edit_kota_asal($id){
        return view('operator.edit_kota_asal');
    }
    public function kota_tujuan(){
        return view('operator.kota_tujuan');
    }
    public function tambah_kota_tujuan(){
        return view('operator.tambah_kota_tujuan');
    }
    public function edit_kota_tujuan($id){
        return view('operator.edit_kota_tujuan');
    }
    public function pemesanan(){
    	return view('operator.pemesanan');
    }
    public function lihat_pemesanan($id){
        return view('operator.lihat_pemesanan');
    }
    public function mobil(){
        return view('operator.mobil');
    }
    public function tambah_mobil(){
        return view('operator.tambah_mobil');
    }
    public function lihat_mobil($id){
        return view('operator.lihat_mobil');
    }
    public function edit_mobil($id){
        return view('operator.edit_mobil');
    }
    public function sopir(){
        return view('operator.sopir');
    }
    public function tambah_sopir(){
        return view('operator.tambah_sopir');
    }
    public function lihat_sopir($id){
        return view('operator.lihat_sopir');
    }
    public function edit_sopir($id){
        return view('operator.edit_sopir');
    }
    public function jadwal(){
        return view('operator.jadwal');
    }
    public function tambah_jadwal(){
        return view('operator.tambah_jadwal');
    }
    public function edit_jadwal($id){
        return view('operator.edit_jadwal');
    }
    public function riwayat(){
        return view('operator.riwayat');
    }
    public function lihat_riwayat($id){
        return view('operator.lihat_riwayat');
    }
}
