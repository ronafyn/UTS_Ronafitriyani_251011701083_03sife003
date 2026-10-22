<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Ronaverse</title>

    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌸</text></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-pink sticky-top">
        <div class="container">
            <a class="navbar-brand brand-logo" href="{{ route('games.index') }}">
                <svg viewBox="0 0 64 40" fill="currentColor" aria-hidden="true">
                    <path d="M14 4h36c6 0 10 5 11 12l2 14c.6 4-2 8-6 8-3 0-5-2-7-4l-4-5H18l-4 5c-2 2-4 4-7 4-4 0-6.6-4-6-8l2-14C4 9 8 4 14 4z"/>
                    <rect x="14" y="17" width="12" height="4" rx="1" fill="#fff"/>
                    <rect x="18" y="13" width="4" height="12" rx="1" fill="#fff"/>
                    <circle cx="44" cy="16" r="2.6" fill="#fff"/>
                    <circle cx="50" cy="22" r="2.6" fill="#fff"/>
                </svg>
                <span class="brand-text">Rona<span class="brand-verse">verse</span></span>
</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('games.index') ? 'active' : '' }}"
           id="nav-beranda" href="{{ route('games.index') }}">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="nav-daftar"
           href="{{ route('games.index') }}#daftar-game">Daftar Game</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
           href="{{ route('about') }}">Tentang</a>
    </li>
</ul>
            </div>
        </div>
    </nav>

    @yield('hero')

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 mt-4">
        © 2026 Ronaverse - Made with Love | Rona Fitriyani - 251011701083
    </footer>

    <a href="#" id="btn-top" class="btn-top" aria-label="Kembali ke atas">↑</a>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
    const btnTop = document.getElementById('btn-top');
    const navBeranda = document.getElementById('nav-beranda');
    const navDaftar = document.getElementById('nav-daftar');
    const daftar = document.getElementById('daftar-game'); // hanya ada di Beranda

    function updateNav() {
        btnTop.classList.toggle('show', window.scrollY > 300);

        if (!daftar) return; // bukan halaman Beranda
        const sudahDiDaftar = daftar.getBoundingClientRect().top <= window.innerHeight * 0.4;
        navDaftar.classList.toggle('active', sudahDiDaftar);
        navBeranda.classList.toggle('active', !sudahDiDaftar);
    }

    window.addEventListener('scroll', updateNav);
    window.addEventListener('load', updateNav);

    if (daftar) {
        navDaftar.addEventListener('click', function (e) {
            e.preventDefault();
            daftar.scrollIntoView({ behavior: 'smooth' });
        });
        navBeranda.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
</script>
</body>
</html>