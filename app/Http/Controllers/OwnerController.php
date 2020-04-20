<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\user;
use App\pendapatan;
use App\jadwal;
use App\pemesanan;
use App\penumpang;

class OwnerController extends Controller
{
    public function index(){
        $user = user::find(auth()->guard('owner')->id());
        return view('owner.index',compact('user'));
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
    public function pendapatan(){
        $jumlah_pemesanan = count(pemesanan::get());
        $jumlah_penumpang = count(penumpang::get());

        $pendapatans = pendapatan::get();

        $jumlah_pendapatan = 0;

        foreach ($pendapatans as $pendapatan) {
            $jumlah = $this->convert_to_angka($pendapatan->jumlah);
            $jumlah_pendapatan += $jumlah;
        }

        $jumlah_pendapatan = $this->convert_to_rupiah($jumlah_pendapatan);

        return view('owner.pendapatan',compact('jumlah_pemesanan','jumlah_penumpang','jumlah_pendapatan','pendapatans'));
    }

    public function operator(){
        $operators = user::where('role','operator')->get();
    	return view('owner.operator',compact('operators'));
    }
    public function tambah_operator(){
        return view('owner.tambah_operator');
    }
    public function simpan_operator(Request $request){

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
                'role' => 'operator'
            ]);

            $notif = [
                'message' => 'berhasil menambahkan data operator',
                'alert-type' => 'success'
            ];

            return back()->with($notif);

        }
    }
    public function lihat_operator($id){
        $operator = user::find($id);
        return view('owner.lihat_operator',compact('operator'));
    }
    public function edit_operator($id){
        $operator = user::find($id);
        return view('owner.edit_operator',compact('operator'));
    }
    public function update_operator(Request $request){

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
                'message' => "berhasil mengupdate data operator",
                'alert-type' => 'success'
            ];
            return redirect(url('/owners/operator'))->with($notif);
        }
    }
    public function hapus_operator(Request $request){
        user::where('id',$request->id)->delete();

        $notif = [
            'message' => 'berhasil menghapus data operator',
            'alert-type' => 'success'
        ];

        return back()->with($notif);
    }
    public function logout(){
        auth()->guard('owner')->logout();
        $notif = [
            'message' => "berhasil logout",
            'alert-type' => "success"
        ];
        return redirect(url('login'))->with($notif);
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