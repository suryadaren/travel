<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index');
    }
    public function jadwal(){
    	return view('home.jadwal');
    }
    public function pesan(){
    	return view('home.pesan');
    }
    public function bayar(){
    	return view('home.bayar');
    }
    public function thankyou(){
    	return view('home.thankyou');
    }
}
