@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>
    <p class="keterangan">Menampilkan {{ count($laporans) }} laporan terbaru.</p>

    @forelse ($laporans as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection