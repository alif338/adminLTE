<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index() {
        $judul = DB::table('pertanyaan')->get();
        //dd($judul);
        return view('form_pertanyaan.index', compact('judul'));
    }

    public function create() {
        return view('form_pertanyaan.new_pertanyaan');
    }

    public function store(Request $request) {
       // dd($request->all());
       $request->validate([
           "judul" => "required|unique:pertanyaan",
           "isi" => 'required'
       ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
            ]);


        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil dibuat');
    }

    public function show($id) {
        $post = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($post);
        return view('form_pertanyaan.show',compact('post'));
    }

    public function edit($id) {
        $post = DB::table('pertanyaan')->where('id',$id)->first();
        return view('form_pertanyaan.edit',compact('post'));
    }

    public function update($id, Request $request) {
        $request->validate([
            "judul" => "required",
            "isi" => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"]
                    ]);
        return redirect('/pertanyaan')->with('success','Berhasil Update Pertanyaan!');
    }

    public function destroy($id) {
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('success','Pertanyaan Dihapus!');

    }
}
