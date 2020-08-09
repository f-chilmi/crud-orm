<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postController extends Controller
{
    //
    public function create(){
        return view('posts.create');
    }
    public function createProfile(){
        return view('posts.createProfile');
    }

    public function storeProfile(Request $request){
        // dd($request->all());
        $query = DB::table('profile')->insert([
            "nama_lengkap" => $request["fullName"],
            "email" => $request["email"],
            "foto" => $request["foto"],
            ]
        );
        return redirect ('/posts/create/profile');
    }
    public function store(Request $request){
        dd($request->all());
        // $query = DB::table('pertanyaan')->insert([
        //     "judul" => $request["title"],
        //     "isi" => $request["body"],
        //     "tanggal_dibuat" => $request["dateInput"],
        //     "tanggal_diperbaharui" => $request["dateUpdate"]
        //     ]
        // );
        // return redirect ('/posts/create');
    }
}
