<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('about');
    }

    public function dosen()
    {
        return view('dosen');
    }

    public function berita()
    {
        return view('berita');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }
}
