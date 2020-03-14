<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
    	return view('driver.index');
    }
    public function riwayat(){
        return view('driver.riwayat');
    }
    public function lihat_riwayat($id){
        return view('driver.lihat_riwayat');
    }
}
