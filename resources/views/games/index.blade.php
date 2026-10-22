@extends('layouts.app')
@section('title', 'UTS_251011701011')

@section('hero')
<div class="hero-pink hero-full text-center">
    <div class="container">
        <div class="hero-icon mb-2">
    <svg width="72" height="46" viewBox="0 0 64 40" fill="currentColor" aria-hidden="true">
        <path d="M14 4h36c6 0 10 5 11 12l2 14c.6 4-2 8-6 8-3 0-5-2-7-4l-4-5H18l-4 5c-2 2-4 4-7 4-4 0-6.6-4-6-8l2-14C4 9 8 4 14 4z"/>
        <rect x="14" y="17" width="12" height="4" rx="1" fill="#fff"/>
        <rect x="18" y="13" width="4" height="12" rx="1" fill="#fff"/>
        <circle cx="44" cy="16" r="2.6" fill="#fff"/>
        <circle cx="50" cy="22" r="2.6" fill="#fff"/>
    </svg>
</div>
        <h1 class="hero-title fw-bold">Ronaverse</h1>
       <p class="hero-tagline">Big Games in My Tiny World</p>
<p class="hero-identity mb-4">Rona Fitriyani | 251011701083 | Prodi Sistem Informasi | Dosen: Afif Efendi</p>
        <a href="#daftar-game" class="btn btn-light btn-lg rounded-pill px-4 btn-explore">
            Jelajahi Game ↓
        </a>
    </div>
</div>
@endsection

@section('content')
<div id="daftar-game">

    {{-- Pencarian --}}
    <form action="{{ route('games.index') }}#daftar-game" method="GET" class="search-box mx-auto mb-3">
        @if (request('genre'))
            <input type="hidden" name="genre" value="{{ request('genre') }}">
        @endif
        <div class="input-group">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                   placeholder="Cari judul game...">
            <button class="btn btn-primary px-4" type="submit">Cari</button>
        </div>
    </form>

    {{-- Filter genre --}}
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
        <a href="{{ route('games.index', ['q' => request('q')]) }}#daftar-game"
           class="genre-pill {{ request('genre') ? '' : 'active' }}">Semua</a>
        @foreach ($genres as $genre)
            <a href="{{ route('games.index', ['genre' => $genre, 'q' => request('q')]) }}#daftar-game"
               class="genre-pill {{ request('genre') === $genre ? 'active' : '' }}">{{ $genre }}</a>
        @endforeach
    </div>

    {{-- Daftar card --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @forelse ($games as $game)
        <div class="col">
            <div class="card card-game h-100 shadow-sm">
                <img src="{{ asset('assets/images/' . $game->image) }}"
                     class="card-img-wrap" alt="{{ $game->title }}"
                     style="height:220px;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->title }}</h5>
                    <p class="text-muted mb-2">{{ $game->developer }}</p>
                    <span class="badge badge-pink">{{ $game->genre }}</span>
                    <span class="badge badge-soft text-wrap text-start">🎮 {{ $game->platform }}</span>
                    <p class="fw-bold mt-3 mb-0">Rp {{ number_format($game->price, 0, ',', '.') }}</p>
                </div>
                <div class="card-footer border-0 pb-3">
                    <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="empty-state text-center py-5">
                <div class="fs-1">🔍</div>
                <p class="mb-2">Game yang kamu cari tidak ditemukan.</p>
                <a href="{{ route('games.index') }}#daftar-game" class="btn btn-outline-pink">Reset pencarian</a>
            </div>
        </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $games->fragment('daftar-game')->links() }}
    </div>
</div>
@endsection