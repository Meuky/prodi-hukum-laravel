<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <style>
        body { margin:0; font-family:'Segoe UI', sans-serif; background:#f3f6fb; }
        .container { width:min(1100px, calc(100% - 32px)); margin:0 auto; padding:30px 0; }
        .panel { background:white; padding:24px; border-radius:18px; box-shadow:0 15px 30px rgba(11,20,40,.06); }
        table { width:100%; border-collapse:collapse; }
        th, td { border-bottom:1px solid #e5e7eb; padding:12px 10px; text-align:left; }
        a { color:#12385f; }
        .btn { display:inline-block; padding:10px 14px; border-radius:10px; background:#12385f; color:white; text-decoration:none; }
    </style>
</head>
<body>
<div class="container">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
        <h2 style="color:#12385f; margin:0;">Data Pendaftaran</h2>
        <a class="btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
    </div>
    <div class="panel">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftaran as $item)
                    <tr>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->asal_sekolah }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 18px;">{{ $pendaftaran->links() }}</div>
    </div>
</div>
</body>
</html>
