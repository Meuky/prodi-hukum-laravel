<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'alasan' => 'required|string|max:2000',
        ]);

        Pendaftaran::create($validated);

        return redirect()->route('pendaftaran')->with('success', 'Pendaftaran berhasil dikirim.');
    }

    public function adminIndex()
    {
        $pendaftaran = Pendaftaran::latest()->paginate(15);
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }
}
