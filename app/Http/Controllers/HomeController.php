<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'published')->latest()->take(3)->get();
        $dosen = Dosen::latest()->take(3)->get();
        return view('home', compact('berita', 'dosen'));
    }

    public function tentang()
    {
        return view('about');
    }

    public function dosen()
    {
        $dosen = Dosen::latest()->get();
        return view('dosen', compact('dosen'));
    }

    public function berita()
    {
        $berita = Berita::where('status', 'published')->latest()->paginate(6);
        return view('berita', compact('berita'));
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }
}
