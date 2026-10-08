<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'alasan' => 'required|string',
        ]);

        DB::table('mahasiswa_baru')->insert([
            'nama_lengkap' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'asal_sekolah' => $validated['asal_sekolah'],
            'jurusan' => $validated['jurusan'],
            'alasan' => $validated['alasan'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('pendaftaran')->with('success', 'Pendaftaran berhasil dikirim.');
    }
}
