<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Program Studi Hukum</title>
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
        .news-grid { display:grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap:24px; }
        .news-card { background:white; border-radius:20px; overflow:hidden; box-shadow:var(--shadow); }
        .news-card img { width:100%; height:220px; object-fit:cover; }
        .news-body { padding:20px; }
        .news-date { color: var(--gold); font-weight:600; font-size:0.8rem; }
        .news-body h3 { margin:10px 0; color: var(--primary); }
        .news-body p { color: var(--muted); }
        .footer { background: #0b2038; color: rgba(255,255,255,0.8); }
        .footer-inner { display:flex; justify-content:space-between; gap:30px; padding:40px 0; }
        .footer h3, .footer h4 { color:white; }
        .footer-bottom { border-top:1px solid rgba(255,255,255,0.08); text-align:center; padding:18px 0; }
        @media (max-width:980px){ .news-grid { grid-template-columns: repeat(2, minmax(0,1fr)); } }
        @media (max-width:760px){ .nav{display:none;} .news-grid{grid-template-columns:1fr;} .footer-inner { display:block; } }
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
            <span class="badge">Berita</span>
            <h1>Berita dan Informasi Terbaru</h1>
            <p>Update kegiatan, seminar, prestasi, dan inovasi di Program Studi Hukum.</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="news-grid">
                <article class="news-card"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">12 Oktober 2026</div><h3>Seminar Hukum dan Keadilan Sosial</h3><p>Program Studi Hukum menyelenggarakan seminar nasional untuk memperkuat pemahaman mahasiswa terhadap isu hukum terkini.</p></div></article>
                <article class="news-card"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">08 Oktober 2026</div><h3>Pelatihan Argumentasi Hukum</h3><p>Mahasiswa mengikuti workshop legal reasoning dan simulasi kasus untuk meningkatkan kemampuan analisis hukum.</p></div></article>
                <article class="news-card"><img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">03 Oktober 2026</div><h3>Kerja Sama dengan Lembaga Hukum</h3><p>Program Studi Hukum membuka peluang kolaborasi magang dan pembelajaran langsung dengan lembaga pengadilan.</p></div></article>
                <article class="news-card"><img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">25 September 2026</div><h3>Mahasiswa Raih Juara Debat Hukum Nasional</h3><p>Tim debat hukum mahasiswa berhasil meraih prestasi di ajang kompetisi hukum tingkat nasional.</p></div></article>
                <article class="news-card"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">18 September 2026</div><h3>Workshop Hukum Digital</h3><p>Mahasiswa dibekali pemahaman tentang perkembangan hukum di era digital serta implikasinya terhadap masyarakat.</p></div></article>
                <article class="news-card"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Berita"><div class="news-body"><div class="news-date">10 September 2026</div><h3>Klinik Hukum Mahasiswa Dibuka</h3><p>Klinik Hukum mahasiswa menghasilkan layanan bantuan hukum dasar untuk masyarakat sekitar kampus.</p></div></article>
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
