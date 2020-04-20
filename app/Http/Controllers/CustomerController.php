<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\kota;
use App\user;
use App\pemesanan;
use App\penumpang;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Jobs\sendEmailPembayaranJob;
use App\Jobs\sendEmailUploadBuktiPembayaran;
use PDF;

class CustomerController extends Controller
{
	public function index(){
		$pemesanans = pemesanan::where('customer_id',auth()->guard('customer')->id())->get();
		return view('customer.index',compact('pemesanans'));
	}
	public function lihat_pemesanan($id){
		$pemesanan = pemesanan::find($id);
		return view('customer.lihat_pemesanan',compact('pemesanan'));
	}
	public function simpan_bukti_pembayaran(Request $request){
		$pemesanan = pemesanan::find($request->id);
		$pathFoto = $request->bukti_pembayaran->store('public/bukti_pembayaran');
		$pemesanan->bukti_pembayaran = $pathFoto;
		$pemesanan->status = "menunggu verifikasi pembayaran";
		$pemesanan->save();

		$operator = user::where('role','operator')->first();

		$this->dispatch(new sendEmailUploadBuktiPembayaran($request->id,$operator->email));

		$notif = [
            'message' => "berhasil melakukan mengupload bukti pembayaran",
            'alert-type' => 'success'
        ];
        return back()->with($notif);
	}
    public function download_tiket($id){
        $pemesanan = pemesanan::find($id);
        $pdf = PDF::loadview('tiket.tiket', ['pemesanan' => $pemesanan]);
        return $pdf->download('Tiket Travel Agency'.$pemesanan->id);
    }
    public function pesan($id,$jumlah){
        $jadwal = jadwal::find($id);
    	return view('home.pesan',compact('jadwal','jumlah'));
    }
    public function informasi_pemesanan(Request $request){
    	$jadwal_id = $request->jadwal_id;
    	$nama_penumpang = $request->nama_penumpang;
    	$nomor_ktp = $request->nomor_ktp;
    	$jenis_kelamin = $request->jenis_kelamin;
    	$jumlah_penumpang = count($nama_penumpang);

    	// menghitung total pembayaran tiket
    	$jadwal = jadwal::find($request->jadwal_id);
    	$harga_tiket = $this->convert_to_angka($jadwal->harga_tiket);
    	$total = $jumlah_penumpang*$harga_tiket;
    	$total = $this->convert_to_rupiah($total);
    	
    	return view('home.informasi_pemesanan',compact('jadwal_id','nama_penumpang','nomor_ktp','jenis_kelamin','total','jumlah_penumpang'));
    }
    public function buat_pemesanan(Request $request){
    	$jumlah_penumpang = count($request->nama_penumpang);

    	// membuat id transaksi
    	$id_transaction = $this->generateBarcodeNumber();

    	$harga = $request->harga;

        // membuat expired pembayaran
        $now = Carbon::now();
        $expired = $now->addHours(3)->format("Y:m:d H:i:s");

    	$pemesanan = pemesanan::create([
    		"id" => $id_transaction,
    		"customer_id" => auth()->guard('customer')->id(),
    		"jadwal_id" => $request->jadwal_id,
    		"jumlah_penumpang" => $jumlah_penumpang,
    		"harga" => $harga,
			"nama_bank" => $request->nama_bank,
			"nomor_rekening" => $request->nomor_rekening,
			"nama_pemilik" => $request->nama_pemilik,
    		"status" => "menunggu pembayaran",
            "expired_pembayaran" => $expired
    	]);

        $jadwal = jadwal::find($request->jadwal_id);
        $kursi_tersedia = $jadwal->kursi_tersedia;
        $jadwal->kursi_tersedia = $kursi_tersedia - $pemesanan->jumlah_penumpang;
        $jadwal->save();

    	for ($i=0; $i < count($request->nama_penumpang); $i++) { 
    		penumpang::create([
    			"pemesanan_id" => $id_transaction,
    			"jadwal_id" => $request->jadwal_id,
    			"nomor_ktp" => $request->nomor_ktp[$i],
    			"nama" => $request->nama_penumpang[$i],
    			"jenis_kelamin" => $request->jenis_kelamin[$i],
    		]);
    	}

        $this->dispatch(new sendEmailPembayaranJob($id_transaction,auth()->guard('customer')->user()->email));

        $notif = [
            'message' => "berhasil melakukan pemesanan, silahkan check email untuk info pembayaran",
            'alert-type' => 'success'
        ];
        return redirect(url('/customers'))->with($notif);

    }
    public function thankyou(){
    	return view('home.thankyou');
    }

    public function logout(){
        auth()->guard('customer')->logout();
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
    function generateBarcodeNumber() {
    $number = mt_rand(1000000000, 9999999999); // better than rand()

    // call the same function if the barcode exists already
    if ($this->barcodeNumberExists($number)) {
        return $this->generateBarcodeNumber();
    }

    // otherwise, it's valid and can be used
    return $number;
	}

	function barcodeNumberExists($number) {
	    // query the database and return a boolean
	    // for instance, it might look like this in Laravel
	    return pemesanan::where("id",$number)->exists();
	}
}
