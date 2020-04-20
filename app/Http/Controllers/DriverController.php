<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\riwayat_posisi_travel;
use App\pendapatan;

class DriverController extends Controller
{
    public function index(){
    	$jadwal = jadwal::where('driver_id',auth()->guard('driver')->id())->first();
    	return view('driver.index',compact('jadwal'));
    }
    public function update_kota_terkini(Request $request){
    	$jadwal = jadwal::find($request->id);
    	$jadwal->posisi_travel = $request->nama;
    	$jadwal->save();

    	riwayat_posisi_travel::create([
    		"jadwal_id" => $jadwal->id,
    		"nama_kota" => $request->nama,
    	]);

    	$notif = [
            "message" => "Berhasil mengupdate posisi terkini",
            "alert-type" => "success"
        ];
    	return back()->with($notif);
    }
    public function sampai_tujuan(Request $request){
    	$jadwal = jadwal::find($request->id);
    	$jadwal->status = "selesai";
    	$jadwal->save();

    	riwayat_posisi_travel::create([
    		"jadwal_id" => $jadwal->id,
    		"nama_kota" => $jadwal->kota_tujuan->nama,
    	]);

    	$pendapatan = 0;
    	foreach ($jadwal->pemesanans as $pemesanan) {
    		$harga = $this->convert_to_angka($pemesanan->harga);
    		$pendapatan += $harga;
    	}
    	$pendapatan = $this->convert_to_rupiah($pendapatan);

    	pendapatan::create([
    		"jadwal_id" => $jadwal->id,
    		"jumlah" => $pendapatan
    	]);


    	$notif = [
            "message" => "Selamat perjalanan anda telah sampai tujuan",
            "alert-type" => "success"
        ];
    	return redirect(url('/drivers/riwayat'))->with($notif);
    }
    public function jadwal(){
        $jadwals = jadwal::where('driver_id',auth()->guard('driver')->id())->where("status","tersedia")->orderBy("tanggal_berangkat","desc")->get();
        return view('driver.jadwal',compact('jadwals'));
    }
    public function lihat_jadwal($id){
        $jadwal = jadwal::find($id);
        return view('driver.lihat_jadwal',compact('jadwal'));
    }
    public function riwayat(){
    	$jadwals = jadwal::where('driver_id',auth()->guard('driver')->id())->where('status','selesai')->orderBy('tanggal_berangkat')->get();
        return view('driver.riwayat',compact('jadwals'));
    }
    public function lihat_riwayat($id){
    	$jadwal = jadwal::find($id);
        return view('driver.lihat_riwayat',compact('jadwal'));
    }


    function convert_to_rupiah($angka){
        $hasil_rupiah = number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
    function convert_to_angka($nominal){
        $angka = str_replace(".", "", $nominal);
        return $angka;
    }
}
