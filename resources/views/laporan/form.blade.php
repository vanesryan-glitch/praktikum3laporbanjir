@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>
    <p class="keterangan">Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda.</p>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <div class="field">
            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="pesan-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="field">
            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
            @error('lokasi')
                <div class="pesan-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="field">
            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" value="{{ old('tinggi') }}">
            @error('tinggi')
                <div class="pesan-error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="tombol">Kirim Laporan</button>
    </form>
@endsection