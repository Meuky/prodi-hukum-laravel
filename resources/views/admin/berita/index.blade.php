<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita</title>
    <style>
        body { margin: 0; font-family: 'Segoe UI', sans-serif; background: #f3f6fb; }
        .container { width: min(1100px, calc(100% - 32px)); margin: 0 auto; padding: 30px 0; }
        .panel { background: white; padding: 24px; border-radius: 18px; box-shadow: 0 15px 30px rgba(11,20,40,.06); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 10px; border-bottom: 1px solid #e5e7eb; text-align: left; }
        a.button, button.button { background: #12385f; color: white; padding: 10px 14px; border:none; border-radius: 10px; text-decoration: none; }
        .btn-secondary { background: #d4af37; color: #0c2744; }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    </style>
</head>
<body>
<div class="container">
    <div class="top">
        <h2>Kelola Berita</h2>
        <a class="button btn-secondary" href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a class="button" href="{{ route('admin.berita.create') }}">Tambah Berita</a>
    </div>
    <div class="panel">
        @if(session('success'))
            <div style="background:#ecfdf5;color:#166534;padding:12px 14px;border-radius:10px;margin-bottom:14px;">{{ session('success') }}</div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($berita as $item)
                    <tr>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('admin.berita.edit', $item) }}" class="button btn-secondary">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="button" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 18px;">{{ $berita->links() }}</div>
    </div>
</div>
</body>
</html>
