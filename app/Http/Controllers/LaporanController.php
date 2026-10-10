<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Menampilkan form pelaporan
    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $laporan = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ]);

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporans = [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Dayeuhkolot',  'tinggi' => 20],
            ['nama' => 'Siti Aminah',  'lokasi' => 'Baleendah',    'tinggi' => 50],
            ['nama' => 'Ahmad Fauzi',  'lokasi' => 'Bojongsoang',  'tinggi' => 85],
            ['nama' => 'Rina Marlina', 'lokasi' => 'Majalaya',     'tinggi' => 30],
        ];

        return view('laporan.index', compact('laporans'));
    }
}