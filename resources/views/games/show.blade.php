@extends('layouts.app')
@section('title', $game->title)

@section('content')
<div class="card shadow">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ asset('assets/images/' . $game->image) }}"
                 class="img-fluid w-100 h-100" alt="{{ $game->title }}"
                 style="object-fit:cover;max-height:480px;">
        </div>
        <div class="col-md-7">
            <div class="card-body p-4">
                <h2 class="detail-title fw-bold">{{ $game->title }}</h2>
                <span class="badge badge-soft mb-3">{{ $game->genre }}</span>

                <table class="table table-borderless table-pink">
                    <tr><th>Developer</th><td>{{ $game->developer }}</td></tr>
                    <tr><th>Platform</th><td>{{ $game->platform }}</td></tr>
                    <tr><th>Harga</th><td class="fw-bold">Rp {{ number_format($game->price, 0, ',', '.') }}</td></tr>
                </table>

                <p>{{ $game->description }}</p>
                <a href="{{ route('games.index') }}" class="btn btn-outline-pink">← Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection