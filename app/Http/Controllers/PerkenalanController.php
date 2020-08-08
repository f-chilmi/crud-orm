<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    
    public function hai($nama_depan, $nama_belakang){
        return "hai $nama_depan $nama_belakang";
    }

    public function halo($nama_depan, $nama_belakang){
        $nama_lengkap = "$nama_depan $nama_belakang";

        return view('perkenalan', compact('nama_lengkap'));
    }

    public function form(){
        return view('halaman2');
    }

    public function welcome(Request $request){
        dd($request->all());
        
    }
}
