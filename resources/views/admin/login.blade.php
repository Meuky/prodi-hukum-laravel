<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f3f6fb; margin: 0; display: grid; place-items: center; min-height: 100vh; }
        .box { width: min(420px, calc(100% - 32px)); background: white; border-radius: 18px; box-shadow: 0 18px 50px rgba(0,0,0,.08); padding: 30px; }
        h2 { margin-bottom: 20px; color: #12385f; }
        .field { margin-bottom: 16px; }
        label { display: block; margin-bottom: 8px; color: #12385f; font-weight: 600; }
        input { width: 100%; padding: 12px 14px; border: 1px solid #dce5f0; border-radius: 10px; }
        button { width: 100%; padding: 13px 16px; border: none; border-radius: 12px; background: #d4af37; color: #0c2744; font-weight: 700; cursor: pointer; }
        .error { color: #b91c1c; margin-bottom: 14px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login Admin</h2>
        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
