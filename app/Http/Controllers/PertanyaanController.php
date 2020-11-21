<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    // ==================== INDEX ====================
    public function index ()
    {
        $pertanyaan = DB::table('pertanyaan')->get();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    // ==================== CREATE ====================
    public function create() 
    {
        return view('pertanyaan.create');
    }

    // ==================== STORE ====================
    public function store(Request $request) 
    {   
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
            // 'tanggal_dibuat' => 'required',
            // 'tanggal_diperbaharui' => 'required',
            // 'user_id' => 'required',
            // 'jawaban_id' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
            // "tanggal_dibuat" => $request["tanggal_dibuat"],
            // "tanggal_diperbaharui" => $request["tanggal_diperbaharui"],
            // "user_id" => $request["user_id"],
            // "jawaban_id" => $request["jawaban_id"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }
    
    // ==================== SHOW ====================
    public function show ($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    // ==================== EDIT ====================
    public function edit ($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    // ==================== UPDATE ====================
    public function update ($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
            // 'tanggal_dibuat' => 'required',
            // 'tanggal_diperbaharui' => 'required',
            // 'user_id' => 'required',
            // 'jawaban_id' => 'required'
        ]);
       
        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        "judul" => $request["judul"],
                        "isi" => $request["isi"]
                        // "tanggal_dibuat" => $request["tanggal_dibuat"],
                        // "tanggal_diperbaharui" => $request["tanggal_diperbaharui"],
                        // "user_id" => $request["user_id"],
                        // "jawaban_id" => $request["jawaban_id"]
                    ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Diubah!');
    }

    // ==================== DESTROY ====================
    public function destroy ($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Dihapus!');
    }
}
