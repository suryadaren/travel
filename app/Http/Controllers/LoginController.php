<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Validator;
use Crypt;
use App\Jobs\verifyEmailJob;

class LoginController extends Controller
{
    public function login(){
    	return view('login');
    }
    public function checkLogin(Request $request){
    	if(auth()->guard('owner')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'owner'])){

    		$notif = [
    			'message' => 'selamat datang '.auth()->guard('owner')->user()->nama,
    			'alert-type' => 'success'
    		];

    		return redirect(url('owners'))->with($notif);

    	}elseif(auth()->guard('operator')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'operator'])){

            $notif = [
                'message' => 'selamat datang '.auth()->guard('operator')->user()->nama,
                'alert-type' => 'success'
            ];

            return redirect(url('operators'))->with($notif);

        }elseif(auth()->guard('customer')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'customer'])){

            if (auth()->guard('customer')->user()->status == "menunggu verifikasi") {
                
                $notif = [
                    'message' => 'Silahkan Verifikasi Email Anda',
                    'alert-type' => 'error'
                ];

                auth()->guard('customer')->logout();

                return back()->with($notif);
            }else{
                $notif = [
                    'message' => 'Selamat anda berhasil Login',
                    'alert-type' => 'success'
                ];

                return redirect(url('/'))->with($notif);
            }

        }elseif(auth()->guard('driver')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'driver'])){

                $notif = [
                    'message' => 'Selamat anda berhasil Login',
                    'alert-type' => 'success'
                ];

                return redirect(url('/drivers'))->with($notif);

        }else{

    		$notif = [
    			'message' => 'email/password anda salah',
    			'alert-type' => 'error'
    		];

    		return back()->with($notif);
    	}
    	return view('login');
    }
    public function register(){
    	return view('register');
    }
    public function simpan_register(Request $request){
         $validator = Validator::make($request->all(),[
            'email' => 'required|unique:user',
            'password' => 'required',
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ],
        [
            'email.required' => 'email tidak boleh kosong',
            'email.unique' => 'email ini telah digunakan',
            'password.required' => 'password tidak boleh kosong',
            'nama.required' => 'nama tidak boleh kosong',
            'nomor_telepon.required' => 'nomor telepon tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'foto.required' => 'foto tidak boleh kosong',
        ]);
         if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
         }else{
            $pathFoto = $request->foto->store('public/foto');
            $data = [
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'nama' => $request->nama,
                'nomor_telepon' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'status' => 'menunggu verifikasi',
                'role' => 'customer',
                'foto' => $pathFoto,
            ];
            $user = user::create($data);

            $this->dispatch(new verifyEmailJob($user));

            $notif = [
                "message" => "Berhasil melakukan pendaftaran, silahkan verifikasi melalui email",
                "alert-type" => "success"
            ];
            return redirect(url('/login'))->with($notif);
         }
    }
    public function verify(){
        if (empty(request('token'))) {
            return redirect(url('/register'));
        }

        $decryptedEmail = Crypt::decrypt(request('token'));
        $user = user::where('email',$decryptedEmail)->first();
        $user->status = "aktif";
        $user->save();

        return redirect(url('/verifySuccess'));
    }
    public function verifySuccess(){
        return view('home.verifySuccess');
    }
}
