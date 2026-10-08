<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'asal_sekolah',
        'jurusan',
        'alasan',
        'status',
    ];
}
