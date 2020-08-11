<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
<<<<<<< HEAD
use App\Pertanyaan;
=======
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39

class PertanyaanController extends Controller
{
    public function index() {
<<<<<<< HEAD
        //$judul = DB::table('pertanyaan')->get();
        $judul = Pertanyaan::all();
       //    dd($judul);
=======
        $judul = DB::table('pertanyaan')->get();
        //dd($judul);
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39
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
<<<<<<< HEAD
        //$query = DB::table('pertanyaan')->insert([
          //  "judul" => $request["judul"],
          //  "isi" => $request["isi"]
          //   ]);

         //   $ask = new Pertanyaan;
         //   $ask->judul = $request["judul"];
         //   $ask->isi = $request["isi"];
         //   $ask->save(); //insert into pertanyaan (judul, isi) values

         $ask = Pertanyaan::create([
             "judul" =>$request["judul"],
             "isi" => $request["isi"]
         ]);
=======
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
            ]);

>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39

        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil dibuat');
    }

    public function show($id) {
<<<<<<< HEAD
       // $post = DB::table('pertanyaan')->where('id',$id)->first();
       $post = Pertanyaan::find($id);
=======
        $post = DB::table('pertanyaan')->where('id',$id)->first();
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39
        //dd($post);
        return view('form_pertanyaan.show',compact('post'));
    }

    public function edit($id) {
<<<<<<< HEAD
        //$post = DB::table('pertanyaan')->where('id',$id)->first();
        $post = Pertanyaan::find($id);
=======
        $post = DB::table('pertanyaan')->where('id',$id)->first();
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39
        return view('form_pertanyaan.edit',compact('post'));
    }

    public function update($id, Request $request) {
<<<<<<< HEAD
      //  $request->validate([
      //      "judul" => "required",
      //      "isi" => 'required'
      //  ]);

       // $query = DB::table('pertanyaan')
       //             ->where('id', $id)
        //            ->update([
        //                'judul' => $request["judul"],
        //                'isi' => $request["isi"]
        //            ]);
        $update = Pertanyaan::where('id', $id)->update ([
            "judul" => $request['judul'],
            "isi" => $request['isi']
        ]);
=======
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
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39
        return redirect('/pertanyaan')->with('success','Berhasil Update Pertanyaan!');
    }

    public function destroy($id) {
<<<<<<< HEAD
       // $query = DB::table('pertanyaan')->where('id',$id)->delete();
       Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('warning','Pertanyaan Dihapus!');
=======
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('success','Pertanyaan Dihapus!');
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39

    }
}
