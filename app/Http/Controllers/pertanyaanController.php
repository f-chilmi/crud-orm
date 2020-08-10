<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use DB;

class PertanyaanController extends Controller
{
    //
    public function store(Request $request){
        $pertanyaan = new Pertanyaan;
        $pertanyaan -> judul = $request["title"];
        $pertanyaan -> isi = $request["body"];
        $pertanyaan -> save();

        return redirect ('/posts')->with('success', 'Pertanyaan berhasil ditambahkan');
    }
    
}
