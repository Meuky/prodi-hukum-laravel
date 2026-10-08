<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body { margin: 0; font-family: 'Segoe UI', sans-serif; background: #f3f6fb; color: #1f2937; }
        .topbar { background: #12385f; color: white; padding: 16px 30px; display: flex; justify-content: space-between; align-items: center; }
        .content { padding: 30px; }
        .grid { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 20px; }
        .card { background: white; padding: 20px; border-radius: 16px; box-shadow: 0 15px 30px rgba(10,20,40,.06); }
        .card h3 { margin: 0 0 10px; color: #12385f; }
        .stat { font-size: 2rem; font-weight: 700; color: #d4af37; }
        .logout { color: white; text-decoration: none; }
    </style>
</head>
<body>
    <div class="topbar">
        <h2>Admin Prodi Hukum</h2>
        <a href="{{ route('admin.logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>

    <div class="content">
        <div class="grid">
            <div class="card">
                <h3>Berita</h3>
                <div class="stat">{{ $jumlahBerita }}</div>
            </div>
            <div class="card">
                <h3>Dosen</h3>
                <div class="stat">{{ $jumlahDosen }}</div>
            </div>
            <div class="card">
                <h3>Pendaftar</h3>
                <div class="stat">{{ $jumlahPendaftar }}</div>
            </div>
        </div>
    </div>
</body>
</html>
