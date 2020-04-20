<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\user;
use App\kota;
use App\mobil;
use App\jadwal;
use App\pemesanan;
use Carbon\Carbon;
use App\Jobs\pembayaranDiverifikasi;

class OperatorController extends Controller
{
    public function index(){
        $user = user::find(auth()->guard('operator')->id());
        return view('operator.index',compact('user'));
    }
    function edit_profil(Request $request){

        $validator = Validator::make($request->all(),[
                'nama' => 'required',
                'alamat' => 'required',
                'nomor_telepon' => 'required'
            ],
            [
                'nama.required' => 'nama tidak boleh kosong',
                'nomor_telepon.required' => 'nomor telepon tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong'
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{
            $user = user::find($request->id);

            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            if ($request->foto) {
                Storage::delete($user->foto);
                $pathFoto = $request->foto->store('public/foto');
                $user->foto = $pathFoto;
            }

            $user->alamat = $request->alamat;
            $user->nomor_telepon = $request->nomor_telepon;
            $user->nama = $request->nama;

            $user->save();

            $notif = [
                'message' => "berhasil mengupdate data profil",
                'alert-type' => 'success'
            ];
            return back()->with($notif);
        }
    }

    public function kota(){
        $kotas = kota::orderBy('nama','asc')->get();
    	return view('operator.kota',compact('kotas'));
    }
    public function tambah_kota(){
    	return view('operator.tambah_kota');
    }
    public function simpan_kota(Request $request){
        $validator = Validator::make($request->all(),[
                'nama' => 'required',
                'kode' => 'required|unique:kota',
            ],
            [
                'nama.required' => 'nama tidak boleh kosong',
                'kode.required' => 'kode tidak boleh kosong',
                'kode.unique' => 'kode ini telah digunakan'
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{
            kota::create([
                "nama" => $request->nama,
                "kode" => $request->kode,
            ]);

            $notif = [
                'message' => "berhasil menyimpan data kota",
                'alert-type' => 'success'
            ];
            return redirect(url('/operators/kota'))->with($notif);
        }
        return view('operator.tambah_kota');
    }
    public function edit_kota($id){
        $kota = kota::find($id);
        return view('operator.edit_kota',compact('kota'));
    }
    public function update_kota(Request $request){

        $kota = kota::find($request->id);

        if ($kota->kode == $request->kode) {
            
            $validator = Validator::make($request->all(),[
                    'nama' => 'required'
                ],
                [
                    'nama.required' => 'nama tidak boleh kosong'
                ]);
                
            if ($validator->fails()) {
                $notif = [
                    "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                    "alert-type" => "error"
                ];
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with($notif);
            }else{
                $kota = kota::find($request->id);
                $kota->nama = $request->nama;
                $kota->save();

                $notif = [
                    'message' => "berhasil mengupdate data kota",
                    'alert-type' => 'success'
                ];
                return redirect(url('/operators/kota'))->with($notif);
            }
        }else{

            $validator = Validator::make($request->all(),[
                    'nama' => 'required',
                    'kode' => 'required|unique:kota'
                ],
                [
                    'nama.required' => 'nama tidak boleh kosong',
                    'kode.required' => 'kode tidak boleh kosong',
                    'kode.unique' => 'kode ini telah digunakan'
                ]);
                
            if ($validator->fails()) {
                $notif = [
                    "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                    "alert-type" => "error"
                ];
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with($notif);
            }else{
                $kota = kota::find($request->id);
                $kota->nama = $request->nama;
                $kota->kode = $request->kode;
                $kota->save();

                $notif = [
                    'message' => "berhasil mengupdate data kota",
                    'alert-type' => 'success'
                ];
                return redirect(url('/operators/kota'))->with($notif);
            }
        }
    }
    public function hapus_kota(Request $request){
        kota::where('id',$request->id)->delete();

        $notif = [
            'message' => "berhasil menghapus data kota",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }

    public function pemesanan(){
        $pemesanans = pemesanan::orderBy('created_at','desc')->get();
    	return view('operator.pemesanan',compact('pemesanans'));
    }
    public function lihat_pemesanan($id){
        $pemesanan = pemesanan::find($id);
        return view('operator.lihat_pemesanan',compact('pemesanan'));
    }
    public function verifikasi_pembayaran(Request $request){
        $pemesanan = pemesanan::find($request->id);
        $pemesanan->status = "pemesanan berhasil";
        $pemesanan->save();
        

        $this->dispatch(new pembayaranDiverifikasi($pemesanan->id,$pemesanan->customer->email));

        $notif = [
            'message' => "berhasil verifikasi pembayaran",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }
    public function mobil(){
        $mobils = mobil::get();
        return view('operator.mobil',compact('mobils'));
    }
    public function tambah_mobil(){
        return view('operator.tambah_mobil');
    }
    public function simpan_mobil(Request $request){
        $validator = Validator::make($request->all(),[
                'merk' => 'required',
                'warna' => 'required',
                'foto' => 'required',
                'plat' => 'required|unique:mobil',
            ],
            [
                'merk.required' => 'merk tidak boleh kosong',
                'warna.required' => 'warna tidak boleh kosong',
                'foto.required' => 'foto tidak boleh kosong',
                'plat.unique' => 'plat ini telah digunakan'
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{
            $pathFoto = $request->foto->store('public/fotoMobil');
            mobil::create([
                "merk" => $request->merk,
                "plat" => $request->plat,
                "warna" => $request->warna,
                "foto" => $pathFoto
            ]);

            $notif = [
                'message' => "berhasil menambah data mobil",
                'alert-type' => 'success'
            ];
            return redirect(url('/operators/mobil'))->with($notif);
        }
    }
    public function lihat_mobil($id){
        $mobil = mobil::find($id);
        return view('operator.lihat_mobil',compact('mobil'));
    }
    public function edit_mobil($id){
        $mobil = mobil::find($id);
        return view('operator.edit_mobil',compact('mobil'));
    }
    public function update_mobil(Request $request){
        $mobil = mobil::find($request->id);

        if ($mobil->plat == $request->plat) {
            $validator = Validator::make($request->all(),[
                'merk' => 'required',
                'warna' => 'required'
            ],
            [
                'merk.required' => 'merk tidak boleh kosong',
                'warna.required' => 'warna tidak boleh kosong'
            ]);
            
            if ($validator->fails()) {
                $notif = [
                    "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                    "alert-type" => "error"
                ];
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with($notif);
            }
        }else{
            $validator = Validator::make($request->all(),[
                'merk' => 'required',
                'warna' => 'required',
                'plat' => 'required|unique:mobil',
            ],
            [
                'merk.required' => 'merk tidak boleh kosong',
                'warna.required' => 'warna tidak boleh kosong',
                'plat.unique' => 'plat ini telah digunakan'
            ]);
            
            if ($validator->fails()) {
                $notif = [
                    "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                    "alert-type" => "error"
                ];
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with($notif);
            }
        }

        if ($request->foto) {
            Storage::delete($mobil->foto);
            $pathFoto = $request->foto->store('public/fotoMobil');
            $mobil->foto = $pathFoto;
        }

        $mobil->merk = $request->merk;
        $mobil->warna = $request->warna;
        $mobil->plat = $request->plat;
        $mobil->save();

        $notif = [
            'message' => "berhasil mengupdate data mobil",
            'alert-type' => 'success'
        ];
        return redirect(url('/operators/mobil'))->with($notif);

    }
    public function hapus_mobil(Request $request){
        mobil::where('id',$request->id)->delete();

        $notif = [
            'message' => "berhasil menghapus data mobil",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }

    public function sopir(){
        $sopirs = user::where('role','driver')->get();
        return view('operator.sopir',compact('sopirs'));
    }
    public function tambah_sopir(){
        return view('operator.tambah_sopir');
    }
    public function simpan_sopir(Request $request){

        $validator = Validator::make($request->all(),[
                'nama' => 'required',
                'email' => 'required|unique:user',
                'password' => 'required',
                'alamat' => 'required',
                'nomor_telepon' => 'required',
                'foto' => 'required',
            ],
            [
                'nama.required' => 'nama tidak boleh kosong',
                'email.required' => 'email tidak boleh kosong',
                'email.unique' => 'email ini telah digunakan',
                'password.required' => 'password tidak boleh kosong',
                'nomor_telepon.required' => 'nomor telepon tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong',
                'foto.required' => 'foto tidak boleh kosong',
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{

            $pathFoto = $request->foto->store('public/foto');
            user::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'nomor_telepon' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'foto' => $pathFoto,
                'status' => 'aktif',
                'role' => 'driver'
            ]);

            $notif = [
                'message' => 'berhasil menambahkan data operator',
                'alert-type' => 'success'
            ];

            return redirect(url('/operators/sopir'))->with($notif);

        }
    }
    public function lihat_sopir($id){
        $sopir = user::find($id);
        return view('operator.lihat_sopir',compact('sopir'));
    }
    public function edit_sopir($id){
        $sopir = user::find($id);
        return view('operator.edit_sopir',compact('sopir'));
    }
    public function update_sopir(Request $request){

        $validator = Validator::make($request->all(),[
                'nama' => 'required',
                'alamat' => 'required',
                'nomor_telepon' => 'required'
            ],
            [
                'nama.required' => 'nama tidak boleh kosong',
                'nomor_telepon.required' => 'nomor telepon tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong'
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{
            $user = user::find($request->id);

            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            if ($request->foto) {
                Storage::delete($user->foto);
                $pathFoto = $request->foto->store('public/foto');
                $user->foto = $pathFoto;
            }

            $user->alamat = $request->alamat;
            $user->nomor_telepon = $request->nomor_telepon;
            $user->nama = $request->nama;

            $user->save();

            $notif = [
                'message' => "berhasil mengupdate data sopir",
                'alert-type' => 'success'
            ];
            return redirect(url('/operators/sopir'))->with($notif);
        }
    }
    public function hapus_sopir(Request $request){
        user::where('id',$request->id)->delete();
        
        $notif = [
            'message' => "berhasil menghapus data sopir",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }
    public function jadwal(){
        $jadwals = jadwal::where("status","!=","selesai")->orderBy("tanggal_berangkat","desc")->get();
        return view('operator.jadwal',compact('jadwals'));
    }
    public function lihat_jadwal($id){
        $jadwal = jadwal::find($id);
        return view('operator.lihat_jadwal',compact('jadwal'));
    }
    public function tambah_jadwal(){
        $kota = kota::get();
        $sopir = user::where('role','driver')->get();
        $mobil = mobil::get();
        return view('operator.tambah_jadwal',compact('kota','sopir','mobil'));
    }
    public function simpan_jadwal(Request $request){
        $validator = Validator::make($request->all(),[
                'kota_asal' => 'required',
                'kota_tujuan' => 'required',
                'sopir_id' => 'required',
                'mobil_id' => 'required',
                'tanggal_berangkat' => 'required',
                'tanggal_sampai' => 'required',
                'harga_tiket' => 'required',
                'kursi_tersedia' => 'required',
            ],
            [
                'kota_asal.required' => 'kota asal harus dipilih',
                'kota_tujuan.required' => 'kota tujuan harus dipilih',
                'sopir.required' => 'sopir harus dipilih',
                'mobil.required' => 'mobil harus dipilih',
                'tanggal_berangkat.required' => 'tanggal berangkat tidak boleh kosong',
                'tanggal_sampai.required' => 'tanggal sampai tidak boleh kosong',
                'harga_tiket.required' => 'harga tiket tidak boleh kosong',
                'kursi_tersedia.required' => 'kursi tersedia tidak boleh kosong',
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{

            jadwal::create([
                "kota_asal_id" => $request->kota_asal,
                "kota_tujuan_id" => $request->kota_tujuan,
                "driver_id" => $request->sopir_id,
                "mobil_id" => $request->mobil_id,
                "tanggal_berangkat" => $request->tanggal_berangkat,
                "tanggal_sampai" => $request->tanggal_sampai,
                "jam_berangkat" => $request->jam_berangkat,
                "jam_sampai" => $request->jam_sampai,
                "harga_tiket" => $request->harga_tiket,
                "kursi_tersedia" => $request->kursi_tersedia,
                "status" => "tersedia",
            ]);

            $notif = [
                'message' => "berhasil menambah data jadwal",
                'alert-type' => 'success'
            ];
            return redirect(url('/operators/jadwal'))->with($notif);

        }
    }
    public function edit_jadwal($id){
        $jadwal = jadwal::find($id);

        $kota_asal = kota::where("id","!=",$jadwal->kota_asal_id)->get();
        $kota_tujuan = kota::where("id","!=",$jadwal->kota_tujuan_id)->get();
        $sopir = user::where('role','driver')->where("id","!=",$jadwal->driver_id)->get();
        $mobil = mobil::where("id","!=",$jadwal->mobil_id)->get();

        $jadwal->tanggal_berangkat = Carbon::parse($jadwal->tanggal_berangkat);
        $jadwal->tanggal_sampai = Carbon::parse($jadwal->tanggal_sampai);

        $jadwal->jam_berangkat = Carbon::parse($jadwal->jam_berangkat)->format('H:i:s');
        $jadwal->jam_sampai = Carbon::parse($jadwal->jam_sampai)->format('H:i:s');

        return view('operator.edit_jadwal',compact('jadwal','kota_asal','kota_tujuan','sopir','mobil'));
    }
    public function update_jadwal(Request $request){
        $validator = Validator::make($request->all(),[
                'harga_tiket' => 'required',
                'kursi_tersedia' => 'required',
            ],
            [
                'harga_tiket.required' => 'harga tiket tidak boleh kosong',
                'kursi_tersedia.required' => 'kursi tersedia tidak boleh kosong',
            ]);
            
        if ($validator->fails()) {
            $notif = [
                "message" => "Gagal Mengupdate Data Karena ada data yang kosong",
                "alert-type" => "error"
            ];
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with($notif);
        }else{
            $jadwal = jadwal::find($request->id);
            
            $jadwal->kota_asal_id = $request->kota_asal;
            $jadwal->kota_tujuan_id = $request->kota_tujuan;
            $jadwal->driver_id = $request->sopir_id;
            $jadwal->mobil_id = $request->mobil_id;
            $jadwal->tanggal_berangkat = $request->tanggal_berangkat;
            $jadwal->tanggal_sampai = $request->tanggal_sampai;
            $jadwal->jam_berangkat = $request->jam_berangkat;
            $jadwal->jam_sampai = $request->jam_sampai;
            $jadwal->harga_tiket = $request->harga_tiket;
            $jadwal->kursi_tersedia = $request->kursi_tersedia;
            $jadwal->save();

            $notif = [
                'message' => "berhasil memperbarui data jadwal",
                'alert-type' => 'success'
            ];
            return redirect(url('/operators/jadwal'))->with($notif);

        }
    }
    public function hapus_jadwal(Request $request){
        jadwal::where('id',$request->id)->delete();
        
        $notif = [
            'message' => "berhasil menghapus data jadwal",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }
    public function travel_berangkat(Request $request){
        $jadwal = jadwal::find($request->id);
        $jadwal->status = "dalam perjalanan";
        $jadwal->save();
        
        $notif = [
            'message' => "berhasil mengupdate status jadwal",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
    }
    public function riwayat(){
        $jadwals = jadwal::where('status','selesai')->orderBy('tanggal_berangkat')->get();
        return view('operator.riwayat',compact('jadwals'));
    }
    public function lihat_riwayat($id){
        $jadwal = jadwal::find($id);
        return view('operator.lihat_riwayat',compact('jadwal'));
    }

    public function logout(){
        auth()->guard('operator')->logout();
        $notif = [
            'message' => "berhasil logout",
            'alert-type' => "success"
        ];
        return redirect(url('login'))->with($notif);
    }
}
