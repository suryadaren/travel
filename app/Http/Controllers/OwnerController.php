<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
    	return view('owner.index');
    }
    public function operator(){
    	return view('owner.operator');
    }
    public function tambah_operator(){
        return view('owner.tambah_operator');
    }
    public function lihat_operator($id){
        return view('owner.lihat_operator');
    }
    public function edit_operator($id){
        return view('owner.edit_operator');
    }
}