@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success">
        Laporan Anda berhasil dikirim. Terima kasih, {{ $laporan['nama'] }}.
    </x-alert>

    <h2>Data Laporan</h2>

    <dl class="data">
        <div><dt>Nama Pelapor</dt><dd>{{ $laporan['nama'] }}</dd></div>
        <div><dt>Lokasi Kejadian</dt><dd>{{ $laporan['lokasi'] }}</dd></div>
        <div><dt>Tinggi Genangan</dt><dd>{{ $laporan['tinggi'] }} cm</dd></div>
    </dl>

    <a href="{{ route('laporan.index') }}" class="tombol">Lihat Daftar Laporan</a>
@endsection