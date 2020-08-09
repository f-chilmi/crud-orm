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

    public function store(Request $request){
        // dd($request->all());
        $query = DB::table('posts')->insert([
            // "judul" => $request["title"],
            // "isi" => $request["body"],
            "created_at" => $request["dateInput"],
            "updated_at" => $request["dateUpdate"]
            ]
        );
        return redirect ('/posts/create');
    }
}
