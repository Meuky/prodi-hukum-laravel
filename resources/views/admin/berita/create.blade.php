<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f3f6fb; margin:0; }
        .container { width: min(900px, calc(100% - 32px)); margin: 0 auto; padding: 36px 0; }
        .panel { background:white; padding:28px; border-radius:18px; box-shadow:0 15px 30px rgba(11,20,40,.06); }
        form { display:grid; gap:16px; }
        label { display:block; margin-bottom:8px; font-weight:600; color:#12385f; }
        input, textarea, select { width:100%; padding:12px 14px; border:1px solid #dfe7f0; border-radius:12px; }
        textarea { min-height:180px; }
        button { background:#d4af37; color:#0c2744; border:none; padding:12px 18px; border-radius:12px; font-weight:700; }
        a { color: #12385f; }
    </style>
</head>
<body>
<div class="container">
    <div class="panel">
        <h2>Tambah Berita</h2>
        <form method="POST" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Judul</label>
                <input type="text" name="judul" required>
            </div>
            <div>
                <label>Ringkasan</label>
                <textarea name="ringkasan" required></textarea>
            </div>
            <div>
                <label>Isi</label>
                <textarea name="isi" required></textarea>
            </div>
            <div>
                <label>Gambar</label>
                <input type="file" name="gambar">
            </div>
            <div>
                <label>Status</label>
                <select name="status">
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
            <button type="submit">Simpan</button>
            <div style="margin-top: 14px;"><a href="{{ route('admin.berita.index') }}">Kembali</a></div>
        </form>
    </div>
</div>
</body>
</html>
