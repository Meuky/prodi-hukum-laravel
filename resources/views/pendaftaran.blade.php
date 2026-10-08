<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - Program Studi Hukum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --primary:#12385f; --primary-dark:#0c2744; --gold:#d4af37; --white:#fff; --light:#f4f7fb; --muted:#5a6475; --shadow:0 12px 30px rgba(18,56,95,0.12); }
        * { box-sizing: border-box; }
        body { margin:0; font-family:'Poppins',sans-serif; color:#1f2937; background:#fff; }
        a { text-decoration:none; color:inherit; }
        .container { width: min(1120px, calc(100% - 32px)); margin:0 auto; }
        .header { background: rgba(12,39,68,0.96); position: sticky; top:0; z-index:10; }
        .navbar { min-height:78px; display:flex; justify-content:space-between; align-items:center; }
        .logo { display:flex; align-items:center; gap:12px; color:white; }
        .logo-mark { width:42px; height:42px; display:flex; align-items:center; justify-content:center; border-radius:12px; background: linear-gradient(135deg, var(--gold), #f7d76a); color: var(--primary-dark); font-weight:800; }
        .nav { display:flex; gap:28px; }
        .nav a { color: rgba(255,255,255,0.8); }
        .nav a:hover { color:white; }
        .page-hero { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff; padding: 90px 0 60px; }
        .badge { display:inline-block; padding:10px 18px; border-radius:999px; background: rgba(212,175,55,0.16); border:1px solid rgba(212,175,55,0.2); }
        .page-hero h1 { margin-top: 18px; font-size: clamp(2.2rem, 4vw, 3.5rem); }
        .page-hero p { color: rgba(255,255,255,0.8); }
        .content { padding: 80px 0; }
        .form-wrap { display:grid; grid-template-columns: 1.1fr 0.9fr; gap: 32px; }
        .form-card, .info-card { background:white; border-radius:20px; box-shadow: var(--shadow); padding: 30px 28px; }
        .form-card h3, .info-card h3 { color: var(--primary); margin-bottom:18px; }
        .form-group { margin-bottom:18px; }
        label { display:block; margin-bottom:8px; color: var(--primary); font-weight:600; }
        input, select, textarea { width:100%; border:1px solid #dfe7f0; padding:14px 16px; border-radius:12px; font-family:'Poppins',sans-serif; }
        textarea { min-height:140px; resize:vertical; }
        .btn { display:inline-flex; align-items:center; justify-content:center; padding:14px 26px; border:none; border-radius:12px; font-weight:700; background: var(--gold); color: var(--primary-dark); cursor:pointer; }
        .info-card ul { list-style:disc; padding-left:20px; color: var(--muted); }
        .footer { background: #0b2038; color: rgba(255,255,255,0.8); }
        .footer-inner { display:flex; justify-content:space-between; gap:30px; padding:40px 0; }
        .footer h3, .footer h4 { color:white; }
        .footer-bottom { border-top:1px solid rgba(255,255,255,0.08); text-align:center; padding:18px 0; }
        @media (max-width:980px){ .form-wrap { grid-template-columns:1fr; } }
        @media (max-width:760px){ .nav{display:none;} .footer-inner { display:block; } }
    </style>
</head>
<body>
<header class="header">
    <nav class="navbar container">
        <div class="logo"><span class="logo-mark">H</span><div><strong>Prodi Hukum</strong></div></div>
        <div class="nav">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang</a>
            <a href="{{ route('dosen') }}">Dosen</a>
            <a href="{{ route('berita') }}">Berita</a>
            <a href="{{ route('pendaftaran') }}">Pendaftaran</a>
        </div>
    </nav>
</header>

<main>
    <section class="page-hero">
        <div class="container">
            <span class="badge">Pendaftaran</span>
            <h1>Daftar Mahasiswa Baru</h1>
            <p>Mulai langkah Anda menuju masa depan yang lebih baik bersama Program Studi Hukum.</p>
        </div>
    </section>

    <section class="content">
        <div class="container form-wrap">
            <div class="form-card">
                <h3>Formulir Pendaftaran</h3>
                @if(session('success'))
                    <div style="background:#e8f7ed; color:#155724; padding:12px 16px; border-radius:10px; margin-bottom:16px;">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('pendaftaran.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan asal sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" name="jurusan" required>
                            <option value="">Pilih jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Bahasa">Bahasa</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alasan">Alasan Memilih Prodi Hukum</label>
                        <textarea id="alasan" name="alasan" placeholder="Tuliskan alasan Anda memilih Prodi Hukum" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pendaftaran</button>
                </form>
            </div>
            <div class="info-card">
                <h3>Persyaratan</h3>
                <ul>
                    <li>Fotocopy ijazah atau surat keterangan lulus</li>
                    <li>Nilai rapor terakhir</li>
                    <li>Pas foto ukuran 3x4</li>
                    <li>Scan KTP atau kartu identitas</li>
                </ul>
                <br>
                <h3>Jadwal</h3>
                <ul>
                    <li>Pendaftaran: 1 - 31 Juli 2027</li>
                    <li>Seleksi: 2 - 5 Agustus 2027</li>
                    <li>Pengumuman: 8 Agustus 2027</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <div><h3>Program Studi Hukum</h3><p>Mencetak lulusan yang unggul, berintegritas, dan peduli masyarakat.</p></div>
        <div><h4>Kontak</h4><ul><li>Jl. Pendidikan No. 12, Kota Baru</li><li>Email: hukum@kampus.ac.id</li><li>Telepon: (021) 1234-5678</li></ul></div>
    </div>
    <div class="footer-bottom">© {{ date('Y') }} Program Studi Hukum. Semua Hak Dilindungi.</div>
</footer>
</body>
</html>
