<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('ringkasan');
            $table->longText('isi');
            $table->string('gambar')->nullable();
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->timestamps();
        });

        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gelar')->nullable();
            $table->string('bidang');
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->text('alasan');
            $table->enum('status', ['baru', 'diterima', 'ditolak'])->default('baru');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
        Schema::dropIfExists('dosen');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('users');
    }
};
