# Prodi Hukum Laravel

Website profil Program Studi Hukum yang dibuat dengan Laravel.

## Persiapan

1. Pastikan PHP 8.2+ dan Composer sudah terinstal.
2. Jalankan:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

3. Buka browser ke `http://localhost:8000`.

## Fitur

- Halaman beranda
- Halaman tentang
- Halaman dosen
- Halaman berita
- Halaman pendaftaran
- Form pendaftaran dengan validasi dan penyimpanan ke database SQLite

## Struktur utama

- `routes/web.php`
- `app/Http/Controllers/HomeController.php`
- `app/Http/Controllers/PendaftaranController.php`
- `resources/views/*.blade.php`
- `database/migrations/2026_10_08_000001_create_mahasiswa_baru_table.php`
