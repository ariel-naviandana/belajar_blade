<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class BlogController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('blog.index', ['penulis' => $penulis, 'title' => 'Daftar Penulis']);
    }

    public function tentang()
    {
        return view('blog.tentang');
    }

    public function kontak()
    {
        return view('blog.kontak');
    }
}
