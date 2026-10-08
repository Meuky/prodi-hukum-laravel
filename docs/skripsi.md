# Dokumentasi Skripsi: Sistem Informasi Profil Program Studi Hukum Berbasis Laravel

## 1. Latar Belakang
Program Studi Hukum membutuhkan sistem informasi yang mampu menampilkan profil, dosen, berita, serta proses pendaftaran mahasiswa baru secara digital. Saat ini, penyampaian informasi masih terbatas pada media konvensional. Oleh karena itu, pengembangan sistem berbasis web menjadi solusi yang relevan untuk mendukung kebutuhan promosi, komunikasi, dan administrasi.

## 2. Rumusan Masalah
1. Bagaimana merancang sistem informasi profil Program Studi Hukum berbasis Laravel?
2. Bagaimana sistem dapat menampilkan profil program studi, dosen, dan berita secara terstruktur?
3. Bagaimana sistem dapat memudahkan proses pendaftaran mahasiswa baru?
4. Bagaimana sistem admin dapat mengelola data secara efektif?

## 3. Tujuan Penelitian
1. Membangun sistem informasi profil Program Studi Hukum berbasis Laravel.
2. Menyediakan halaman yang memuat profil, dosen, dan berita.
3. Meningkatkan efisiensi proses pendaftaran mahasiswa baru.
4. Mempermudah admin dalam mengelola data.

## 4. Manfaat Penelitian
- Bagi Program Studi: media promosi yang lebih profesional.
- Bagi Mahasiswa: mudah memperoleh informasi.
- Bagi Admin: operasional pengelolaan data lebih efektif.
- Bagi Akademik: pengembangan teknologi berbasis web yang relevan.

## 5. Metode Penelitian
Penelitian ini menggunakan metode pengembangan sistem berbasis web dengan pendekatan Waterfall, meliputi analisis kebutuhan, perancangan, implementasi, pengujian, dan evaluasi.

## 6. Teknologi yang Digunakan
- Laravel 11
- PHP 8.2
- SQLite untuk pengembangan awal
- Blade Template
- MySQL dapat digunakan untuk deployment lanjutan
- HTML, CSS, JavaScript

## 7. Diagram Sistem
ERD:
- User (Admin)
- Berita
- Dosen
- Pendaftaran

Hubungan:
- Admin mengelola berita
- Admin mengelola dosen
- Mahasiswa mengisi formulir pendaftaran

## 8. Kesimpulan
Sistem informasi berbasis Laravel ini diharapkan mampu menjadi solusi digital yang modern, profesional, dan relevan untuk kebutuhan Program Studi Hukum.

## 9. Struktur Folder Utama
- app/
- config/
- database/
- public/
- resources/views/
- routes/

## 10. Petunjuk Jalankan
1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate --seed
5. php artisan serve
