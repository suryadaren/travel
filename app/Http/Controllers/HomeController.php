<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\kota;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $kota = kota::get();
    	return view('home.index',compact('kota'));
    }
    public function cari_jadwal(Request $request){
        $jumlah = $request->jumlah;
        $kota_asal = kota::find($request->kota_asal);
        $kota_tujuan = kota::find($request->kota_tujuan);
        $tanggal = Carbon::parse($request->tanggal)->format('Y-m-d');
        $jadwals = jadwal::where('tanggal_berangkat',$tanggal)
                        ->where('kota_asal_id',$request->kota_asal)
                        ->where('kota_tujuan_id',$request->kota_tujuan)->orderBy('jam_berangkat')->get();
        return view('home.jadwal',compact('jadwals','tanggal','kota_asal','kota_tujuan','jumlah'));
    }
}
