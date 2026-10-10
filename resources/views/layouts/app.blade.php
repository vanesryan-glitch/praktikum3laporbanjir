<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="topbar">
        <div class="container topbar-inner">
            <div class="brand">
                <strong>LaporBanjir</strong>
                <span>BPBD Kabupaten Bandung</span>
            </div>
            <nav>
                <a href="{{ route('laporan.create') }}"
                   class="{{ request()->routeIs('laporan.create') ? 'aktif' : '' }}">Lapor Banjir</a>
                <a href="{{ route('laporan.index') }}"
                   class="{{ request()->routeIs('laporan.index') ? 'aktif' : '' }}">Daftar Laporan</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="panel">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            &copy; {{ date('Y') }} BPBD Kabupaten Bandung. Prototipe sistem pelaporan banjir.
        </div>
    </footer>

</body>
</html>