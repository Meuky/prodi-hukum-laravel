<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi Hukum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #12385f;
            --primary-dark: #0c2744;
            --gold: #d4af37;
            --white: #fff;
            --light: #f4f7fb;
            --muted: #5a6475;
            --shadow: 0 12px 30px rgba(18, 56, 95, 0.12);
        }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Poppins', sans-serif; color: #1f2937; background: #fff; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; padding: 0; margin: 0; }
        .container { width: min(1120px, calc(100% - 32px)); margin: 0 auto; }
        .header { background: rgba(12, 39, 68, 0.96); position: sticky; top: 0; z-index: 10; }
        .navbar { display: flex; justify-content: space-between; align-items: center; min-height: 78px; }
        .logo { display: flex; align-items: center; gap: 12px; color: white; }
        .logo-mark { width: 42px; height: 42px; border-radius: 12px; background: linear-gradient(135deg, var(--gold), #f7d76a); color: var(--primary-dark); display: flex; align-items: center; justify-content: center; font-weight: 800; }
        .nav { display: flex; gap: 28px; }
        .nav a { color: rgba(255,255,255,0.8); font-weight: 500; }
        .nav a:hover { color: #fff; }
        .hero { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: white; padding: 80px 0; }
        .hero-grid { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 40px; align-items: center; }
        .badge { display: inline-block; padding: 10px 18px; background: rgba(212,175,55,0.16); border: 1px solid rgba(212,175,55,0.2); border-radius: 999px; color: #fff; font-size: 0.8rem; }
        h1 { font-size: clamp(2.4rem, 5vw, 4rem); line-height: 1.1; margin: 18px 0; }
        .hero p { color: rgba(255,255,255,0.8); max-width: 620px; }
        .hero-actions { display: flex; gap: 18px; margin-top: 28px; }
        .btn { display: inline-flex; padding: 14px 24px; border-radius: 12px; font-weight: 700; }
        .btn-primary { background: var(--gold); color: var(--primary-dark); }
        .btn-secondary { border: 1px solid rgba(255,255,255,0.6); color: white; }
        .hero-stats { display: flex; gap: 24px; margin-top: 32px; }
        .hero-stats strong { display: block; font-size: 1.8rem; color: var(--gold); }
        .hero-stats span { color: rgba(255,255,255,0.8); }
        .hero-image img { width: 100%; height: 520px; object-fit: cover; border-radius: 20px; box-shadow: var(--shadow); }
        .section { padding: 90px 0; }
        .section-alt { background: #f3f7fb; }
        .section-title { text-align: center; margin-bottom: 48px; }
        .section-title span { display: inline-block; color: var(--gold); font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase; font-weight: 700; }
        .section-title h2 { color: var(--primary); font-size: clamp(2rem, 2vw + 1rem, 3rem); margin-top: 10px; }
        .about-grid, .card-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; }
        .card { background: white; border-radius: 20px; box-shadow: var(--shadow); padding: 30px 24px; }
        .card h3 { color: var(--primary); margin-bottom: 12px; }
        .card p, .card li { color: var(--muted); }
        .teacher-card { background: white; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow); }
        .teacher-card img { width: 100%; height: 260px; object-fit: cover; }
        .teacher-body { padding: 20px 18px 24px; }
        .teacher-body h3 { font-size: 1.08rem; color: var(--primary); }
        .news-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; }
        .news-card { background: white; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow); }
        .news-card img { width: 100%; height: 220px; object-fit: cover; }
        .news-body { padding: 20px; }
        .news-date { color: var(--gold); font-weight: 600; font-size: 0.8rem; }
        .news-body h3 { color: var(--primary); margin: 10px 0; }
        .news-body p { color: var(--muted); }
        .cta-box { display: flex; justify-content: space-between; align-items: center; gap: 16px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: 24px; padding: 32px 28px; }
        .cta-box h2 { color: white; margin-top: 10px; }
        .footer { background: #0b2038; color: rgba(255,255,255,0.8); }
        .footer-inner { display: flex; justify-content: space-between; gap: 30px; padding: 40px 0; }
        .footer h3, .footer h4 { color: white; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.08); text-align: center; padding: 18px 0; }
        @media (max-width: 980px) { .hero-grid, .about-grid, .card-grid, .news-grid { grid-template-columns: 1fr 1fr; } .hero-grid { grid-template-columns: 1fr; } }
        @media (max-width: 760px) { .nav { display: none; } .about-grid, .card-grid, .news-grid { grid-template-columns: 1fr; } .cta-box { flex-direction: column; align-items: flex-start; } }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar container">
            <div class="logo">
                <span class="logo-mark">H</span>
                <div><strong>Prodi Hukum</strong></div>
            </div>
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
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <span class="badge">Mendidik Generasi Hukum Masa Depan</span>
                    <h1>Program Studi Hukum</h1>
                    <p>Menjadi pusat pendidikan dan pengembangan hukum yang unggul, berintegritas, serta berkontribusi nyata bagi masyarakat dan bangsa.</p>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="{{ route('pendaftaran') }}">Daftar Sekarang</a>
                        <a class="btn btn-secondary" href="{{ route('tentang') }}">Lihat Profil</a>
                    </div>
                    <div class="hero-stats">
                        <div><strong>12+</strong><span>Pengajar</span></div>
                        <div><strong>800+</strong><span>Mahasiswa</span></div>
                        <div><strong>15+</strong><span>Kerja Sama</span></div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="Mahasiswa hukum">
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <span>Profil</span>
                    <h2>Tentang Program Studi Hukum</h2>
                </div>
                <div class="about-grid">
                    <div class="card">
                        <h3>Visi</h3>
                        <p>Menjadi program studi hukum yang unggul dan berdaya saing dalam menghasilkan sarjana hukum yang profesional dan berintegritas.</p>
                    </div>
                    <div class="card">
                        <h3>Misi</h3>
                        <p>Menyelenggarakan pendidikan, penelitian, dan pengabdian masyarakat yang relevan dengan kebutuhan hukum nasional.</p>
                    </div>
                    <div class="card">
                        <h3>Fokus</h3>
                        <p>Menghasilkan lulusan yang siap menghadapi tantangan hukum kontemporer dan berkontribusi bagi keadilan sosial.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-alt">
            <div class="container">
                <div class="section-title">
                    <span>Dosen</span>
                    <h2>Pendidik Berpengalaman</h2>
                </div>
                <div class="card-grid">
                    <article class="teacher-card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=600&q=80" alt="Dosen">
                        <div class="teacher-body">
                            <h3>Dr. Rina Wijaya, S.H., M.H.</h3>
                            <p>Hukum Perdata</p>
                        </div>
                    </article>
                    <article class="teacher-card">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80" alt="Dosen">
                        <div class="teacher-body">
                            <h3>Prof. Budi Santoso, S.H., M.Hum.</h3>
                            <p>Hukum Pidana</p>
                        </div>
                    </article>
                    <article class="teacher-card">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=600&q=80" alt="Dosen">
                        <div class="teacher-body">
                            <h3>Siti Rahma, S.H., M.H.</h3>
                            <p>Hukum Tata Negara</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <span>Berita</span>
                    <h2>Informasi Terbaru</h2>
                </div>
                <div class="news-grid">
                    <article class="news-card">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Berita">
                        <div class="news-body">
                            <div class="news-date">12 Oktober 2026</div>
                            <h3>Seminar Hukum dan Keadilan Sosial</h3>
                            <p>Program Studi Hukum mengadakan seminar nasional untuk memperkuat pemahaman mahasiswa terhadap isu hukum terkini.</p>
                        </div>
                    </article>
                    <article class="news-card">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Berita">
                        <div class="news-body">
                            <div class="news-date">08 Oktober 2026</div>
                            <h3>Pelatihan Argumentasi Hukum</h3>
                            <p>Mahasiswa mengikuti workshop legal reasoning dan simulasi kasus untuk meningkatkan kemampuan analisis hukum.</p>
                        </div>
                    </article>
                    <article class="news-card">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Berita">
                        <div class="news-body">
                            <div class="news-date">03 Oktober 2026</div>
                            <h3>Kerja Sama dengan Lembaga Hukum</h3>
                            <p>Program Studi Hukum membuka peluang kolaborasi magang dan pembelajaran langsung dengan lembaga pengadilan.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section cta-section">
            <div class="container">
                <div class="cta-box">
                    <div>
                        <span class="badge" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">Pendaftaran Mahasiswa Baru</span>
                        <h2>Mari Bergabung dengan Program Studi Hukum</h2>
                    </div>
                    <a class="btn btn-primary" href="{{ route('pendaftaran') }}">Daftar Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <div>
                <h3>Program Studi Hukum</h3>
                <p>Mencetak lulusan hukum yang unggul, berintegritas, dan peduli masyarakat.</p>
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
