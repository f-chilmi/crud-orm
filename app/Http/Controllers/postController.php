<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
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
        // dd($request->all());
        // $request ->validate([
        //     'judul' => 'required',
        //     'isi' => 'required',
        // ]);

        // $query = DB::table('pertanyaan')->insert([
        //     "judul" => $request["title"],
        //     "isi" => $request["body"],
        //     "tanggal_dibuat" => $request["dateInput"],
        //     "tanggal_diperbaharui" => $request["dateUpdate"]
        //     ]
        // );

        // $pertanyaan = new Pertanyaan;
        // $pertanyaan -> judul = $request["title"];
        // $pertanyaan -> isi = $request["body"];
        // $pertanyaan -> save();

        $pertanyaan = Pertanyaan::create([
            "judul" => $request["title"],
            "isi" => $request["body"]
        ]);
        // dd($pertanyaan);
        
        return redirect ('/posts')->with('success', 'Pertanyaan berhasil ditambahkan');
    }
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        return view('posts.index', compact('pertanyaan'));
    }
    public function show($pertanyaanId){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaanId)->first();
        // dd($pertanyaan);
        return view('posts.show', compact('pertanyaan'));
    }
    public function edit($pertanyaanId){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaanId)->first();
        // dd($pertanyaan);

        return view('posts.edit', compact('pertanyaan'));
    }
    public function update($pertanyaanId, Request $request){
        $affected = DB::table('pertanyaan')
                    -> where('id', $pertanyaanId)
                    -> update([
                        'judul' => $request['title'],
                        'isi' => $request['body'],
                        'tanggal_diperbaharui' => $request['dateUpdate']
                    ]);
        
        return redirect ('/posts')->with('success', 'Pertanyaan berhasil diperbaharui');
    }

    public function destroy($pertanyaanId){
        $query = DB::table('pertanyaan')->where('id', $pertanyaanId)->delete();

        return redirect ('/posts')->with('success', 'Berhasil dihapus');
    }
}
