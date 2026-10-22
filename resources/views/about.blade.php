@extends('layouts.app')
@section('title', 'Tentang')

@section('content')
<div class="text-center mb-4">
    <h2 class="section-heading">Tentang Ronaverse</h2>
</div>

<div class="row g-4 justify-content-center">
    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-body p-4">
                <h4 class="detail-title mb-3">Identitas</h4>
                <table class="table table-borderless table-pink mb-0">
                    <tr><th>Nama</th><td>Rona Fitriyani</td></tr>
                    <tr><th>NIM</th><td>251011701083</td></tr>
                    <tr><th>Program Studi</th><td>Sistem Informasi</td></tr>
                    <tr><th>Universitas</th><td>Universitas Pamulang</td></tr>
                    <tr><th>Mata Kuliah</th><td>Rekayasa Web</td></tr>
                    <tr><th>Dosen</th><td>Afif Efendi</td></tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-body p-4">
                <h4 class="detail-title mb-3">Tentang Website</h4>
                <p>
                    Ronaverse adalah katalog game indie yang dibuat sebagai tugas UTS Rekayasa Web.
                    Website ini menampilkan daftar game lengkap dengan halaman detail, pencarian,
                    dan filter genre.
                </p>
                <p class="mb-2 fw-bold">Dibuat dengan:</p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-pink">Laravel 13</span>
                    <span class="badge badge-pink">Blade Template</span>
                    <span class="badge badge-pink">Bootstrap 5</span>
                    <span class="badge badge-pink">MySQL</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('games.index') }}" class="btn btn-outline-pink">← Kembali ke Beranda</a>
</div>
@endsection