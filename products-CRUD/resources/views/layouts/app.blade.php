<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Coloque CSS aqui (bootstrap/tailwind depois) -->
</head>
<body style="font-family: Arial, sans-serif; padding:20px;">
    <header>
        <h1><a href="{{ route('products.index') }}">Products CRUD</a></h1>
        <hr>
    </header>

    @if(session('success'))
        <div style="background:#d4edda;color:#155724;padding:10px;margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</body>
</html>
