<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', ['penulis' => $penulis, 'title' => 'Daftar Penulis']);
    }

    public function add()
    {
        return view('penulis.add', ['title' => 'Tambah Penulis']);
    }

    public function addSave(Request $req)
    {
        Penulis::create([
            'nama' => $req->nama,
            'alamat' => $req->alamat
        ]);

        return redirect('/penulis');
    }

    public function getAll()
    {
        $penulis = Penulis::all();
        return response()->json($penulis, 200);
    }

    public function getPenulis($id)
    {
        $penulis = Penulis::find($id);
        return response()->json($penulis, 200);
    }
}
