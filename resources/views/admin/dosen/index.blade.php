<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Dosen</title>
    <style>
        body { margin:0; font-family:'Segoe UI', sans-serif; background:#f3f6fb; }
        .container { width:min(1100px, calc(100% - 32px)); margin:0 auto; padding:30px 0; }
        .panel { background:white; padding:24px; border-radius:18px; box-shadow:0 15px 30px rgba(11,20,40,.06); }
        table { width:100%; border-collapse:collapse; }
        th, td { border-bottom:1px solid #e5e7eb; padding:12px 10px; text-align:left; }
        a, button { text-decoration:none; border:none; cursor:pointer; }
        .btn { display:inline-block; padding:10px 14px; border-radius:10px; }
        .primary { background:#12385f; color:white; }
        .gold { background:#d4af37; color:#0c2744; }
    </style>
</head>
<body>
<div class="container">
    <h2 style="margin-bottom:20px; color:#12385f;">Kelola Dosen</h2>
    <div class="panel">
        <div style="display:flex; justify-content:space-between; margin-bottom:18px;">
            <a class="btn primary" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="btn gold" href="{{ route('admin.dosen.create') }}">Tambah Dosen</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Bidang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosen as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->bidang }}</td>
                        <td>
                            <a class="btn gold" href="{{ route('admin.dosen.edit', $item) }}">Edit</a>
                            <form action="{{ route('admin.dosen.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn primary" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top:16px;">{{ $dosen->links() }}</div>
    </div>
</div>
</body>
</html>
