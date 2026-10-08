<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Program Studi Hukum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --primary:#12385f; --primary-dark:#0c2744; --gold:#d4af37; --white:#fff; --light:#f4f7fb; --muted:#5a6475; --shadow:0 12px 30px rgba(18,56,95,0.12); }
        * { box-sizing: border-box; }
        body { margin:0; font-family:'Poppins',sans-serif; color:#1f2937; background:#fff; }
        a { text-decoration:none; color:inherit; }
        ul { margin:0; padding-left: 18px; }
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
        .info-box { background:white; border-radius:20px; box-shadow: var(--shadow); padding: 32px 28px; }
        .info-box h3 { color: var(--primary); margin-bottom: 12px; }
        .info-box p, .info-box li { color: var(--muted); }
        .footer { background: #0b2038; color: rgba(255,255,255,0.8); }
        .footer-inner { display:flex; justify-content:space-between; gap:30px; padding:40px 0; }
        .footer h3, .footer h4 { color:white; }
        .footer-bottom { border-top:1px solid rgba(255,255,255,0.08); text-align:center; padding:18px 0; }
        @media (max-width:760px){ .nav { display:none; } .footer-inner { display:block; } }
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
            <span class="badge">Tentang Kami</span>
            <h1>Program Studi Hukum</h1>
            <p>Membangun generasi pemimpin hukum yang cerdas, berintegritas, dan peduli masyarakat.</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="info-box">
                <h3>Visi</h3>
                <p>Menjadi program studi hukum yang unggul, inovatif, dan berdaya saing dalam menghasilkan lulusan yang profesional dan berakhlak.</p>
                <br>
                <h3>Misi</h3>
                <ul>
                    <li>Menyelenggarakan pendidikan hukum berkualitas dan relevan.</li>
                    <li>Mengembangkan penelitian yang berkontribusi pada sistem hukum.</li>
                    <li>Membina pengabdian masyarakat untuk solusi hukum yang bermanfaat.</li>
                    <li>Membangun kerja sama strategis dengan lembaga pemerintah dan swasta.</li>
                </ul>
                <br>
                <h3>Nilai Utama</h3>
                <p>Program Studi Hukum mengedepankan integritas, keadilan, profesionalisme, dan kepedulian sosial dalam setiap pembelajaran.</p>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <div>
            <h3>Program Studi Hukum</h3>
            <p>Mencetak lulusan yang unggul, berintegritas, dan peduli masyarakat.</p>
        </div>
        <div>
            <h4>Kontak</h4>
            <ul>
                <li>Jl. Pendidikan No. 12, Kota Baru</li>
                <li>Email: hukum@kampus.ac.id</li>
                <li>Telepon: (021) 1234-5678</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">© {{ date('Y') }} Program Studi Hukum. Semua Hak Dilindungi.</div>
</footer>
</body>
</html>
